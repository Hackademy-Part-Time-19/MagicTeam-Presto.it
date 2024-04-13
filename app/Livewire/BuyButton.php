<?php

namespace App\Livewire;

use App\Models\User;
use App\Models\Article;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class BuyButton extends Component
{   

    public $articleId;
    public $user_;

    public function buttonLogic($articleId, $user_) {

        $handleUser = User::find($user_);

        if ($handleUser->cart == null) {         

            $handleUser->cart = [$articleId];

            $handleUser->save();


        }       


    }

    public function render()
    {
        return view('livewire.buy-button');
    }
}
