<?php

namespace App;

use Illuminate\Database\Eloquent\Model;



class Questions extends Model
{
    const MULTIPLA = "objetiva";
    const ABERTA = "discursiva";

    protected $fillable = [
        'question', 'type', 'open_answer','close_answer','feedback','users_id'
    ];



}
