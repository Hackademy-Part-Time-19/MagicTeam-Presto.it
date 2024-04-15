<div class="col-lg-4 mx-auto col-12">
   
    <div id="carouselExampleIndicators" class="carousel slide carousel-custom"
        style="margin:20px; background: #FFFFFF;box-shadow: 0px 1px 12.6px rgba(0, 0, 0, 0.15);border-radius: 15px;align-item:center;justify-content:center;">
        <div class="carousel-inner">
            @foreach ($images as $key => $image)
                <div class="carousel-item active">
                    <img src="{{ $article->images()->get()->isEmpty() ?
                    $article->images()->first()->getUrl(600,600) : 'C:\Users\Utente\Desktop\AULAB\Progetto Presto.it\MagicTeam-Presto.it\public\img\default-img.gif' }}" class="d-block w-100" alt="nessun immagine da mostrare">
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
        <h5 class="dataInfoProdotto">12.12.12</h5>
        <h2 class="titoloInfoProdotto">
            Iphone 12 pro max
        </h2>

        <p class="descrizioneInfoProdotto">Lorem ipsum dolor sit amet,
            consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam
            erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis
            nisl ut aliquip ex ea commodo consequat.
        </p>

        <h2 class="prezzoInfoProdotto">
            12,99€
        </h2>
        <div class="containerBtnInfoProdotto">
            <button class="button2" style="margin-inline: 5px;"><span>Acquista ora</span></button>
            <button class="BtnContatti">
                <div class="sign"><svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M21.9872 16.6187C21.791 18.1093 21.059 19.4775 19.9278 20.4677C18.7967 21.458 17.3437 22.0027 15.8403 22C7.10613 22 9.95368e-06 14.8939 9.95368e-06 6.15984C-0.00268507 4.65644 0.541975 3.20347 1.53226 2.0723C2.52255 0.941132 3.89074 0.209117 5.3813 0.0129775C5.75823 -0.0330459 6.13993 0.0440659 6.46943 0.232802C6.79892 0.421538 7.05855 0.711775 7.20953 1.06019L9.53277 6.24674V6.25994C9.64837 6.52664 9.69611 6.81782 9.67174 7.10747C9.64736 7.39712 9.55162 7.67623 9.39307 7.91985C9.37327 7.94955 9.35237 7.97705 9.33037 8.00455L7.04013 10.7194C7.86405 12.3936 9.61528 14.1294 11.3115 14.9555L13.989 12.6774C14.0152 12.6553 14.0428 12.6347 14.0715 12.6158C14.3149 12.4534 14.5949 12.3543 14.8863 12.3274C15.1777 12.3006 15.4712 12.3467 15.7402 12.4618L15.7545 12.4684L20.9367 14.7905C21.2857 14.941 21.5766 15.2004 21.766 15.5299C21.9554 15.8594 22.033 16.2414 21.9872 16.6187Z"
                            fill="white" />
                    </svg>
                </div>
                <div class="textContatti">3407276262</div>
            </button>



        </div>

    </div>
</div>