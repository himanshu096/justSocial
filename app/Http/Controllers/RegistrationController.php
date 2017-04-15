<?php

namespace App\Http\Controllers;

use App\Mail\WelcomeMail;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class RegistrationController extends Controller
{
    //

    public function create(){

        return view('registration.create');
    }


    public function store(){

        $this->validate(request(),['name'=>'required','email'=>'required|email','password'=>'required|confirmed']);

       $user= User::create([
           'name'=>\request('name'),
           'email'=>\request('email'),
           'password' => bcrypt('password')

       ]);

       //sign in

        auth()->login($user);

        session()->flash('message','Thanks for signing up');

//        Mail::to($user)->send(new WelcomeMail);

        return redirect('/');
    }



}
