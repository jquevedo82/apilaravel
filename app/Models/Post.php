<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    //protected $fillable = ['title','body']; actualiza solo los campos q le enviamos dentro
   // protected $guarded = []; //los campos q no se guardan si es vacio se guardan todo
    // OJO OJO OJO nunca enviar a los metodos create y update ->all()
    //protected $table='posts';
}
