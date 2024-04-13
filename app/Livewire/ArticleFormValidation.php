<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;
use App\Models\Category;
use App\Jobs\resizeImage;
use App\Jobs\watermarkImage;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;
use App\Jobs\GoogleVisionLabelImage;
use App\Jobs\GoogleVisionSafeSearch;
use Illuminate\Validation\Rules\File;
use Illuminate\Support\Facades\Validator;

class ArticleFormValidation extends Component
{

    use WithFileUploads;


    #[Validate]

    public $name;

    public $description;

    public $price;

    public $category_id;

    public $user_id;

    public $images = [];

    public $temporary_images = [];



    protected $rules = [
        'name' => 'required|max:20',
        'description' => 'required|max:500',
        'price' => 'required|decimal:0,2|numeric|max:9999.99',
        'category_id' => 'required',
        'images.*' => 'image|max:1024',
        /* 'temporary_images' => 'image|max:1024', */
    ];


    protected $messages = [

        'required' => 'Il campo è richiesto',
        'max' => 'Il campo indicato contiene troppi caratteri',
        'numeric' => 'Il campo accetta solamente valori numerici',
        'decimal' => 'Il campo può avere un massimo di 2 decimali',

    ];

    public function updated($property)
    {


        /* $validated = $this->validate(); */

    }

    public function removeImage($key) {

        if (in_array($key, array_keys($this->images))) {

            unset($this->images[$key]);

        }


    }

    public function updatedTemporaryImages()
    {

        if (
            $this->validate([
                'temporary_images.*' => 'image|max:1024'
            ])
        ) {

            foreach ($this->temporary_images as $image) {

                $this->images[] = $image;
            }

        }



    }

    public function save()
    {


        $validated = $this->validate();



        /* $this->article = Article::create(array_merge($validated,['user_id' => auth()->user()->id])); */

        $this->article = Category::find($this->category_id)->articles()->create(array_merge($this->validate(), ['user_id' => auth()->user()->id]));



        if (count($this->images)) {

            foreach ($this->images as $image) {

                /* $this->article->images()->create(['path'=>$image->store('images','public')]); */

                $newFilename = "articles/{$this->article->id}";
                $newImage = $this->article->images()->create(['path' => $image->store($newFilename, 'public')]);
                dispatch(new watermarkImage($newImage->path->id));
                dispatch(new resizeImage($newImage->path, 300, 300));
                dispatch(new GoogleVisionSafeSearch($newImage->id));
                dispatch(new GoogleVisionLabelImage($newImage->id));
            }
        }

        redirect()->to("article/create")->with("success", "Prodotto inserito in attesa di approvazione");


        $this->reset(['name', 'description', 'price', 'category_id', 'temporary_images', 'images']);



    }


    public function render()
    {
        return view('livewire.article-form-validation');
    }
}