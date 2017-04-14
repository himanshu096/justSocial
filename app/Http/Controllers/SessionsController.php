<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
    //


    public function __construct(){

        $this->middleware('guest')->except('destroy');

    }

    public function create(){

        return view('session.create');

    }

    public function store(){


        if(! auth()->attempt(request(['email','password']))){
            return back()->withErrors([
                'message'=>'Return back and check your credentials'
            ]);
        }
        return redirect('/');

    }

    public function destroy(){
        auth()->logout();
        return redirect('/');
    }

}
