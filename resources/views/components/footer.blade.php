{{-- <footer>

    <div class="footer">

        <div class="cont-footer">

            <div class="bottom">

                <div class="cent">

                    <div class="iccons">
                        <a href="" class="aFooter"><img style="width: 5vh;" src="images/facebook.png" alt=""></a>
                        <a href=""class="aFooter"><img style="width: 4vh;" src="images/instagram.png" alt=""></a>
                        <a href=""class="aFooter"><img style="width: 4vh;" src="images/twitter.png" alt=""></a>
                        <a href=""class="aFooter"><img src="images/youtube.png" alt=""></a>
                    </div>
                    
                    <div class="container-list">
                        <a href=""class="aFooter">Home</a>
                        <a href=""class="aFooter">Contact us</a>
                        <a href=""class="aFooter">Our Team</a>
                        @guest
                        <a href=" {{ route ('login') }}"class="aFooter">Lavora con noi</a>
                        @endguest
                        @auth
                        <a href=" {{ route ('revisor.request') }}"class="aFooter">Lavora con noi</a>
                        @endauth
                        
                    </div>
                   <div>
                    <x-flag-country-us style="width: 30px; height:30px"/>
                    <x-flag-country-fr style="width: 30px; height:30px"/> 
                   </div>
                    <div class="copy">
                        <h5>Copyright ©2024; Designed by <span>MagicTeam</span></h5>
                    </div>
                </div>
            </div>

        </div>

    </div>
</footer>
 --}}


<footer>
    <div style="background-color:rgb(28, 28, 28)">
        <div class="col-lg-8 mx-auto col-10 text-center">
            <div class="row">
                <div class="col">
                    <img src="/img/presto_white.svg" alt="" style="width: 120px;margin-bottom:20px;margin-top:20px;">
                </div>
                <div class="col">
                    <a class="nav-link aFooter" href="/">Home</a>
                </div> 
                
                <div class="col">
                <a class="nav-link aFooter" href="{{ route('article.index') }}">Annunci</a>
            </div>
                @guest
                <div class="col">
                    <a href=" {{ route('login') }}"class="aFooter">Lavora con noi</a>
                </div>
                @endguest
                @auth
                <div class="col">
                    <a href=" {{ route('revisor.request') }}"class="nav-link aFooter ">Lavora con noi</a>
                    </div>
                @endauth
            </div>
        </div>
    </div>
</footer>
