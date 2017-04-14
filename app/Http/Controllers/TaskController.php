<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TaskController extends Controller
{
    //

    public static function index(){
        $tasks=Task::all();
        return view('welcome',compact('tasks'));
    }

    public static function show($id){
        $tasks=Task::find($id);
    return view('data',compact('tasks'));
    }

//todo why not wporking

//
//    public static function show(Task $id){
////        $tasks=Task::find($id);
//        return view('data',compact('id'));
//    }
}
