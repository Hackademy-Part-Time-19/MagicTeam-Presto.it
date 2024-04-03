{{-- <x-layout>
    <div class="cont-principLiv" >
        <div class="careerLiv">
            <form method="POST" action="{{ route('revisor.request') }}">

                <div class="card-5Liv"
                    style="width: 30rem; border-radius: 5px;  box-shadow: inset 0px 2px 4px rgba(0, 0, 0, 0.11); font-family: IBM Plex Sans, sans-serif;">
                    <img src="/img/lavoraconnoi-8.png" class="card-img-topLiv" alt="">
                    <div class="card-bodyLiv">
                        <h5 class="card-titleLiv">Oportunita di lavoro</h5>

                    </div>
                    <div class="mb-3Liv">
                        <label for="role" class="form-labelLiv">Ruoli disponibili per la candidatura</label>
                        <select name="role" id="role" class="form-control custom-input">
                            <option value="">Scegli qui</option>
                            <option value="admin">Amministratore</option>
                            <option value="revisor">Revisore</option>
                            <option value="writer">Redattore</option>
                        </select>
                    </div>
                    <label for="message" class="form-labelLiv">Parlaci di te</label>
                    @csrf
                    <textarea class="noteLiv" name="text" id="" cols="30" rows="5"></textarea>
                    <button class="button-inviaLiv" type="invia">Invia</button>
                </div>

            </form>



            {{ $text ?? '' }}
        </div>

    </div>







</x-layout> --}}

<x-layout>

    <div class="col-lg-8 mx-auto col-10 custom-style-html-lavora">
        <div class="containerImgTxtFormRicercaHome">
            <img src="/img/lavoraconnoi-8.png" alt="" class="imgFormLavoraConNoi">
            <h1 class="txtFormRicercaHome">Opportunità di lavoro</h1>
            <h4 class="sottotitoloFormRicercaHome">
                Entra a far parte della nostra famiglia
            </h4>
        </div>
        <div class="col-lg-8 mx-auto col-10 text-center mb-5">
            <form method="POST" action="{{ route('revisor.request') }}" style="padding-right:25px;padding-left:25px;">
                @csrf
                <select name="role" id="role" class="form-control input-annuncio mb-3 mt-3">
                    <option value="" disabled selected>Ruoli disponibili</option>
                    <option value="admin">Amministratore</option>
                    <option value="revisor">Revisore</option>
                    <option value="writer">Redattore</option>
                </select>
                
                <div class="form-group mb-3 mt-3">
                    <textarea class="form-control input-annuncio" name="text" id="" rows="5" placeholder="Parlaci di te"></textarea>
                </div>

                <button type="submit" class="btn d-block mx-auto buttonSearch">Invia</button>
            </form>
        </div>


    </div>
</x-layout>
