<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Income extends Model
{
    use HasFactory;
    public function person(){
        return $this->belongsTo(person::class,'idperson','id');
    }
    public function user(){
        return $this->belongsTo(User::class,'idUsers','id');
    }
}
