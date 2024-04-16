<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Carrello extends Component
{   

    public $article_id;


    protected $listeners = ['cartUpdated'];

    public function cartUpdated()
    {
        // Refresh the cart component
        $this->dispatch("render")->self();
    }

    public function removeArticle($article_id){

        $newCart = [];
        $newCart = Auth::user()->cart;

        $key = array_search($article_id, $newCart);
        unset($newCart[$key]);

        Auth::user()->cart = $newCart;

        Auth::user()->save();

        $this->dispatch('buttonUpdated');

    }

    public function render()
    {   
        
        return view('livewire.carrello');
    }
}
