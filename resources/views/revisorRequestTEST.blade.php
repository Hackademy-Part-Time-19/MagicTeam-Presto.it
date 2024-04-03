<x-layout>
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
                        <select name="role" id="role" class="form-controlLiv">
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

    





</x-layout>
