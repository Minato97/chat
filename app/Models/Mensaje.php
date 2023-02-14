<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mensaje extends Model
{
   protected $table = 'mensajes';
   protected $fillable = [
       'id',
       'id_user',
       'mensaje'
   ];

    public function users_Rel(){
        return $this->belongsTo(User::class,'id_users');
    }
}
