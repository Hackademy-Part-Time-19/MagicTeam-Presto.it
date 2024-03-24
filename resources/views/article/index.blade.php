<x-layout>

    <div class="main_card_div_bg" style="display: flex; flex-direction:row" >

    @if (count($articles) == 0)
        
        <p>NON CI SONO ARTICOLI AO</p>    


        @else

        @foreach ($articles as $article)

        
        
            <div class="container main_card_container" >
                <div class="row justify-content-center">
                    <div class="main_card_inner_container"
                        >

                        <div class="main_card_category_image_div_{{$article->category_id}}">

                                <img class="main_card_category_image" src="/img/{{$article->category->name}}.svg" alt="" >
                                <h5 class="main_card_category_image_h5">
                                {{$article->category->name}}</h5>

                        </div>
                           
    
                        <img id="productImage_{{$article->id}}" src="/img/prova1.png" class="img-fluid main_card_image" alt=""
                            
                            onmouseover="changeImage({{$article->id}})" onmouseout="restoreImage({{$article->id}})">
                        <h3 class="main_card_h3"
                           >
                            {{$article->name}}</h3>
                        <h2 class="main_card_h2"
                            >
                            {{$article->price}}€</h2>
                        
                        <a href="{{route("article.show", ["article" => $article])}}" style="display: flex; justify-content:center"><button class="buttonCard">Scopri di più</button></a>
                    </div>
                </div>
            </div>
    
            
    
            <script>
                function changeImage(id) {
                    document.getElementById('productImage_' + id).src = '/img/prova2.png';
                }
    
                function restoreImage(id) {
                    document.getElementById('productImage_' + id).src = '/img/prova1.png';
                }
            </script>

        @endforeach

    
    @endif

    

        

</x-layout>