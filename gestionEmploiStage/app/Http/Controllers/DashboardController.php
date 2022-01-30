<?php

namespace App\Http\Controllers;

use App\Models\Filiere;
use App\Models\Apprenant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{

    public $IdApprenant = [];
    public function index()
    {

        $filieres = Filiere::all();

        foreach($filieres as $filiere)
        {
            foreach(Apprenant::all() as $apprenants)
            {
                if($apprenants->filiere_id == $filiere->id)
                {
                    array_push($this->IdApprenant, count(DB::table('apprenants')->where('filiere_id', $filiere->id)->get()));
                    break;
                }
            }

        }

        return view('dashboard', [
            'IdApprenants' => $this->IdApprenant,
            'filieres' =>  DB::table('filieres')->pluck('libelle')->toArray(),
        ]);
    }
}
