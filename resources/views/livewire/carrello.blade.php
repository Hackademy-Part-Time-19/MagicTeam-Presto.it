@php
    use App\Models\Article; 
    use App\Models\User;
@endphp

<div class="cust-sidebar" id="customSidebar" style="z-index: 200000000000;">
    <button class="close-sidebar-btn" id="closeSidebarBtn">&times;</button>
    <h4 style="text-align: end;margin-top:15px;margin-right:10px;">Carrello</h4>
    
    <div style="display:flex;flex-direction:column">
        
        @if(Auth::user()->cart != null)

        @foreach (Auth::user()->cart as $key => $cart_item)

    <div style="height: 90%;">
        <div style="padding-top: 15px; padding-bottom: 20px; border-bottom: solid 1px gray; width: 100%; display: flex; flex-direction: column; align-items: end; margin-right: 10px; margin-top: 20px;">
            <div style="width: 90%;">
               
                        <div style="display: flex; align-items: end; margin-right: 10px;">
                            <div style="flex: 0.5; display: flex; justify-content: left;">
                                <h6 style="color: darkorange; font-weight: 600;">€{{Article::find(Auth::user()->cart[$key])->price}} </h6>
                            </div>
            
                            <div style="flex: 3;">
                                <h6 style="color: black; font-weight: 400;">{{Article::find(Auth::user()->cart[$key])->name}}</h6>
                            </div>
        
                        </div>
                        
                        <button wire:click="removeArticle({{Auth::user()->cart[$key]}})" class="eliminaCart">
                            elimina
                        </button>
                    
               
    
                
            </div>
        </div>
       
    </div>

    @endforeach

                @else

                @endif

    <div style="position: absolute; bottom: 10px; left: 50%; transform: translateX(-50%);">
        <button class="button3" style="margin-inline: 5px;"><span>Acquista
            ora</span></button></a>
    </div>
