<?php

namespace App\Http\Livewire;

use App\Models\Filiere;
use Livewire\Component;
use App\Models\Apprenant;
use App\Models\Promotion;
use Livewire\WithPagination;

class Apprenants extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $newApprenant = [];
    public $isBtnAddClicked = false;

    protected $rules = [
        'newApprenant.nom' => 'required',
        'newApprenant.prenom' => 'required',
        'newApprenant.sexe' => 'required',
        'newApprenant.date_naissance' => 'required',
        'newApprenant.filiere_id' => 'required',
        'newApprenant.promotion_id' => 'required',
    ];

    public function render()
    {
        return view('livewire.apprenants.index', [
            'apprenants' => Apprenant::latest()->paginate(5),
            'filieres' => Filiere::all(),
            'promotions' => Promotion::all()
        ])->extends('layouts.app')
          ->section('content');
    }

    public function goToAddUser()
    {
        $this->isBtnAddClicked = true;
    }

    public function goToListApprenant()
    {
        $this->isBtnAddClicked = false;
    }

    public function addApprenant()
    {
        $validationAttributes = $this->validate();
        Apprenant::create($validationAttributes['newApprenant']);
        $this->newApprenant = [];

        $this->dispatchBrowserEvent('showSuccessMessage', ['message' => 'Apprenant créé avec succès!']);
    }
}
