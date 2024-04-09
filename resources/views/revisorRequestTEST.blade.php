

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
            @if (session()->has('success'))
                        <x-success-article>{{session("success")}}</x-success-article>
            @endif
        </div>


    </div>
</x-layout>
