{{-- <footer>

    <div class="footer">

        <div class="cont-footer">

            <div class="bottom">

                <div class="cent">
                    <div>
                        <div class="iccons">
                        
                            <a href="" class="aFooter"><img style="width: 5vh;" src="images/facebook.png" alt=""></a>
                            <a href=""class="aFooter"><img style="width: 4vh;" src="images/instagram.png" alt=""></a>
                            <a href=""class="aFooter"><img style="width: 4vh;" src="images/twitter.png" alt=""></a>
                            <a href=""class="aFooter"><img src="images/youtube.png" alt=""></a>
                            
                            
                        </div>
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
   
    <div style="background-color:rgb(28, 28, 28);padding:top:20px;padding-bottom:20px;">
        <div class="col-lg-8 mx-auto col-10 text-center">
            <div class="row">
                <div class="col">
                    <img src="/img/presto_white.svg" alt=""
                        style="width: 120px;margin-bottom:20px;margin-top:20px;">
                </div>
                <div class="col" style="padding-top: 25px">
                    <a class="footerMenu" href="/">Home</a>
                </div>

                <div class="col" style="padding-top: 25px">
                    <a class="footerMenu" href="{{ route('article.index') }}">Annunci</a>
                </div>
                @guest
                    <div class="col" style="padding-top: 25px">
                        <a href=" {{ route('login') }}"class="footerMenu">Lavora con noi</a>
                    </div>
                @endguest
                @auth
                    <div class="col" style="padding-top: 25px">
                        @if (Auth::user()->is_revisor === 1)
                        <a href=" {{ route('revisor.index') }}"class="footerMenu">Zona revisore</a>
                        @else
                        <a href=" {{ route('revisor.request') }}"class="footerMenu">Lavora con noi</a>
                        @endif
                    </div>
                @endauth

                <div class="col" style="padding-top: 12px;padding-bottom:12px;">
                    <div
                        style="width:180px; height:50px;padding-top: 15px; border:solid 1px #FDC627; border-radius:10px;display:flex; align-items:center; justify-content:center;">
                        <p style="color: #FDC627;font-size:11px;margin-left:15px;">Powered by <br> <b>The Magic Team</b></p>
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" style="margin-bottom:15px;margin-left:15px;"
                            xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_14_2)">
                                <path 
                                    d="M15.541 4.16002C15.7057 4.26599 15.8357 4.41801 15.9149 4.5972C15.994 4.7764 16.0187 4.97489 15.986 5.16802L15.268 9.39302C15.2104 9.73174 15.2411 10.0796 15.357 10.403L17.167 15.453C18.047 15.627 18.827 15.853 19.434 16.13C19.8 16.297 20.158 16.506 20.438 16.776C20.719 17.047 21 17.459 21 18C21 18.848 20.337 19.37 19.88 19.64C19.357 19.949 18.666 20.193 17.9 20.384C16.352 20.771 14.266 21 12 21C9.734 21 7.648 20.771 6.1 20.384C5.334 20.193 4.643 19.949 4.12 19.64C3.663 19.37 3 18.848 3 18C3 17.46 3.28 17.047 3.562 16.776C3.842 16.506 4.2 16.296 4.566 16.13C5.174 15.853 5.953 15.627 6.834 15.452L9.294 8.58602C9.58051 7.78611 10.1143 7.09821 10.818 6.62202L14.44 4.17202C14.6021 4.06235 14.7928 4.00265 14.9885 4.00034C15.1843 3.99803 15.3763 4.0542 15.541 4.16002ZM18.778 6.43102C18.948 6.07802 19.005 6.03202 19.116 6.22302L19.183 6.35102L19.222 6.43102C19.6515 7.32551 20.3093 8.09091 21.129 8.65002L21.355 8.79702C21.618 8.95702 21.663 9.00302 21.433 9.15502L21.355 9.20402C20.5099 9.72292 19.8165 10.4556 19.345 11.328L19.116 11.777C19.006 11.968 18.948 11.922 18.778 11.569C18.3485 10.6745 17.6907 9.90913 16.871 9.35002L16.514 9.12002C16.375 9.02002 16.384 8.96702 16.567 8.84602L16.645 8.79602C17.5684 8.22897 18.309 7.4079 18.778 6.43102ZM7.598 3.66502L7.667 3.78802C7.981 4.36802 8.455 4.86402 9.043 5.23302L9.269 5.36402C9.454 5.46502 9.482 5.50202 9.384 5.56902L9.269 5.63602C8.66877 5.95736 8.16041 6.42648 7.792 6.99902L7.591 7.34302C7.514 7.45902 7.473 7.44902 7.403 7.33502L7.333 7.21302C7.00669 6.6207 6.53266 6.1229 5.957 5.76802L5.731 5.63602C5.546 5.53502 5.518 5.49802 5.616 5.43102L5.731 5.36402C6.33123 5.04269 6.83959 4.57357 7.208 4.00102L7.333 3.78802C7.465 3.54502 7.508 3.51902 7.598 3.66502Z"
                                    fill="#FFD233" />
                            </g>
                            <defs>
                                <clipPath id="clip0_14_2">
                                    <rect width="36" height="39" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
