<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use App\Models\DenouncementWeb;
use Illuminate\Support\Facades\Auth;
use App\Models\Denouncement;
use App\Models\Suburb;
use App\Models\TypeDenouncements;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class WebController extends Controller{
    public function WebSearch(){
        return view('web.search');
    }

    public function SearchCase(Request $request){
        $id = $request->id;
        $denouncements = DenouncementWeb::with(['type', 'manager'])
        ->when($id, function ($query, $id) {
            return $query->where('id', $id);
        })->get();

        return $denouncements;
    }
}
