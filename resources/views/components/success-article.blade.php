<div id="successArticle" class="alert alert-success no-show" role="alert">
   Prodotto inserito in attesa di approvazione
</div>

<style>
   #successArticle {
       opacity: 0;
       height: auto;
       max-height: 0;
       overflow: hidden;
       transition: max-height 0.5s ease-in-out, margin 0.5s ease-in-out, opacity 0.5s ease-in-out;
   }

   #successArticle.show {
       opacity: 1;
       max-height: 100px;
   }

   #successArticle.no-show {
       display: none;
   }
</style>

<script>
   document.addEventListener("DOMContentLoaded", function() {
       var successArticle = document.getElementById("successArticle");
       
       successArticle.classList.remove("no-show");

       successArticle.classList.add("show");

       setTimeout(function() {
           successArticle.classList.remove("show");
           successArticle.style.opacity = 0;
           successArticle.classList.add("no-show");
       }, 3000);
   });
</script>