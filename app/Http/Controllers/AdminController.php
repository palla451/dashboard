<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function show(){
        $user = Auth::user();

        if(Gate::allows('admin-profile', $user)){

            return view('dashboard',compact('user'));
        }
        return abort(403, 'Non sei autorizzato');
    }
}
