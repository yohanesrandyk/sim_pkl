<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sesi extends Model
{
    //

    protected $table="Session";
    protected $fillable=["nama","isi","status"];
}
