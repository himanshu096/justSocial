<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use App\Tag;

class TagsController extends Controller
{
    public function index(Tag $tag){

        $posts=$tag->posts;
        return view('posts.index',compact('posts'));
    }

    public function addTag(Post $post){


    }
}


