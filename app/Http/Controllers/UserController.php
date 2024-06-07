<?php

namespace App\Http\Controllers;

use App\Models\Denouncement;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function UserDenunciation(){
        return view('user.register');
    }
    public function SaveDenouncement(Request $request){
        $user = Denouncement::create([
            'description' => $request->description,
            'id_type_denouncement' => $request->id_type_denouncement,
        ]);
        return redirect()->back()->with('success', 'Denuncia creada con éxito.');
    }
}


