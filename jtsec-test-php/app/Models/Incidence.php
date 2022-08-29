<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Incidence extends Model
{
    use HasFactory;

    protected $table = 'incidences';

    //Relación de muchos a uno.

    public function user(){
        return $this->belongsTo('App\Models\User', 'user_id');
    }

    public function activities()
    {
        return $this->belongsTo('App\Models\Activity', 'activity_id');
    }
}
