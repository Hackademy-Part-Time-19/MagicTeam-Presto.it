<x-layout>


    <div class="col-lg-4 mx-auto col-10 "
        style="border-radius:10px;display: flex;flex-wrap:wrap; align-items:center; justify-content:center; margin: 20px 10px 20px 10px;">

        <div class="containerImgTxtFormRicercaHome">
            <svg width="180" height="180" viewBox="0 0 123 123" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_3209_2498)">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M61.5 10.25C33.1946 10.25 10.25 33.1946 10.25 61.5C10.25 89.8054 33.1946 112.75 61.5 112.75C89.8054 112.75 112.75 89.8054 112.75 61.5C112.75 33.1946 89.8054 10.25 61.5 10.25ZM43.5625 48.6875C43.5625 46.3319 44.0265 43.9994 44.9279 41.8231C45.8294 39.6468 47.1506 37.6694 48.8163 36.0038C50.4819 34.3381 52.4593 33.0169 54.6356 32.1154C56.8119 31.214 59.1444 30.75 61.5 30.75C63.8556 30.75 66.1881 31.214 68.3644 32.1154C70.5407 33.0169 72.5181 34.3381 74.1837 36.0038C75.8494 37.6694 77.1706 39.6468 78.0721 41.8231C78.9735 43.9994 79.4375 46.3319 79.4375 48.6875C79.4375 53.4448 77.5477 58.0073 74.1837 61.3712C70.8198 64.7352 66.2573 66.625 61.5 66.625C56.7427 66.625 52.1802 64.7352 48.8163 61.3712C45.4523 58.0073 43.5625 53.4448 43.5625 48.6875ZM93.5722 87.043C89.7359 91.8688 84.8587 95.7655 79.3051 98.442C73.7515 101.119 67.6649 102.506 61.5 102.5C55.3351 102.506 49.2485 101.119 43.6949 98.442C38.1413 95.7655 33.2641 91.8688 29.4278 87.043C37.7354 81.0826 49.0719 76.875 61.5 76.875C73.9281 76.875 85.2646 81.0826 93.5722 87.043Z"
                        fill="#DDDDDD" />
                </g>

                <defs>
                    <clipPath id="clip0_3209_2498">
                        <rect width="180" height="180" fill="white" />
                    </clipPath>
                </defs>
            </svg>

        </div>

        <div class="col-lg-6 mx-auto col-10 text-center">
            <h4>Bentornato, <span style="color: #FDC627"> {{ $user->name }}</span></h4>
            <button class="btn " type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions"
                aria-controls="offcanvasWithBothOptions"><svg width="22" height="22" viewBox="0 0 22 22"
                    fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M11 21C16.5228 21 21 16.5228 21 11C21 5.47715 16.5228 1 11 1C5.47715 1 1 5.47715 1 11C1 16.5228 5.47715 21 11 21Z"
                        stroke="#FFA910" stroke-width="2" />
                    <path d="M11 6H11.01" stroke="#FFA910" stroke-width="2" stroke-linecap="round" />
                    <path d="M9 10H11V15M9 15H13" stroke="#FFA910" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
            </button>

            <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions"
                aria-labelledby="offcanvasWithBothOptionsLabel" style="padding-top: 140px;">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">Gestione articoli - <span
                            style="color: #FDC627"> {{ $user->name }}</span></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body" style="position: relative">
                    <div style="display: flex; align-items:center;height:50px;">
                        <svg width="27" height="27" viewBox="0 0 19 19" fill="none"
                            xmlns="http://www.w3.org/2000/svg" style="margin-inline: 10px;margin-bottom:15px;">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M9.5 19C14.7468 19 19 14.7468 19 9.5C19 4.25315 14.7468 0 9.5 0C4.25315 0 0 4.25315 0 9.5C0 14.7468 4.25315 19 9.5 19ZM14.6025 6.49325C14.6469 6.44747 14.6817 6.3932 14.7047 6.33368C14.7277 6.27417 14.7385 6.21063 14.7364 6.14686C14.7343 6.08308 14.7194 6.02038 14.6925 5.9625C14.6657 5.90462 14.6274 5.85274 14.5801 5.80996C14.5327 5.76719 14.4773 5.73438 14.417 5.71352C14.3567 5.69265 14.2928 5.68415 14.2291 5.68852C14.1655 5.69288 14.1033 5.71003 14.0464 5.73893C13.9896 5.76784 13.9391 5.80791 13.898 5.85675L8.208 12.1443L5.07775 9.1561C4.98667 9.06905 4.86474 9.02175 4.73878 9.0246C4.61282 9.02745 4.49315 9.08022 4.4061 9.1713C4.31905 9.26238 4.27175 9.38431 4.2746 9.51027C4.27745 9.63623 4.33022 9.7559 4.4213 9.84295L7.90495 13.1679L8.25788 13.5052L8.58515 13.1432L14.6025 6.49325Z"
                                fill="#29CC6A" />
                        </svg>
                        <p>Articoli pubblicati: <b> {{ count($articles) }}</b></p>
                    </div>

                    <div style="display: flex; align-items:center;height:50px;">
                        <svg width="27" height="27" viewBox="0 0 19 19" fill="none"
                            xmlns="http://www.w3.org/2000/svg" style="margin-inline: 10px;margin-bottom:15px;">
                            <g clip-path="url(#clip0_3210_2511)">
                                <mask id="mask0_3210_2511" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0"
                                    y="0" width="19" height="19">
                                    <path d="M0 0H19V19H0V0Z" fill="white" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M11.6634 4.38458H7.33721C7.11798 4.38458 7.00836 4.55046 7.02444 4.6915C7.10775 5.41715 7.26413 6.25023 7.52575 6.78296C7.87432 7.494 8.71544 8.29273 9.35048 8.82108C9.392 8.85727 9.44521 8.8772 9.50028 8.8772C9.55536 8.8772 9.60857 8.85727 9.65009 8.82108C10.2859 8.29273 11.1262 7.494 11.4748 6.78223C11.7364 6.25023 11.8928 5.41715 11.9769 4.6915C11.9929 4.55046 11.8826 4.38458 11.6641 4.38458M7.33794 3.65381C6.72117 3.65381 6.2279 4.16242 6.29879 4.77481C6.38355 5.50923 6.54944 6.45119 6.87025 7.1045C7.29482 7.96973 8.24994 8.85542 8.88425 9.38304C9.24525 9.68265 9.75679 9.68265 10.1178 9.38304C10.7521 8.85542 11.7072 7.96973 12.1318 7.1045C12.4526 6.45119 12.6185 5.50923 12.7032 4.77481C12.7734 4.16242 12.2801 3.65381 11.6634 3.65381H7.33794Z"
                                        fill="black" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M7.33677 14.6153H11.6629C11.8822 14.6153 11.9918 14.4495 11.9757 14.3084C11.8924 13.5828 11.736 12.7497 11.4744 12.2177C11.1258 11.5059 10.2847 10.7065 9.64966 10.1788C9.60814 10.1427 9.55493 10.1227 9.49985 10.1227C9.44477 10.1227 9.39156 10.1427 9.35004 10.1788C8.71427 10.7072 7.87389 11.5059 7.52531 12.2177C7.2637 12.7497 7.10731 13.5828 7.02327 14.3084C7.0072 14.4495 7.11754 14.6153 7.33604 14.6153M11.6622 15.3461C12.279 15.3461 12.7722 14.8375 12.7013 14.2251C12.6166 13.49 12.4507 12.5487 12.1299 11.8954C11.7053 11.0302 10.7502 10.1445 10.1159 9.61689C9.94321 9.47161 9.72478 9.39195 9.49912 9.39195C9.27345 9.39195 9.05503 9.47161 8.88235 9.61689C8.24804 10.1445 7.29293 11.0302 6.86835 11.8954C6.54754 12.5487 6.38166 13.4907 6.29689 14.2251C6.226 14.8375 6.71927 15.3461 7.33531 15.3461H11.6622ZM5.11523 4.01919C5.11523 3.92229 5.15373 3.82935 5.22225 3.76083C5.29078 3.6923 5.38371 3.65381 5.48062 3.65381H13.5191C13.616 3.65381 13.7089 3.6923 13.7774 3.76083C13.846 3.82935 13.8845 3.92229 13.8845 4.01919C13.8845 4.1161 13.846 4.20904 13.7774 4.27756C13.7089 4.34608 13.616 4.38458 13.5191 4.38458H5.48062C5.38371 4.38458 5.29078 4.34608 5.22225 4.27756C5.15373 4.20904 5.11523 4.1161 5.11523 4.01919Z"
                                        fill="black" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M5.11523 14.9806C5.11523 14.8837 5.15373 14.7908 5.22225 14.7223C5.29078 14.6537 5.38371 14.6152 5.48062 14.6152H13.5191C13.616 14.6152 13.7089 14.6537 13.7774 14.7223C13.846 14.7908 13.8845 14.8837 13.8845 14.9806C13.8845 15.0775 13.846 15.1705 13.7774 15.239C13.7089 15.3075 13.616 15.346 13.5191 15.346H5.48062C5.38371 15.346 5.29078 15.3075 5.22225 15.239C5.15373 15.1705 5.11523 15.0775 5.11523 14.9806Z"
                                        fill="black" />
                                </mask>
                                <g mask="url(#mask0_3210_2511)">
                                    <path
                                        d="M9.5 19C14.7467 19 19 14.7467 19 9.5C19 4.25329 14.7467 0 9.5 0C4.25329 0 0 4.25329 0 9.5C0 14.7467 4.25329 19 9.5 19Z"
                                        fill="#FFA910" />
                                </g>
                            </g>
                            <defs>
                                <clipPath id="clip0_3210_2511">
                                    <rect width="19" height="19" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>

                        <p>Articoli da approvare: <b>{{ count($articles_waiting) }}</b></p>
                    </div>

                    <div style="display: flex; align-items:center;height:50px;">
                        <svg width="27" height="27" viewBox="0 0 27 27" fill="none"
                            xmlns="http://www.w3.org/2000/svg" style="margin-inline: 10px;margin-bottom:15px;">
                            <path
                                d="M13.5 0C20.9561 0 27 6.04395 27 13.5C27 20.9561 20.9561 27 13.5 27C6.04395 27 0 20.9561 0 13.5C0 6.04395 6.04395 0 13.5 0ZM18.36 7.02C18.2182 6.91363 18.0568 6.83624 17.885 6.79224C17.7133 6.74824 17.5346 6.7385 17.3591 6.76357C17.1836 6.78864 17.0147 6.84803 16.8622 6.93836C16.7096 7.02868 16.5764 7.14817 16.47 7.29L13.5 11.2496L10.53 7.29C10.4236 7.14817 10.2904 7.02868 10.1378 6.93836C9.98527 6.84803 9.81642 6.78864 9.64092 6.76357C9.46542 6.7385 9.28669 6.74824 9.11496 6.79224C8.94322 6.83624 8.78183 6.91363 8.64 7.02C8.49817 7.12637 8.37868 7.25964 8.28836 7.41218C8.19803 7.56473 8.13864 7.73358 8.11357 7.90908C8.0885 8.08458 8.09824 8.26331 8.14224 8.43504C8.18624 8.60678 8.26363 8.76817 8.37 8.91L11.8125 13.5L8.37 18.09C8.15517 18.3764 8.06293 18.7365 8.11357 19.0909C8.1642 19.4454 8.35357 19.7652 8.64 19.98C8.92643 20.1948 9.28648 20.2871 9.64092 20.2364C9.99536 20.1858 10.3152 19.9964 10.53 19.71L13.5 15.7505L16.47 19.71C16.6848 19.9964 17.0046 20.1858 17.3591 20.2364C17.7135 20.2871 18.0736 20.1948 18.36 19.98C18.6464 19.7652 18.8358 19.4454 18.8864 19.0909C18.9371 18.7365 18.8448 18.3764 18.63 18.09L15.1875 13.5L18.63 8.91C18.7364 8.76817 18.8138 8.60678 18.8578 8.43504C18.9018 8.26331 18.9115 8.08458 18.8864 7.90908C18.8614 7.73358 18.802 7.56473 18.7116 7.41218C18.6213 7.25964 18.5018 7.12637 18.36 7.02Z"
                                fill="#FC5555" />
                        </svg>

                        <p>Articoli rifiutati: <b> {{ count($articles) }}</b></p>
                    </div>

                    <div style="position: absolute; bottom:10px; width:90%">
                        <hr style="width:100%">
                        <div style="display: flex; align-items:center;height:50px;">
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button class="buttonLogout" type="submit">Logout</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div style="background-color: #fef4d4; padding-top:30px">

        {{--         <nav class="navbar bg-body-tertiary mt-0 pt-0">
            <div class="container-fluid">
                <span class="navbar-text mb-0 h1">
                    c
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
        </nav> --}}





        @if (count($all_articles) == 0)


            <div class="col-lg-8 mx-auto col-10 noarticle">
                <p>Sembra che non ci siano ancora articoli qui! <a style="color: black"
                        href="{{ route('article.create') }}">Inizia a vendere ora!</a></p>
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
                                            @if (count($article->images) != 0) src="http://127.0.0.1:8000/storage/{{ $article->images[0]->path }}"
                                            
                                            @else

                                                 src="/img/default-img.gif" @endif
                                            class="img-fluid main_card_image" alt="Nessuna immagine da mostrare">
                                    </div>


                                    <h3 class="main_card_h3">
                                        {{ $article->name }}</h3>
                                    <h2 class="main_card_h2">
                                        {{ $article->price }}€</h2>

                                    <a href="{{ route('article.show', ['article' => $article]) }}"
                                        style="display: flex; justify-content:center"><button
                                            class="buttonCard">Scopri
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
                                            @if (count($article_waiting->images) != 0) src="http://127.0.0.1:8000/storage/{{ $article_waiting->images[0]->path }}"@else 
                                src="/img/default-img.gif" @endif
                                            class="img-fluid main_card_image" alt="Nessun immagine da mostrare">
                                    </div>

                                    <h3 class="main_card_h3">
                                        {{ $article_waiting->name }}</h3>
                                    <h2 class="main_card_h2">
                                        {{ $article_waiting->price }}€</h2>

                                    <a href="{{ route('article.show', ['article' => $article]) }}"
                                        style="display: flex; justify-content:center"><button
                                            class="buttonCard">Scopri
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
