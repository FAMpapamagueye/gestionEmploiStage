<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Apprenant;
use Livewire\WithPagination;

class Apprenants extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public function render()
    {
        return view('livewire.apprenants.index', [
            'apprenants' => Apprenant::paginate(5),
        ])->extends('layouts.app')
          ->section('content');
    }
}
