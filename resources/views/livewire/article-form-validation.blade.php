<div class="container mt-5">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card div-annuncio">
                <div class="card-body div-annuncio">
                    <!-- Immagine, titolo e sottotitolo sopra il carosello -->
                    <img src="/img/annuncio-8.webp" alt="Logo" class="img-fluid mx-auto d-block img-annuncio">
                    <h1 class="card-title text-center mt-3 titolo-annuncio">Inserisci Prodotto</h1>
                    <p class="card-text text-center mb-5 sottotitolo-annuncio">Inserisci tutti i campi per aumentare le
                        tue probabilità di vendita</p>

                    <!-- Carosello -->
                    @if ($images)
                        <div id="carouselExampleIndicators" class="carousel slide float-left">
                            <div class="carousel-inner">
                                @foreach ($images as $key => $image)
                                    <div class="carousel-item active">
                                        <img src="{{ $image->temporaryUrl() }}" class="d-block w-100" alt="...">

                                        <button type="button" wire:click="removeImage({{ $key }})"
                                            class="remove-btn-annuncio">Remove</button>
                                    </div>
                                @endforeach
                            </div>
                            <button class="carousel-control-prev" type="button"
                                data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button"
                                data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    @endif

                    <!-- Resto del form -->
                    <div class="form-content">
                        <form wire:submit="save">
                            @csrf

                            <!-- Div Circle -->
                            <div class="form-group text-center mb-3">
                                <div class="custom-file">
                                    <label for="carica-immagine-annuncio" class="immagine-annuncio">
                                        <div class="circle" id="circle">
                                            <span class="icon">+</span>
                                        </div>
                                        <div id="preview-immagine-annuncio" style="display: none"></div>
                                    </label>
                                    <input wire:model="temporary_images" multiple name="images"
                                        id="carica-immagine-annuncio" type="file" />
                                </div>
                            </div>

                            <!-- Rimani con input normali -->
                            <div class="form-group text-left mb-3">
                                <label for="title" class="label-annuncio">Titolo</label>
                                <input wire:model.live="name" placeholder="Sgabello in legno.." name="name"
                                    type="text" class="form-control input-annuncio" id="title">
                                @error('name')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group text-left mb-3">
                                <label for="price" class="label-annuncio">Prezzo</label>
                                <input wire:model.live="price" placeholder="0.00" name="price" type="text"
                                    class="form-control input-annuncio" id="price">
                                @error('price')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group text-left mb-3">
                                <label for="category" class="label-annuncio">Categoria</label>
                                <select wire:model.live="category_id" name="category_id"
                                    class="form-control input-annuncio" id="category">
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

                            <div class="form-group text-left mb-3">
                                <label for="description" class="label-annuncio">Descrizione</label>
                                <textarea wire:model.live="description" placeholder="Comodo, in legno d'abete.." name="description"
                                    class="form-control input-annuncio" id="description" rows="3"></textarea>
                                @error('description')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>

                            <button type="submit" class="btn d-block mx-auto button-annuncio"
                                onclick="stampa()">Inserisci Annuncio</button>
                        </form>
                    </div>

                    <!-- Messaggio di successo -->
                    @if (session()->has('success'))
                        <x-success-article>{{ session('success') }}</x-success-article>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
