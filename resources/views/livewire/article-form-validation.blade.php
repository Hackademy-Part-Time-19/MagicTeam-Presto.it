<div class="container mt-5">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card div-annuncio">
                <div class="card-body div-annuncio">
                    <img src="/img/annuncio-8.webp" alt="Logo" class="img-fluid mx-auto d-block img-annuncio">
                    <h1 class="card-title text-center mt-3 titolo-annuncio">Inserisci Prodotto</h1>
                    <p class="card-text text-center mb-5 sottotitolo-annuncio">Inserisci tutti i campi per aumentare le tue probabilità di vendita</p>

                    <form wire:submit="save">
                        @csrf
                        <div class="form-group text-center mb-3">
                            <div class="custom-file">
                                <label for="carica-immagine-annuncio" class="immagine-annuncio">    

                                    
                                    <div class="circle" id="circle">
                                        <span class="icon">+</span>
                                    </div>
                                    <div id="preview-immagine-annuncio" style="display: none"></div>

                                </label>
                                <input wire:model="temporary_images" name="images" id="carica-immagine-annuncio" type="file" {{-- onchange="previewImmagineAnnuncio()" --}}/>
                            </div>
                        </div>

                        <div class="form-group mb-3">
                            <label for="title" class="label-annuncio">Titolo</label>
                            <input wire:model.live="name" placeholder="Sgabello in legno.." name="name" type="text" class="form-control input-annuncio" id="title">
                            @error('name') <span class="error">{{ $message }}</span> @enderror 
                        </div>

                        <div class="form-group mb-3">
                            <label for="price" class="label-annuncio">Prezzo</label>
                            <input wire:model.live="price" placeholder="0.00" name="price" type="text" class="form-control input-annuncio" id="price">
                            @error('price') <span class="error">{{ $message }}</span> @enderror 
                        </div>

                        <div class="form-group mb-3">
                            <label for="category" class="label-annuncio">Categoria</label>
                            <select wire:model.live="category_id" name="category_id" class="form-control input-annuncio" id="category">
                                <option>Seleziona una categoria</option>
                                <option value="1">Elettronica</option>
                                <option value="2">Abbigliamento</option>
                                <option value="3">Casa</option>
                                <option value="4">Animali</option>
                                <option value="5">Sport</option>
                                <option value="6">Beauty</option>
                                <option value="7">Gioielli</option>
                                <option value="8">Libri</option>
                                <option value="9">Fai da te</option>
                                <option value="10">Food</option>
                            </select>
                        </div>

                        <div class="form-group mb-3">
                            <label for="description " class="label-annuncio">Descrizione</label>
                            <textarea wire:model.live="description" placeholder="Comodo, in legno d'abete.." name="description" class="form-control input-annuncio" id="description" rows="3"></textarea>
                            @error('description') <span class="error">{{ $message }}</span> @enderror 
                        </div>

                        <button type="submit" class="btn d-block mx-auto button-annuncio" onclick="stampa()">Inserisci Annuncio</button>
                        @if ($images)
                            
                            @foreach ($images as $key => $image )
                            
                            <img src="{{$image->temporaryUrl()}}" alt="">

                            <div style="background-image: url()"></div>
                        
                            @endforeach

                        @endif
                    </form>
                        
                    @if(session()->has('success'))  
                        <x-success-article></x-success-article>
                    @endif
                   
                    
                </div>
            </div>
        </div>
    </div>
</div>
