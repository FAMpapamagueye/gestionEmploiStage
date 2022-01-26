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

    public $promotionFilters = [];
    public $filiereFilters = [];
    public function render()
    {

        $this->promotionFilters = array_filter($this->promotionFilters, function($val) {
            return $val !== false;
        });

        $this->filiereFilters = array_filter($this->filiereFilters, function($val) {
            return $val !== false;
        });

        return view('livewire.apprenants.index', [
            'apprenants' => (empty($this->promotionFilters))
                ? Apprenant::all() :
                // ((empty($this->filiereFilters))
                    Apprenant::whereIn('promotion_id', array_keys($this->promotionFilters))->get(),
                        // : Apprenant::whereIn('filiere_id', array_keys($this->filiereFilters))->get()),

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
<<<<<<< HEAD


    public function confirmDelete($name, $id)
    {
        $this->dispatchBrowserEvent('showConfirmMessage', ["message" => [
            "text" => "Vous êtes sur le point de supprimer $name de la liste des apprenants. Voulez-vous continuer?",
            "title" => "Êtes-vous sûr de continuer?",
            "type" => "warning",
            "data" => [
                "user_id" => $id
            ]
            ]
        ]);
    } 

    public function deleteApprenant($id)
    {
        Apprenant::destroy($id);
        $this->dispatchBrowserEvent('showSuccessMessage', ['message' => 'Apprenant supprimé avec succès!']);
    }
=======
>>>>>>> test1
}
