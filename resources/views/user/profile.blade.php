<x-layout>
    <div style="background-color: #fef4d4">
        <nav class="navbar bg-body-tertiary mt-0 pt-0">
            <div class="container-fluid">
                <span class="navbar-text mb-0 h1">
                    <h1>Benvenuto {{ $user->name }}</h1>
                </span>
                <span class="navbar-text mt-2">
                    <h4>Articoli caricati: {{ count($all_articles) }}</h4>
                </span>
                <span class="navbar-text mt-2">
                    <h4>Articoli pubblicati: {{count($articles)}}</h4>
                </span>
                <span class="navbar-text mt-2">
                    <h4>Articoli da approvare: {{count($articles_waiting)}}</h4>
                </span>
            </div>
        </nav>




        @if (count($all_articles) == 0)


            <div class="col-lg-8 mx-auto col-10 noarticle">
                <p>NON HAI ANCORA CARICATO NESSUN ARTICOLO</p>
            </div>
        @else
            {{-- ARTICOLI APPROVATI --}}

            <div class="col-lg-8 mx-auto col-10 text-center">
                <div class="cointainerBoxCategorie">
                    <h1 style="text-align: center">Ecco gli articoli che hai pubblicato:</h1>


                    <div class="container main_card_container">
                        <div class="row justify-content-center">

                            @foreach ($articles as $article)
                                <div class="main_card_inner_container">



                                    <div class="main_card_image_container">
                                        <img id="productImage_{{ $article->id }}"
                                            @if (count($article->images) != 0) src="storage/{{ $article->images[0]->path }}"@else 
                            src="/img/default-img.gif" @endif
                                            class="img-fluid main_card_image" alt="Nessuna immagine da mostrare">
                                    </div>

                                    <h3 class="main_card_h3">
                                        {{ $article->name }}</h3>
                                    <h2 class="main_card_h2">
                                        {{ $article->price }}€</h2>

                                    <a href="{{ route('article.show', ['article' => $article]) }}"
                                        style="display: flex; justify-content:center"><button class="buttonCard">Scopri
                                            di
                                            più</button></a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            {{-- ARTICOLI DA APPROVARE --}}

            <div class="col-lg-8 mx-auto col-10 text-center">
                <div class="cointainerBoxCategorie">
                    <h1 style="text-align: center">Ecco gli articoli in attesa di essere approvati:</h1>


                    <div class="container main_card_container">
                        <div class="row justify-content-center">

                            @foreach ($articles_waiting as $article_waiting)
                                <div class="main_card_inner_container">



                                    <div class="main_card_image_container">
                                        <img id="productImage_{{ $article_waiting->id }}"
                                            @if (count($article_waiting->images) != 0) src="storage/{{ $article_waiting->images[0]->path }}"@else 
                                src="/img/default-img.gif" @endif
                                            class="img-fluid main_card_image" alt="Nessun immagine da mostrare">
                                    </div>

                                    <h3 class="main_card_h3">
                                        {{ $article_waiting->name }}</h3>
                                    <h2 class="main_card_h2">
                                        {{ $article_waiting->price }}€</h2>

                                    <a href="{{ route('article.show', ['article' => $article]) }}"
                                        style="display: flex; justify-content:center"><button class="buttonCard">Scopri
                                            di
                                            più</button></a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

        @endif
    </div>


    <script>
        function changeImage(id) {
            document.getElementById('productImage_' + id).src = '/img/default-img.gif';
        }

        function restoreImage(id) {
            document.getElementById('productImage_' + id).src = '/img/default-img.gif';
        }
    </script>
</x-layout>
