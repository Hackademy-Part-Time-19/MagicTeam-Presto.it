<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;
use App\Mail\RefusedArticleMail;
use App\Mail\AcceptedArticleMail;
use Illuminate\Support\Facades\Mail;

class ArticleRevisorPage extends Component
{
    public function render()
    {
        $query = Article::query();

        $articles = $query->where("is_accepted", null)->get();

        return view('livewire.article-revisor-page', compact('articles'));
    }

    public function acceptArticle(Article $article)
    {

        $article->is_accepted = 1;
        $article->save();

        Mail::to($article->user->email)->send(new AcceptedArticleMail($article));
    }

    public function refuseArticle(Article $article)
    {

        $article->is_accepted = 0;
        $article->save();

        Mail::to($article->user->email)->send(new RefusedArticleMail($article));

    }

    public $modalOpen = false;
    public $selectedImage;

    public function openImageModal($imageUrl)
    {
        $this->selectedImage = $imageUrl;
        $this->modalOpen = true;
    }

    public function closeModal()
    {
        $this->modalOpen = false;
    }

}
