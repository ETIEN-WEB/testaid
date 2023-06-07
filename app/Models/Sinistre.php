<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sinistre extends Model
{
    use HasFactory;
    protected $fillable = [
        'numero_police',
        'name',
        'email',
        'contact1',
        'contact2',
        'lieu',
        'date_sinistre',
        'details',
        'assurance_id',
        'user_id',
        'domaine_intervention_id',

    ];

    public function nature()
    {
        return $this->belongsTo('App\Models\Domaine_intervention','domaine_intervention_id', 'id');
    }


}
