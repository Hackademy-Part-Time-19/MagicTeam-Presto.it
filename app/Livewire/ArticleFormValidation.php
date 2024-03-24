<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Article;

class ArticleFormValidation extends Component
{   

    #[Validate]
    public $name = '';
    
    public $description = '';
   
    public $price = '';
   
    public $category_id = '';

    public $user_id = '';
    
    public function rules()
    {
        return [
            'name' => 'required|max:50',
            'description' => 'required|max:500',
            'price' => 'required|decimal:0,2|numeric|max:9999.99',
            'category_id' => 'required',
        ];
    }

    public function updated($property) {
        

        $validated = $this->validate();

    }

    public function save() {

        /* $validated = $this->validate([ 
            'name' => 'required|max:50',
            'description' => 'required|max:500',
            'price' => 'required|decimal:0,2|numeric|max:9999.99',
            'category_id' => 'required',
        ]); */

        $validated = $this->validate();

        Article::create(array_merge($validated,['user_id' => auth()->user()->id]));

        session()->flash('status', 'Articolo aggiunto correttamente!');

        return $this->redirect("/");

    }


    public function render()
    {
        return view('livewire.article-form-validation');
    }
}
