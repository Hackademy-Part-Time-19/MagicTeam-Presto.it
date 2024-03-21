<x-layout>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card div-annuncio">
                    <div class="card-body div-annuncio">
                        <img src="/img/annuncio-8.webp" alt="Logo" class="img-fluid mx-auto d-block img-annuncio">
                        <h1 class="card-title text-center mt-3 titolo-annuncio">Inserisci Prodotto</h1>
                        <p class="card-text text-center mb-5 sottotitolo-annuncio">Inserisci tutti i campi per aumentare le tue probabilità di vendita</p>
                        <form action="{{route("article.store")}}" id="productForm" method="POST">
                            @csrf
                            <div class="form-group text-center mb-3">
                                <div class="custom-file">
                                    <label for="carica-immagine-annuncio" class="immagine-annuncio">
                                        <div class="circle" id="circle">
                                            <span class="icon">+</span>
                                        </div>
                                        <div id="preview-immagine-annuncio" style="display: none"></div>
                                    </label>
                                    <input id="carica-immagine-annuncio" type="file" onchange="previewImmagineAnnuncio()"/>
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <label for="title" class="label-annuncio">Titolo</label>
                                <input name="name" type="text" class="form-control input-annuncio" id="title">
                            </div>
                            <div class="form-group mb-3">
                                <label for="price" class="label-annuncio">Prezzo</label>
                                <input name="price" type="text" class="form-control input-annuncio" id="price">
                            </div>
                            <div class="form-group mb-3">
                                <label for="category" class="label-annuncio">Categoria</label>
                                <select name="category_id" class="form-control input-annuncio" id="category">
                                    <option value="1">Categoria 1</option>
                                    <option value="2">Categoria 2</option>
                                    <option value="3">Categoria 3</option>
                                </select>
                            </div>
                            <div class="form-group mb-3">
                                <label for="description " class="label-annuncio">Descrizione</label>
                                <textarea name="description" class="form-control input-annuncio" id="description" rows="3"></textarea>
                            </div>
                            <button type="submit" class="btn d-block mx-auto button-annuncio" onclick="stampa()">Inserisci Annuncio</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    

</x-layout>
