<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Denouncement;
use App\Models\Contact;
use Illuminate\Http\Request;
use App\Models\User;

class ManagerController extends Controller
{
    public function ManagerDenunciation(){
        return view('manager.list');
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
                // Almacenar el archivo en la carpeta especificada
                $path = $file->store('imagenes/'.$user->folder_name, 'public');
                $imagenes[] = $path;
                echo $path;
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
        return redirect()->route('manager.denunciationsdetail', ['id' => $request->id]);
    }
    public function ResponseRequest(Request $request){
        if($request->final_comments){
            $affectedRows = Denouncement::where('id', $request->id)->update([
                'status' => $request->status,
                'final_comments'=> $request->final_comments
            ]);
        }else{
            $affectedRows = Denouncement::where('id', $request->id)->update([
                'status' => $request->status,
            ]);
        }

        return redirect()->route('manager.denunciationsdetail', ['id' => $request->id]);
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

        $initial_evidence_images = json_decode($denouncement->initial_evidence, true);
        $imagePaths = [];
        $nombre=$user->name.' '.$user->last_name;
        foreach ($initial_evidence_images as $image) {
            $imagePaths[] = asset('storage/' . $image);
        }
        return view('manager.denouncement', compact('denouncement','imagePaths','nombre','contact'));
    }
}
