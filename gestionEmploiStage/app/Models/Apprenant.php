<?php

namespace App\Models;

use App\Models\Filiere;
use App\Models\Promotion;
use App\Models\Entreprise;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Apprenant extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function filiere()
    {
        return $this->belongsTo(Filiere::class, 'filiere_id');
    }

    public function promotion()
    {
        return $this->belongsTo(Promotion::class, 'promotion_id');
    }

    public function entreprises()
    {
        return $this->belongsToMany(Entreprise::class, 'stages', 'apprenant_id', 'entreprise_id');
    }
}
