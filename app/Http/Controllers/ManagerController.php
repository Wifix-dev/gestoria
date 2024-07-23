<?php

namespace App\Http\Controllers;
use App\Models\Suburb;
use App\Models\TypeDenouncements;
use Illuminate\Support\Facades\Auth;
use App\Models\Denouncement;
use App\Models\DenouncementWeb;
use App\Models\Contact;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Str;

class ManagerController extends Controller
{
    public function create(){
        $list = TypeDenouncements::all();
        return(view('manager.create',compact('list')));
    }
    public function SaveDenouncement(Request $request){
        $rules = [
            'case_name' => 'required|string',
            'name'=>'required|string',
            'description' => 'required|string',
            'id_type_denouncement' => 'required|integer',
            'initial_evidence' => 'required',
            'initial_evidence.*' => 'image|mimes:jpeg,png,jpg|max:2048',
            'address'=>'required|string',
            'phone'=>'required|numeric',
            'contact_schedule'=>'required|string'
        ];
        $messages = [
            'name.required'=> 'Es necesario el nombre del ciudadano',
            'last_name.required'=> 'Es necesario los apellidos',
            'case_name.required' => 'El campo Asunto es obligatorio.',
            'case_name.string' => 'El campo Asunto debe ser texto.',
            'description.required' => 'Es necesario que nos detalle su caso.',
            'id_type_denouncement.required' => 'Es necesario seleccionar el tipo de petición o denuncia.',
            'id_type_denouncement.integer' => 'El tipo de petición o denuncia debe ser un número entero.',
            'initial_evidence.required' => 'Es necesario subir evidencia del caso.',
            'initial_evidence.*.image' => 'Cada elemento de la evidencia debe ser una imagen válida.',
            'initial_evidence.*.mimes' => 'El formato de la imagen debe ser jpeg, png, jpg.',
            'initial_evidence.*.max' => 'El tamaño máximo permitido para cada imagen es 2MB.',
            'address.required' => 'Es necesaria su dirección en caso de no poder contactarlo.',
            'phone.required' => 'Es necesario un número telefónico para poder mantener contacto.',
            'phone.numeric' => 'El campo de número telefónico solo debe contener números.',
            'contact_schedule.required' => 'Es necesario especificar un horario de contacto para no ser inoportunos.',
        ];
        $this->validate($request, $rules, $messages);
        $imagenes = [];
        if ($request->hasFile('initial_evidence')) {
            foreach ($request->file('initial_evidence') as $file) {
                $fileName = Str::random(20) . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('imagenes/' . Auth::user()->folder_name), $fileName);
                $imagenes[] = 'imagenes/' . Auth::user()->folder_name . '/' . $fileName;
            }
        }
        if(empty($imagenes)) {
            return redirect()->back()->with('error', 'No se han subido imágenes correctamente.');
        }
        $rutaImagenesJSON = json_encode($imagenes);
        $contact = Contact::create([
            'address' => $request->address,
            'phone' => $request->phone,
            'contact_schedule' => $request->contact_schedule,
            'suburbs_id'=> $request->id
        ]);

        $history[] = [
            'from' => 'Inicio',
            'to' => 'Revisada',
            'changed_at' => now()->toDateTimeString(),
        ];

        $user = DenouncementWeb::create([
            'name'=>$request->name,
            'last_name'=>$request->last_name,
            'case_name'=> $request->case_name,
            'description' => $request->description,
            'id_type_denouncement' => $request->id_type_denouncement,
            'initial_evidence' => $rutaImagenesJSON,
            'manager_id' => Auth::user()->id,
            'status_history' => json_encode($history),
            'contact_id' => $contact->id
        ]);
        return redirect()->route('manager.denuncement.record.detail', ['id' => $user->id])->with('success', 'Denuncia creada con éxito.');
    }

    public function SearchCP(Request $request){
        $result = Suburb::where('postal_code', $request->id)->limit(29)->get();
        return response()->json($result);
    }

    public function ManagerDenunciation(Request $request){
       // En tu controlador
       $status = $request->input('status');
       $type = $request->input('type');
       $date = $request->input('fdate');
       $tp = TypeDenouncements::all();
       $denouncements = Denouncement::with(['user', 'type', 'manager'])
        ->when($status, function ($query, $status) {
            return $query->where('status', $status); })
        ->when($type, function ($query, $type) {
            return $query->where('id_type_denouncement', $type);
        })
        ->when($date, function ($query, $date) {
            return $query->where('created_at', 'like', $date . '%');
        })->paginate(10);

       return view('manager.list', compact('denouncements','tp'));
    }

    public function ManagerDenunciationWeb(Request $request){
        $status = $request->input('status');
        $type = $request->input('type');
        $date = $request->input('fdate');
        $tp = TypeDenouncements::all();
        $denouncements = DenouncementWeb::with(['type','manager'])
         ->when($status, function ($query, $status) {
             return $query->where('status', $status); })
         ->when($type, function ($query, $type) {
             return $query->where('id_type_denouncement', $type);
         })
         ->when($date, function ($query, $date) {
             return $query->where('created_at', 'like', $date . '%');
         })->paginate(10);
        return view('manager.list_web', compact('denouncements','tp'));
     }

    public function FinalEvidence(Request $request){
        $request->validate([
            'final_evidence' => 'required|array',
            'final_evidence.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $denouncement = Denouncement::findOrFail($request->id);
        $user = User::findOrFail($denouncement->user_id);
        $imagenes = [];
        if ($request->hasFile('final_evidence')) {
            foreach ($request->file('final_evidence') as $file) {
                $fileName = Str::random(20) . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('imagenes/' . Auth::user()->folder_name), $fileName);
                $imagenes[] = 'imagenes/' . Auth::user()->folder_name . '/' . $fileName;
            }
        }
        if(empty($imagenes)) {
            return redirect()->back()->with('error', 'No se han subido imágenes correctamente.');
        }
        $rutaImagenesJSON = json_encode($imagenes);
        $affectedRows = Denouncement::where('id', $request->id)->update([
            'status' => 'Terminada',
            'final_evidence'=> $rutaImagenesJSON
        ]);
        return redirect()->route('manager.denuncement.detail', ['id' => $request->id]);
    }

    public function FinalCommentsWeb(Request $request){

        $denouncement = DenouncementWeb::findOrFail($request->id);
        $history = $denouncement->status_history ? json_decode($denouncement->status_history, true) : [];

        $history[] = [
            'from' => $denouncement->status,
            'to' => 'Comentarios Finales',
            'changed_at' => now()->toDateTimeString(),
            'comments' => $request->final_comments
        ];

        $history[] = [
            'from' => 'Comentarios Finales',
            'to' => 'Cerrada',
            'changed_at' => now()->toDateTimeString(),
        ];

        $affectedRows = DenouncementWeb::where('id', $request->id)->update([
            'status' => 'Cerrada',
            'status_history' => json_encode($history),
            'final_comments'=> $request->final_comments
        ]);
        return redirect()->route('manager.denuncement.record.detail', ['id' => $request->id]);
    }

    public function FinalEvidenceWeb(Request $request){

        $denouncement = DenouncementWeb::findOrFail($request->id);
        $history = $denouncement->status_history ? json_decode($denouncement->status_history, true) : [];

        $request->validate([
            'final_evidence' => 'required|array',
            'final_evidence.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $history[] = [
            'from' => $denouncement->status,
            'to' => 'Terminada',
            'changed_at' => now()->toDateTimeString(),
        ];

        $imagenes = [];
        if ($request->hasFile('final_evidence')) {
            foreach ($request->file('final_evidence') as $file) {
                $fileName = Str::random(20) . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('imagenes/' . Auth::user()->folder_name), $fileName);
                $imagenes[] = 'imagenes/' . Auth::user()->folder_name . '/' . $fileName;
            }
        }
        if(empty($imagenes)) {
            return redirect()->back()->with('error', 'No se han subido imágenes correctamente.');
        }
        $rutaImagenesJSON = json_encode($imagenes);
        $affectedRows = DenouncementWeb::where('id', $request->id)->update([
            'status' => 'Terminada',
            'status_history' => json_encode($history),
            'final_evidence'=> $rutaImagenesJSON
        ]);
        return redirect()->route('manager.denuncement.record.detail', ['id' => $request->id]);
    }

    public function ResponseRequest(Request $request){
        if($request->final_comments){
            $affectedRows = Denouncement::where('id', $request->id)->update([
                'status' => $request->status,
                'final_comments'=> $request->final_comments,
                'manager_id'=>Auth::user()->id
            ]);
        }else{
            $affectedRows = Denouncement::where('id', $request->id)->update([
                'status' => $request->status,
                'final_comments'=> '',
                'manager_id'=>Auth::user()->id
            ]);
        }
        return redirect()->route('manager.denuncement.detail', ['id' => $request->id]);
    }

    public function ResponseRequestWeb(Request $request){

        $denouncement = DenouncementWeb::findOrFail($request->id);
        $history = $denouncement->status_history ? json_decode($denouncement->status_history, true) : [];

        if($request->final_comments){
            $history[] = [
                'from' => $denouncement->status,
                'to' => $request->status,
                'changed_at' => now()->toDateTimeString(),
                'comments' => $request->final_comments
            ];
            $affectedRows = DenouncementWeb::where('id', $request->id)->update([
                'status' => $request->status,
                'status_history' => json_encode($history),
                'final_comments'=> $request->final_comments,
            ]);
        }else{
            $history[] = [
                'from' => $denouncement->status,
                'to' => 'Aceptada',
                'changed_at' => now()->toDateTimeString(),
            ];
            $history[] = [
                'from' => 'Aceptada',
                'to' => 'En proceso',
                'changed_at' => now()->toDateTimeString(),
            ];
            $affectedRows = DenouncementWeb::where('id', $request->id)->update([
                'status' => $request->status,
                'status_history' => json_encode($history),
                'final_comments'=> '',
            ]);
        }
        return redirect()->route('manager.denuncement.record.detail', ['id' => $request->id]);
    }

    public function FinalComments(Request $request){
        $affectedRows = Denouncement::where('id', $request->id)->update([
            'status' => $request->status,
            'final_comments'=> $request->final_comments
        ]);
        return redirect()->route('manager.denuncement.detail', ['id' => $request->id]);
    }

    public function GetDenouncement($id){
        $denouncement = Denouncement::find($id);
        $contact=Contact::find($denouncement->contact_id);
        if($denouncement->status == "En espera"){
            $affectedRows = Denouncement::where('id', $id)->update([
                'status' => 'Revisada',
            ]);
        }

        $user=User::find($denouncement->user_id);

        if (!$denouncement) {
            return redirect()->back()->with('error', 'Denuncia no encontrada.');
        }

        $nombre=$user->name.' '.$user->last_name;

        $denouncement = Denouncement::find($id);
        if (!$denouncement) {
            return redirect()->back()->with('error', 'Denuncia no encontrada.');
        }

        $contact = Contact::find($denouncement->contact_id);

        $initial_evidence_images = $denouncement->initial_evidence ? json_decode($denouncement->initial_evidence, true) : [];
        $imagePaths = array_map(fn($image) => asset('public/' . $image), $initial_evidence_images);

        $type =  TypeDenouncements::find($denouncement->id_type_denouncement)->pluck('type_service')->first();
        $finalImagePaths = [];
        if ($denouncement->final_evidence) {
            $final_evidence_images = json_decode($denouncement->final_evidence, true);
            $finalImagePaths = array_map(fn($image) => asset('public/' . $image), $final_evidence_images);
        }
        $data = [
            'denouncement' => $denouncement,
            'imagePaths' => $imagePaths,
            'contact' => $contact,
            'type' =>$type,
            'nombre' => $nombre,
            'finalImagePaths' => $finalImagePaths
        ];
        return view('manager.denouncement', $data);
    }

    public function GetDenouncementWeb($id){
        $denouncement = DenouncementWeb::with(['type', 'contact.suburb'])->when($id, function ($query, $id) {
            return $query->where('id', $id);
        })->first();

        if (!$denouncement) {
            return redirect()->back()->with('error', 'Denuncia no encontrada.');
        }

        if ($denouncement->status == "En espera") {
            $history = $denouncement->status_history ? json_decode($denouncement->status_history, true) : [];
            $history[] = [
                'from' => $denouncement->status,
                'to' => 'Revisada',
                'changed_at' => now()->toDateTimeString(),
            ];
            DenouncementWeb::where('id', $id)->update([
                'status' => 'Revisada',
                'status_history' => json_encode($history)
            ]);
        }

        $denouncement->status_history = $denouncement->status_history ? json_decode($denouncement->status_history, true) : [];
        $initial_evidence_images = $denouncement->initial_evidence ? json_decode($denouncement->initial_evidence, true) : [];
        $imagePaths = array_map(fn($image) => asset('public/' . $image), $initial_evidence_images);

        $finalImagePaths = [];
        if ($denouncement->final_evidence) {
            $final_evidence_images = json_decode($denouncement->final_evidence, true);
            $finalImagePaths = array_map(fn($image) => asset('public/' . $image), $final_evidence_images);
        }

        $data = [
            'denouncement' => $denouncement,
            'imagePaths' => $imagePaths,
            'finalImagePaths' => $finalImagePaths
        ];

        return view('manager.denouncement_web', $data);
    }
}
