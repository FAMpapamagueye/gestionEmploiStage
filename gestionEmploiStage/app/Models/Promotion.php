<?php

namespace App\Models;

use App\Models\Apprenant;
use App\Models\Departement;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Promotion extends Model
{
    use HasFactory;

    protected $fillable = ['libelle', 'annee'];
    protected $guarded=[];

    public function apprenants()
    {
        return $this->hasMany(Apprenant::class);
    }

    public function departements()
    {
        return $this->hasMany(Departement::class);
    }
}
