<?php

namespace App;
use Carbon\Carbon;


class Post extends Model
{
    //

    public function comments(){
        return $this->hasMany(Comment::class);
    }


    public function addComment($body){

        //this will set id by itself

        $user_id=auth()->id();


        $this->comments()->create(compact('body','user_id'));


        //you have to set id here
//        Comment::create([
//            'body'=>request('body'),
//            'post_id'=> $this->id
//        ]);
    }

    public function user(){

        return $this->belongsTo(User::class );
    }

    public function scopeFilter($query,$filter){

        if ($month=request('month')){
            $query->whereMonth('created_at',Carbon::parse($month)->month);
        }
        if ($year=request('year')){
            $query->whereYear('created_at',$year);
        }

        if ($user=request('user_id') && (auth()->check())){
            $query->where('user_id',$user);
        }



    }

    public static function archives(){

        return static::selectRaw('year(created_at) year , monthname(created_at) month, count(*) published')
            ->groupBy('year','month')
            ->orderByRaw('min(created_at) desc')
            ->get()
            ->toArray();

    }

    public function tags(){

        return $this->belongsToMany(Tag::class );
    }


    public function likes(){

        return $this->belongsToMany(Likes::class );
    }

}
