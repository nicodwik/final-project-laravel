<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class question extends Model
{
    protected $fillable = ["judul","isi",'created_at','updated_at'];
    protected $guarded = [];
}
