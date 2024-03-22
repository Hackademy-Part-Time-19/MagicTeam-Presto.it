
 
<x-layout>


    <div class="container text-center vendere-main-div" >
        <div class="row align-items-center">
            <div class="col">
                <img src="/img/vuoivendere-8.webp" alt=""  class="vendere-img">
            </div>
            <div class="col text-center">
                <h2 
                    class="vendere-h2">
                    Vuoi vendere qualcosa?</h2>
                <div class="vendere-div-1">
                    <div class="vendere-div-colonna">
                        <div class="vendere-div-3">
                            <img class="vendere-mini-img" src="/img/eco.svg" alt="">
                            <p  
                                class="vendere-mini-title"
                                >
                                Sostenibile</p>
                        </div>
                        <div  class="vendere-div-3" >
                            <img class="vendere-mini-img" src="/img/soldi.svg" alt="">
                            <p  
                                class="vendere-mini-title"
                                >
                                Risparmi soldi</p>
                        </div>
                    </div>
                    <div class="vendere-div-colonna" {{-- style="display: flex;flex-direction:column;" --}}>
                        <div  class="vendere-div-3">
                            <img class="vendere-mini-img" src="/img/tempo.svg" alt="" >
                            <p  
                                class="vendere-mini-title"
                                >
                                Risparmi tempo</p>
                        </div>
                        <div class="vendere-div-3">
                            <img class="vendere-mini-img" src="/img/spazio.svg" alt="" >
                            <p  
                                class="vendere-mini-title"
                                >
                                Risparmi spazio</p>
                        </div>
                    </div>
                </div>
                <div class="vendere-button" >
                    <button  class="button1">
                        <span><a href="">Unisciti a noi</a></span>
                        
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="main_card_div_bg" {{-- style="background: rgba(254, 234, 174, 0.53);padding-top:10px;" --}}>
        <h2 
            class="main_card_h2"
            {{-- style="font-family: IBM Plex Sans, sans-serif;color:rgb(53, 53, 53);text-align:center;font-size:37px;font-weight:700;margin-top: 15px;" --}}>
            Le occasioni della settimana</h2>
        <div class="container main_card_container" {{-- style="margin-top: 60px;" --}}>
            <div class="row justify-content-center">
                <div class="main_card_inner_container"
                    {{-- style="margin-left:20px;margin-right:20px;margin-bottom:40px; background: #FFFFFF; box-shadow: 0px 2px 9.3px rgba(0, 0, 0, 0.15); width:260px; height: 370px; border-radius:15px;display:flex;align-items:center;flex-direction:column; position:relative" --}}>
                    <div class="main_card_category_image_div"
                        {{-- style="display:flex;justify-content:center; height:30px; background-color:#2739fd;border-radius:100px; position:absolute;position:absolute;top:-15px; margin-bottom:15px;" --}}>

                        <img class="main_card_category_image" src="/img/elettronica.svg" alt="" {{-- style="width:25px;margin-left:18px" --}}>
                        <h5 class="main_card_category_image_h5"
                            {{-- style="font-family: IBM Plex Sans, sans-serif;color:rgb(255, 255, 255);text-align:center;font-size:15px;font-weight:700;margin-left: 7px;margin-top:6px;margin-right: 18px;" --}}>
                            Elettronica</h5>
                    </div>

                    <img id="productImage" src="/img/prova1.png" class="img-fluid main_card_image" alt=""
                        {{-- style="width:250px; height: 160px; border-radius:10px; background:white;margin-top:30px;" --}}
                        onmouseover="changeImage()" onmouseout="restoreImage()">
                    <h3 class="main_card_h3"
                        {{-- style="font-family: IBM Plex Sans, sans-serif;color:rgb(53, 53, 53);width:200px;text-align:center;font-size:18px;font-weight:700;margin-top: 15px;" --}}>
                        Titolo del prodotto anche lungo sta bene</h3>
                    <h2 class="main_card_h2"
                        {{-- style="margin-top:10px;margin-bottom:10px; font-family: 'IBM Plex Sans'; font-weight: 700;background: linear-gradient(96.64deg, #FDC627 7.25%, #EC6907 110.91%, #666666 110.92%);-webkit-background-clip: text;-webkit-text-fill-color: transparent;background-clip: text;text-fill-color: transparent;" --}}>
                        12,99€</h2>

                    <button class="buttonCard">Scopri di più</button>
                </div>
            </div>
        </div>

        <script>
            function changeImage() {
                document.getElementById('productImage').src = '/img/prova2.png';
            }

            function restoreImage() {
                document.getElementById('productImage').src = '/img/prova1.png';
            }
        </script>

</x-layout>