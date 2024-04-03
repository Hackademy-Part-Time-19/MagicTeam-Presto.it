<div id="errorArticle" class="alert alert-danger no-show" role="alert">
    Si è verificato un errore
</div>

<style>
    #errorArticle {
        opacity: 0;
        height: auto;
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.5s ease-in-out, margin 0.5s ease-in-out, opacity 0.5s ease-in-out;
    }

    #errorArticle.show {
        opacity: 1;
        max-height: 100px;
    }

    #errorArticle.no-show {
        display: none;
    }
</style>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        var errorArticle = document.getElementById("errorArticle");

        errorArticle.classList.remove("no-show");
        errorArticle.classList.add("show");

        setTimeout(function() {
            errorArticle.classList.remove("show");
            errorArticle.style.opacity = 0;
            errorArticle.classList.add("no-show");
        }, 3000);
    });
</script>