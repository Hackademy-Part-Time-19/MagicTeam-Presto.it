<x-layout>
    <div class="col-lg-4 mx-auto col-12">
        <div class="containerBoxCategoria">
            <div class="boxCategoria">

                <img src="/img/elettronica.svg" alt="" class="iconaBoxCategoria">
                <h5 class="titoloBoxCategoria">
                    {{ $article->category->name }}</h5>
            </div>
        </div>
        <div id="carouselExampleIndicators" class="carousel slide carousel-custom"
            style="margin:20px; background: #FFFFFF;box-shadow: 0px 1px 12.6px rgba(0, 0, 0, 0.15);border-radius: 15px;align-item:center;justify-content:center;">

            <div class="carousel-inner">


                @foreach ($article->images as $key => $image)
                    @if ($key == 0)
                    <div class="carousel-item active">
                    @else
                    <div class="carousel-item">
                    @endif

                            <img id="productImage_{{ $article->id }}_{{$key}}"  @if (count($article->images) != 0)
                            src="http://127.0.0.1:8000/storage/{{$article->images[$key]->path}}"@else 
                            src="/img/default-img.gif" 
                            @endif
                                class="img-fluid main_card_image" alt="Nessun immagine da mostrare"
                               >

                    </div>
                @endforeach


            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>






        <div class="containerInfoProdotto">
            <h5 class="dataInfoProdotto">{{$article->created_at}}</h5>
            <h2 class="titoloInfoProdotto">
                {{ $article->name }}
            </h2>

            <p class="descrizioneInfoProdotto">{{ $article->description }}
            </p>

            <h2 class="prezzoInfoProdotto">
                {{ $article->price }}€
            </h2>
            <div class="containerBtnInfoProdotto">
                <button class="button2" style="margin-inline: 5px;"><span>Acquista ora</span></button>
                <button class="BtnContatti">
                    <div class="sign"><svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M8 0C9.06087 0 10.0783 0.421427 10.8284 1.17157C11.5786 1.92172 12 2.93913 12 4C12 5.06087 11.5786 6.07828 10.8284 6.82843C10.0783 7.57857 9.06087 8 8 8C6.93913 8 5.92172 7.57857 5.17157 6.82843C4.42143 6.07828 4 5.06087 4 4C4 2.93913 4.42143 1.92172 5.17157 1.17157C5.92172 0.421427 6.93913 0 8 0ZM8 10C12.42 10 16 11.79 16 14V16H0V14C0 11.79 3.58 10 8 10Z"
                                fill="white" />
                        </svg>
                    </div>
                    <div class="textContatti">{{ $article->user->name }}</div>
                </button>



            </div>

        </div>
    </div>
</x-layout>
