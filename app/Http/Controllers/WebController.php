<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use App\Models\DenouncementWeb;
use Illuminate\Support\Facades\Auth;
use App\Models\Denouncement;
use App\Http\Class\Common;
use App\Models\Suburb;
use App\Models\TypeDenouncements;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class WebController extends Controller{
    protected $common;

    public function __construct()
    {
        $this->common = new Common();
    }

    public function WebSearch(){
        return view('web.search');
    }

    public function SearchCase(Request $request){
        $id = $request->id;
        $denouncements = DenouncementWeb::with(['type', 'manager'])
        ->when($id, function ($query, $id) {
            return $query->where('key', $id);
        })->get();

        return response()->json($denouncements);
    }
    public function DenouncementCreate(){
        $list = TypeDenouncements::all();
        return(view('web.register',compact('list')));
    }
    public function SearchCP(Request $request){
        $result = Suburb::where('postal_code', $request->id)->limit(29)->get();
        return response()->json($result);
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
                $file->move(public_path('imagenes/Web'), $fileName);
                $imagenes[] = 'imagenes/Web/'. $fileName;
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
        $clave = $this->common->generarClave();
        $user = DenouncementWeb::create([
            'name'=>$request->name,
            'last_name'=>$request->last_name,
            'case_name'=> $request->case_name,
            'description' => $request->description,
            'key'=>$clave,
            'id_type_denouncement' => $request->id_type_denouncement,
            'initial_evidence' => $rutaImagenesJSON,
            'status_history'=>null,
            'contact_id' => $contact->id
        ]);
        return redirect()->route('manager.denuncement.record.detail', ['id' => $user->id])->with('success', 'Denuncia creada con éxito.');
    }
}
