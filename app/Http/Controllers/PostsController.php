<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;
use Illuminate\Support\Facades\Auth;


class PostsController extends Controller
{
    //

    public function __construct(){

        $this->middleware('auth')->except(['index','show']);

}

    public function index(){

        $posts=Post::latest()->filter(request(['month','year']))->get();


        //todo move this to post model
//        $archive=Post::selectRaw('year(created_at) year , monthname(created_at) month, count(*) published')
//            ->groupBy('year','month')
//            ->orderByRaw('min(created_at) desc')
//            ->get()
//            ->toArray();





        return view('posts.index',compact('posts','archive'));
    }

    public function showMyPost(){

        $posts = Post::where('user_id', Auth::id())->get();

        return view('posts.index',compact('posts','archive'));
    }

    public function show(Post $post){
//        $post=Post::find($id);
        return view('posts.show',compact('post'));
    }

    public function create(){
        return view('posts.create');
    }

    public function store(){

//        dd(request()->all());

        $this->validate(request(),['title'=>'required','body'=>'required']);
//
//        $post= new Post();
//        $post->title = request('title');
//        $post->body = request('body');
//
//        $post->save();


        auth()->user()->publish(new Post(\request(['title','body'])));

        //todo be careful it have user_id wala pnga
//        Post::create([
//            'title'=>\request('title'),
//            'body'=>\request('body'),
//            'user_id'=>auth()->id()
//            ]);

        return redirect('/');
    }


}
