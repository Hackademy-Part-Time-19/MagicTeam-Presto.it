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
        <div class="container-fluid col-lg-8 mx-auto col-12  custom-style">
            <a href="/"><img src="/img/logo_presto.svg" alt="" href=""
                    style="height: 40px;padding-left:15px"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                <div class="navbar-nav text-end" style="font-family: IBM Plex Sans, sans-serif;margin-right:20px;">
                    <a class="nav-link" href="{{ route('article.index') }}" style="margin-top: 17px">Annunci</a>

                    <li class="nav-item dropdown" style="margin-top: 17px">
                        <a class="nav-link dropdown-toggle custom-nav-link" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
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
                                    href="{{ route('category', ['category_id' => 9]) }}">Fai
                                    da
                                    te</a></li>
                            <li><a class="dropdown-item text-end"
                                    href="{{ route('category', ['category_id' => 10]) }}">Food</a></li>

                        </ul>
                    </li>


                    <div class="containerBottoniNavBar">
                        <a href="{{ route('article.create') }}">
                            <button class="button_navbar_1" style="margin: 10px 10px 10px 20px;">
                                <span style="margin-left:7px;margin-right:7px;font-size:12px; font-width:600;">Inserisci
                                    annuncio</span>
                            </button>
                        </a>


                    </div>

                    <div class="separatoreTastiNavBar"></div>

                    <li class="nav-item dropdown text-end" style="margin-top: 10px;display:flex;flex-direction:column;align-items:end">
                        <button class="Btn nav-link dropdown-toggle" type="button" id="dropdownMenuButton"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <div class="sign">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8 0C9.06087 0 10.0783 0.421427 10.8284 1.17157C11.5786 1.92172 12 2.93913 12 4C12 5.06087 11.5786 6.07828 10.8284 6.82843C10.0783 7.57857 9.06087 8 8 8C6.93913 8 5.92172 7.57857 5.17157 6.82843C4.42143 6.07828 4 5.06087 4 4C4 2.93913 4.42143 1.92172 5.17157 1.17157C5.92172 0.421427 6.93913 0 8 0ZM8 10C12.42 10 16 11.79 16 14V16H0V14C0 11.79 3.58 10 8 10Z" fill="white" />
                                </svg>
                            </div>
                            <div class="text">   Ciao, User</div>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end text-end" aria-labelledby="dropdownMenuButton">
                            <li><a class="dropdown-item" href="#">Il mio profilo</a></li>
                            <li><a class="dropdown-item" href="#">Lavora con noi</a></li>
                            <div class="dropdown-divider"></div>
                            <li><a class="dropdown-item" href="#">Logout</a></li>
                        </ul>
                    </li>
                    <div class="separatoreTastiNavBar"></div>
                    <div class="dropdown">
                        <button class="BtnCart nav-link dropdown-toggle" type="button" id="dropdownCarrello"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <div class="sign">
                                <svg width="17" height="16" viewBox="0 0 17 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <!-- Icona del Carrello -->
                                </svg>
                            </div>
                            <div class="text">Carrello</div>
                        </button>
                        <ul class="dropdown-menu custom-dropdown2" aria-labelledby="dropdownCarrello">
                            <!-- Voci nel dropdown menu -->
                            <li><a class="dropdown-item" href="#">Ciao</a></li>
                            <li><a class="dropdown-item" href="#">Vedo</a></li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
</div>
</nav>
</div>
