<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cliente extends Model
{

    use HasFactory;
    use SoftDeletes;
    protected $fillable = ['id', 'Nombre', 'Apellido', 'Fecha_nacimiento', 'Telefono', 'Correo_electrico', 'Fecha_inscripcion', 'Identificacion'];
    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];

    public function clases()
    {
        return $this->belongsToMany(Clase::class);
    }
}
