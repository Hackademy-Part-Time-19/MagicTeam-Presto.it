<div style="display: flex;align-items:center;justify-content:center;margin-top:30px;">
    <div class="col-lg-8 mx-auto col-10 custom-style-html-lavora">
        <div class="containerImgTxtFormRicercaHome">
            <img src="/img/logo_presto.svg" alt="" style="width: 150px;margin-top:20px;margin-bottom:20px">

            @if($article->is_accepted == 1)

                <h2 class="txtFormRicercaHome" style="text-align: center; color: rgb(47, 255, 5)">Voilà! Il tuo articolo "{{$article->name}}" è stato revisionato e pubblicato!</h1>
               
                <h4 style="color: rgb(255, 184, 5)">
                    Il tuo articolo ha passato i diversi check di sicurezza ed è finalmente disponibile a questo <a href="{{route("article.show",["article" => $article->id])}}">link!</a>
                </h4>

                <img src="/img/email_revisore.svg" alt="" style="width: 350px;margin-top:20px;margin-bottom:20px">


            @elseif ($article->is_accepted == 0)

            <h2 class="txtFormRicercaHome" style="text-align: center; color: rgb(255, 5, 5)">Ops.. Il tuo articolo "{{$article->name}}" è stato revisionato e non è stato pubblicato..</h1>
               
                <h4 style="color: rgb(255, 184, 5)">
                    Il tuo articolo non ha passato i relativi check di sicurezza e non è stato pubblicato. 
                </h4>

                <img src="/img/email_revisore.svg" alt="" style="width: 350px;margin-top:20px;margin-bottom:20px">

            @endif

        </div>
    </div>
</div>
