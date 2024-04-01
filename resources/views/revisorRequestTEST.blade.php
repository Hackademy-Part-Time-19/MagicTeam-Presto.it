<x-layout>
    <div class="cont-princip" >
        <div class="career">
            <form method="POST" action="{{ route('revisor.request') }}">
    
                <div class="card-5"
                    style="width: 30rem; border-radius: 5px;  box-shadow: inset 0px 2px 4px rgba(0, 0, 0, 0.11); font-family: IBM Plex Sans, sans-serif;">
                    <img src="/img/lavoraconnoi-8.png" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Oportunita di lavoro</h5>
    
                    </div>
                    <div class="mb-3">
                        <label for="role" class="form-label">Ruoli disponibili per la candidatura</label>
                        <select name="role" id="role" class="form-control">
                            <option value="">Scegli qui</option>
                            <option value="admin">Amministratore</option>
                            <option value="revisor">Revisore</option>
                            <option value="writer">Redattore</option>
                        </select>
                    </div>
                    <label for="message" class="form-label">Parlaci di te</label>
                    @csrf
                    <textarea class="note" name="text" id="" cols="30" rows="5"></textarea>
                    <button class="button-invia" type="invia">Invia</button>
                </div>
    
            </form>
    
    
    
            {{ $text ?? '' }}
        </div>
    
    </div>

    





</x-layout>
