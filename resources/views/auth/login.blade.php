<x-layout>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card div-annuncio">
                    <div class="card-body div-annuncio">
                        <img src="/img/login-8.webp" alt="Logo" class="img-fluid mx-auto d-block img-annuncio">
                        <h1 class="card-title text-center mt-3 titolo-annuncio">Login</h1>
                        <p class="card-text text-center mb-5 sottotitolo-annuncio">Entra nella piattaforma e inizia a pubblicare annunci<br><a href="{{route("login")}}" class="sottotitolo-annuncio">Non hai ancora un account?</a></p>
                        <form action="{{route("login")}}" method="POST" id="productForm">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="email" class="label-annuncio">E-mail</label>
                                <input type="email" class="form-control input-annuncio" name="email" id="email">
                            </div>
                            <div class="form-group mb-3">
                                <label for="password" class="label-annuncio">Password</label>
                                <input type="password" class="form-control input-annuncio" name="password" id="password">
                            </div>

                            {{$errors}}
                            
                            <button type="submit" class="btn d-block mx-auto button-annuncio">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>