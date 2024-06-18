<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use Illuminate\Support\Facades\Auth;
use App\Models\Denouncement;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function UserDenunciation(){
        return view('user.register');
    }
    public function GetDenouncement($id){
        $denouncement = Denouncement::find($id);
if (!$denouncement) {
    return redirect()->back()->with('error', 'Denuncia no encontrada.');
}

$contact = Contact::find($denouncement->contact_id);

// Procesar la evidencia inicial
$initial_evidence_images = $denouncement->initial_evidence ? json_decode($denouncement->initial_evidence, true) : [];
$imagePaths = array_map(fn($image) => asset('storage/' . $image), $initial_evidence_images);

// Procesar la evidencia final
$finalImagePaths = [];
if ($denouncement->final_evidence) {
    $final_evidence_images = json_decode($denouncement->final_evidence, true);
    $finalImagePaths = array_map(fn($image) => asset('storage/' . $image), $final_evidence_images);
}

// Pasar las variables a la vista
return view('user.denouncement', compact('denouncement', 'imagePaths', 'contact', 'finalImagePaths'));

    }

    public function FinalComments(Request $request){
        $affectedRows = Denouncement::where('id', $request->id)->update([
            'status' => 'Cerrada',
            'final_comments'=> $request->final_comments
        ]);
        return redirect()->route('denouncement.info', ['id' => $request->id]);
    }

    public function SaveDenouncement(Request $request){
        $request->validate([
            'case_name' => 'required|string',
            'description' => 'required|string',
            'id_type_denouncement' => 'required|integer',
            'initial_evidence' => 'required',
            'initial_evidence.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'address'=>'required|string',
            'phone'=>'required|numeric',
            'contact_schedule'=>'required|string'
        ]);

        $imagenes = [];

        if ($request->hasFile('initial_evidence')) {
            foreach ($request->file('initial_evidence') as $file) {
                $path = $file->store('imagenes/'.Auth::user()->folder_name , 'public');
                $imagenes[] = $path;
            }
        }

        if(empty($imagenes)) {
            return redirect()->back()->with('error', 'No se han subido imágenes correctamente.');
        }

        $rutaImagenesJSON = json_encode($imagenes);

        $contact = Contact::create([
            'address' => $request->address,
            'phone' => $request->phone,
            'contact_schedule' => $request->contact_schedule
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
