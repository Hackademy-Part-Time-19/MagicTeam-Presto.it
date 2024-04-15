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


        }  else if ($handleUser->cart != null) {

            if(in_array($articleId, $handleUser->cart) == false) {

                $actualArray = $handleUser->cart;
                array_push($actualArray, $articleId);
                $handleUser->cart = $actualArray;

                
                $handleUser->save();

            } else if (in_array($articleId, $handleUser->cart) == true) {

                    $actualArray = $handleUser->cart;
                    $key = array_search($articleId, $actualArray);

                    if ($key !== false) {

                        
                        unset($actualArray[$key]);
                        $handleUser->cart = $actualArray;

                        $handleUser->save();


                    }


            }

        }     


    }

    public function isInCart($articleId, $userId)
    {
        $user = User::find($userId);
        if ($user && $user->cart != null) {
            return in_array($articleId, $user->cart);
        }
        return false;
    }

    public function render()
    {   
        $isInCart = $this->isInCart($this->articleId, $this->user_);

        return view('livewire.buy-button', ['isInCart' => $isInCart]);
    }
}
