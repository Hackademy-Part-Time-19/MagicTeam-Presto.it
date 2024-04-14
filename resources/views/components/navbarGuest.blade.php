<div style="position: fixed; top: 0; width: 100%;z-index:100000">
    <div class="backgroundHeadLang">

        <div class="container-fluid col-lg-8 col-12" style="display:flex;justify-content: end;">

            <div id="wrapper">
                <div class="ln">
                    <a class="dropdown-button square" href="#">
                        @if (Session::get('locale') != 'en')
                            <img src="https://flagicons.lipis.dev/flags/4x3/{{ Session::get('locale') }}.svg">
                        @else
                            <img src="https://flagicons.lipis.dev/flags/4x3/gb.svg">
                        @endif

                        <p>
                            <span class="language-code">{{ strtoupper(Session::get('locale')) }}</span>
                            <span
                                class="language-name">{{ Config::get('constants.langs.' . Session::get('locale')) }}</span>
                        </p>
                    </a>

                    @foreach (Config::get('constants.langs') as $code => $lang)
                        @if (Session::get('locale') != $code)
                            <a class="square squared" href="/language/{{ $code }}" style="display: none;">
                                @if ($code != 'en')
                                    <img src="https://flagicons.lipis.dev/flags/4x3/{{ $code }}.svg">
                                @else
                                    <img src="https://flagicons.lipis.dev/flags/4x3/gb.svg">
                                @endif

                                <p>
                                    <span class="language-code">{{ strtoupper($code) }}</span>
                                    <span class="language-name">{{ $lang }}</span>
                                </p>
                            </a>
                        @endif
                    @endforeach

                </div>
            </div>

        </div>

    </div>


    <nav class="navbar navbar-expand-lg bg-body-tertiary mb-4" style="padding: 0;">
        <div class="container-fluid col-lg-8 mx-auto col-12 custom-style">
            <a href="/"><img src="/img/logo_presto.svg" alt="" href=""
                    style="height: 40px;padding-left:15px"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                <div class="navbar-nav text-end" style="font-family: IBM Plex Sans, sans-serif;margin-right:20px;">
                    <a class="nav-link" href="{{ route('article.index') }}">Annunci</a>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Categorie
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item text-end"
                                    href="{{ route('category', ['category_id' => 1]) }}">Elettronica</a></li>
                            <li><a class="dropdown-item text-end"
                                    href="{{ route('category', ['category_id' => 2]) }}">Abbigliamento</a></li>
                            <li><a class="dropdown-item text-end"
                                    href="{{ route('category', ['category_id' => 3]) }}">Casa</a></li>
                            <li><a class="dropdown-item text-end"
                                    href="{{ route('category', ['category_id' => 4]) }}">Animali</a></li>
                            <li><a class="dropdown-item text-end"
                                    href="{{ route('category', ['category_id' => 5]) }}">Sport</a></li>
                            <li><a class="dropdown-item text-end"
                                    href="{{ route('category', ['category_id' => 6]) }}">Beauty</a></li>
                            <li><a class="dropdown-item text-end"
                                    href="{{ route('category', ['category_id' => 7]) }}">Gioielli</a></li>
                            <li><a class="dropdown-item text-end"
                                    href="{{ route('category', ['category_id' => 8]) }}">Libri</a></li>
                            <li><a class="dropdown-item text-end"
                                    href="{{ route('category', ['category_id' => 9]) }}">Fai da
                                    te</a></li>
                            <li><a class="dropdown-item text-end"
                                    href="{{ route('category', ['category_id' => 10]) }}">Food</a></li>

                        </ul>
                    </li>

                </div>

                <div class="containerBottoniNavBar">
                    <a href="{{ route('login') }}"><button class="button_navbar_1"
                            style="margin: 10px;"><span>Login</span></button></a>
                    <a href="{{ route('register') }}"><button class="button_navbar_2"
                            style="margin: 10px;"><span>Registrati</span></button></a>
{{--                     <div class="separatoreTastiNavBar"> --}}

                    </div>
                </div>
                {{-- <div style="display: flex; justify-content:end;">
                    <button class="BtnCarrello">

                        <div class="sign"><svg width="17" height="16" viewBox="0 0 17 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M5.68952 16C6.3878 16 6.95386 15.4339 6.95386 14.7357C6.95386 14.0374 6.3878 13.4713 5.68952 13.4713C4.99124 13.4713 4.42517 14.0374 4.42517 14.7357C4.42517 15.4339 4.99124 16 5.68952 16Z"
                                    fill="white" />
                                <path
                                    d="M14.54 16C15.2383 16 15.8043 15.4339 15.8043 14.7357C15.8043 14.0374 15.2383 13.4713 14.54 13.4713C13.8417 13.4713 13.2756 14.0374 13.2756 14.7357C13.2756 15.4339 13.8417 16 14.54 16Z"
                                    fill="white" />
                                <path
                                    d="M16.7842 3.0713C16.6954 2.96267 16.5835 2.87517 16.4566 2.81517C16.3298 2.75516 16.1912 2.72416 16.0509 2.7244H4.02576L3.78355 1.35021C3.75773 1.20384 3.68115 1.07124 3.56727 0.975717C3.4534 0.880193 3.3095 0.82785 3.16086 0.827881H0.632173C0.46451 0.827881 0.303714 0.894485 0.185159 1.01304C0.0666037 1.1316 0 1.29239 0 1.46005C0 1.62772 0.0666037 1.78851 0.185159 1.90707C0.303714 2.02562 0.46451 2.09223 0.632173 2.09223H2.63063L4.43469 12.3168C4.46052 12.4632 4.53709 12.5958 4.65097 12.6913C4.76485 12.7869 4.90875 12.8392 5.05738 12.8392H15.1721C15.3398 12.8392 15.5006 12.7726 15.6192 12.654C15.7377 12.5354 15.8043 12.3747 15.8043 12.207C15.8043 12.0393 15.7377 11.8785 15.6192 11.76C15.5006 11.6414 15.3398 11.5748 15.1721 11.5748H5.58762L5.36478 10.3105H14.913C15.1322 10.3102 15.3446 10.2342 15.5142 10.0953C15.6839 9.95641 15.8003 9.76318 15.8438 9.54831L16.9817 3.85875C17.0092 3.72106 17.0057 3.579 16.9715 3.44282C16.9373 3.30664 16.8734 3.17975 16.7842 3.0713Z"
                                    fill="white" />
                            </svg>
                        </div>

                        <div class="textCarrello">Carrello</div>
                    </button>
                </div> --}}
            </div>
    </nav>
</div>
