<?php

namespace App\Http\Controllers;

use App\Models\Filiere;
use App\Models\Apprenant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FiliereController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public $IdApprenant = [];
    public function index()
    {

        $filieres = Filiere::all();

        foreach($filieres as $filiere)
        {

            // return $filiere->id;
            foreach(Apprenant::all() as $apprenants)
            {
                if($apprenants->filiere_id == $filiere->id)
                {
                    array_push($this->IdApprenant, count(DB::table('apprenants')->where('filiere_id', $filiere->id)->get()));
                    break;
                }
            }

        }

        // return $this->IdApprenant;
        return view('filieres.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Filiere::create([
            'libelle'=>$request->libelle,
            'description'=>$request->description,
        ]);
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
