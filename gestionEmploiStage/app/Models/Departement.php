<?php

namespace App\Models;

use App\Models\Filiere;
use App\Models\Promotion;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Departement extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function promotion()
    {
        return $this->belongsTo(Promotion::class, 'promotion_id');
    }

    public function filieres()
    {
        return $this->hasMany(Filiere::class);
    }
}
