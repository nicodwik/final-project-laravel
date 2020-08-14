<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = [
        'nama_tag'
    ];

    public function pertanyaan()
    {
        return $this->belongsToMany('App\Pertanyaan');
    }
}
