<?php

namespace App\Http\Controllers;
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

        $initial_evidence_images = json_decode($denouncement->initial_evidence, true);
        $imagePaths = [];

        foreach ($initial_evidence_images as $image) {
            $imagePaths[] = asset('storage/' . $image);
        }
        return view('user.denouncement', compact('denouncement','imagePaths'));
    }
    public function SaveDenouncement(Request $request){
        $request->validate([
            'description' => 'required|string|max:255',
            'id_type_denouncement' => 'required|integer',
            'initial_evidence' => 'required',
            'initial_evidence.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
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

        $user = Denouncement::create([
            'description' => $request->description,
            'id_type_denouncement' => $request->id_type_denouncement,
            'initial_evidence' => $rutaImagenesJSON
        ]);

        // Redirigir de regreso con un mensaje de éxito
        return redirect()->route('denouncement.info', ['id' => $user->id])->with('success', 'Denuncia creada con éxito.');
    }
}


