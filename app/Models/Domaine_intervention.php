<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Domaine_intervention extends Model
{
    use HasFactory;
    protected $fillable = [
        'libelle',
        'description',
    ];

    public function sinistres()
    {
        return $this->hasMany('App\Models\Domaine_intervention','domaine_intervention_id', 'id');
    }



}
