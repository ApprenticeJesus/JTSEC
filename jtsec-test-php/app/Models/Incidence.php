<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Incidence extends Model
{
    use HasFactory;

    protected $table = 'incidences';

    protected $fillable = [
        'title',
        'content'
    ];

    //Relación de muchos a uno.

    public function user(){
        return $this->belongsTo('App\Models\User', 'user_id');
    }

    public function activity()
    {
        return $this->belongsTo('App\Models\Activity', 'act_id');
    }
}
