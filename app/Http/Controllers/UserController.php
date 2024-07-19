<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use Illuminate\Support\Facades\Auth;
use App\Models\Denouncement;
use App\Models\Suburb;
use App\Models\TypeDenouncements;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function UserDenunciation(){
        $list = TypeDenouncements::all();
        return view('user.register',compact('list'));
    }
    public function GetDenouncement($id){
        $list = TypeDenouncements::all();
        $denouncement = Denouncement::find($id);
        if (!$denouncement) {
            return redirect()->back()->with('error', 'Denuncia no encontrada.');
        }

        $contact = Contact::find($denouncement->contact_id);

        $initial_evidence_images = $denouncement->initial_evidence ? json_decode($denouncement->initial_evidence, true) : [];
        $imagePaths = array_map(fn($image) => asset('public/' . $image), $initial_evidence_images);

        $finalImagePaths = [];
        if ($denouncement->final_evidence) {
            $final_evidence_images = json_decode($denouncement->final_evidence, true);
            $finalImagePaths = array_map(fn($image) => asset('public/' . $image), $final_evidence_images);
        }

        return view('user.denouncement', compact('denouncement', 'imagePaths', 'contact', 'finalImagePaths','list'));
    }

    public function FinalComments(Request $request){
        $affectedRows = Denouncement::where('id', $request->id)->update([
            'status' => 'Cerrada',
            'final_comments'=> $request->final_comments
        ]);
        return redirect()->route('denouncement.info', ['id' => $request->id]);
    }
    public function SearchCP(Request $request){
        $result = Suburb::where('postal_code', $request->id)->limit(29)->get();
        return response()->json($result);
    }
    public function SaveDenouncement(Request $request){
        $rules = [
            'case_name' => 'required|string',
            'description' => 'required|string',
            'id_type_denouncement' => 'required|integer',
            'initial_evidence' => 'required',
            'initial_evidence.*' => 'image|mimes:jpeg,png,jpg|max:2048',
            'address'=>'required|string',
            'phone'=>'required|numeric',
            'contact_schedule'=>'required|string'
        ];

        $messages = [
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
            'suburbs_id'=>$request->id
        ]);

            $user = Denouncement::create([
                'case_name'=> $request->case_name,
                'description' => $request->description,
                'id_type_denouncement' => $request->id_type_denouncement,
                'initial_evidence' => $rutaImagenesJSON,
                'user_id' => Auth::user()->id,
                'contact_id' => $contact->id
            ]);

        return redirect()->route('denouncement.info', ['id' => $user->id])->with('success', 'Denuncia creada con éxito.');
    }
}
