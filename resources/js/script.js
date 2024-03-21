
window.previewImmagineAnnuncio = function previewImmagineAnnuncio() {
    var input = document.getElementById('carica-immagine-annuncio');
    var reader = new FileReader();
    reader.onload = function() {
        var imagePreview = document.getElementById('preview-immagine-annuncio');
        imagePreview.innerHTML = '<img src="' + reader.result + '" style="max-width: 100%; max-height: 100%;">';
        imagePreview.style.display = 'block';
        document.getElementById('circle').style.display = 'none';
    };
    reader.readAsDataURL(input.files[0]);
    }