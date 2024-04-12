<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;

class ArticleRevisorPage extends Component
{
    public function render()
    {
        $query = Article::query();

        $articles = $query->where("is_accepted", null)->get();

        return view('livewire.article-revisor-page',compact('articles'));
    }

    public function acceptArticle(Article $article) {

        $article->is_accepted = 1;
        $article->save();


    }

    public function refuseArticle(Article $article) {

        $article->is_accepted = 0;
        $article->save();


    }
}
