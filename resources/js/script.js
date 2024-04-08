
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
    
    /** START TRANSLATE **/
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({
            pageLanguage: 'it', 
            layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL, 
            autoDisplay: false, 
            gaTrack: true, 
        }, 'google_translate_element');
    }
    
    window.onload = function(e){
        let isOpen = true;
        document.querySelectorAll(".square").forEach(function(button) {
            button.addEventListener("click", function() {
                const links = document.querySelectorAll(".ln a:not(.dropdown-button)");
    
                links.forEach(function(link, index) {
                    setTimeout(function() {
                        if (!isOpen) {
                            link.style.display = "block";
                            link.style.transition = "all 0.2s ease";
                            link.style.opacity = 1;
                            link.style.height = "auto";
                        } else {
                            link.style.transition = "all 0.2s ease";
                            link.style.opacity = 0;
                            link.style.height = 0;
                            setTimeout(() => {
                                link.style.display = "none";
                            }, 200);
                        }
                    }, 20 * index);
                });
    
    
                isOpen = !isOpen;
            });
        });
    
        googleTranslateElementInit();
    }
    /** END TRANSLATE **/