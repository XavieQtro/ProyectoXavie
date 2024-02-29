<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Clase extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = ['id','Nombre_clase','Horario','Instructor'];
    protected $hidden = ['created_at','updated_at','deleted_at'];

    public function clientes(){
    
        return $this->belongsToMany(Cliente::class);
    }    
}
