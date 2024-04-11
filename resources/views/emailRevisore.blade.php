<div style="display: flex;align-items:center;justify-content:center;margin-top:30px;">
    <div class="col-lg-8 mx-auto col-10 custom-style-html-lavora">
        <div class="containerImgTxtFormRicercaHome">
            <img src="/img/logo_presto.svg" alt="" style="width: 150px;margin-top:20px;margin-bottom:20px">
            <h2 class="txtFormRicercaHome" style="text-align: center">L'utente {{$user->name}} ha richiesto di diventare revisore!</h1>
               
            <h4 style="color: rgb(255, 184, 5)">
                Clicca <a href="{{route("make.revisor",compact("user"))}}">qui</a> per rendere {{$user->name}} revisore.
            </h4>
             <img src="/img/email_revisore.svg" alt="" style="width: 350px;margin-top:20px;margin-bottom:20px">
        </div>
    </div>
</div>
