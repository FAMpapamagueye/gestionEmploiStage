<?php

namespace App\Models;

use App\Models\Apprenant;
use App\Models\Departement;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Filiere extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function apprenants()
    {
        return $this->hasMany(Apprenant::class);
    }

    public function departement()
    {
        return $this->belongsTo(Departement::class, 'departement_id');
    }
}
