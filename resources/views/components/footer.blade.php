<footer>

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
                   
                    <div class="copy">
                        <h5>Copyright ©2024; Designed by <span>MagicTeam</span></h5>
                    </div>
                </div>
            </div>

        </div>

    </div>
</footer>
