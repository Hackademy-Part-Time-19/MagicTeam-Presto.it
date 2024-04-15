<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card div-annuncio">
                <div class="card-body div-annuncio">
                    <img src="/img/login-8.webp" alt="Logo" class="img-fluid mx-auto d-block img-annuncio">
                    <h1 class="card-title text-center mt-3 titolo-annuncio">Registrati</h1>
                    <p class="card-text text-center mb-5 sottotitolo-annuncio">Compila tutti i campi per registrarti sulla piattaforma <br><a href="{{route("login")}}" class="sottotitolo-annuncio">Hai già un account?</a></p>
                    
                    <form wire:submit="submit" id="productForm"  style="margin-left:15px;margin-right:15px;">
                        
                        @csrf
                        <div class="form-group mb-3">
                            <label for="name" class="label-annuncio">Username</label>
                            <input wire:model="name" type="text" class="form-control input-annuncio" name="name" id="name">
                            @error('name')
                                    <span class="error text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                       
                        <div class="form-group mb-3">
                            <label for="email" class="label-annuncio">E-mail</label>
                            <input wire:model="email" type="email" class="form-control input-annuncio" name="email" id="email">
                            @error('email')
                                    <span class="error text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="password" class="label-annuncio">Password</label>
                            <input wire:model="password" type="password" class="form-control input-annuncio" name="password" id="password">
                            @error('password')
                                    <span class="error text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="passwordConfermation" class="label-annuncio">Conferma la password</label>
                            <input wire:model="password_confirmation" type="password" class="form-control input-annuncio" name="password_confirmation" id="passwordConfermation">
                            @error('password_confirmation')
                                    <span class="error text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        
                        <button type="submit" class="btn d-block mx-auto button-annuncio">Registrati</button>
                       

                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>  