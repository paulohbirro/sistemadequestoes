<?php

namespace App;

use Illuminate\Database\Eloquent\Model;



class Questions extends Model
{
    const MULTIPLA = "MULTIPLA";
    const ABERTA = "ABERTA";

    protected $fillable = [
        'question', 'type', 'open_answer','close_answer','feedback','users_id'
    ];



}
