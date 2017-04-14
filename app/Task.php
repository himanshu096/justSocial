<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public static function completed() {
        return static::where('completed','0')->get();
    }

    public static function find($id) {
        return static::where('id',$id)->get();
    }
}
