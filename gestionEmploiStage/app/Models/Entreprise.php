<?php

namespace App\Models;

use App\Models\Apprenant;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Entreprise extends Model
{
    use HasFactory;

    public function apprenants()
    {
        return $this->belongsToMany(Apprenant::class, 'stages', 'entreprise_id', 'apprenant_id');
    }
}
