<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;

    protected $table = 'activities';

    protected $fillable = [
        'name'
    ];

    //Relación de uno a muchos, nos mostrará todas las incidencias de la actividad.
    public function incidences()
    {
        return $this->hasMany('App\Models\Incidence');
    }
}
