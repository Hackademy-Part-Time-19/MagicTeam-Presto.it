
window.previewImmagineAnnuncio = function previewImmagineAnnuncio() {
    var input = document.getElementById('carica-immagine-annuncio');
    var reader = new FileReader();
    reader.onload = function () {
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
    reader.onload = function () {
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

window.onload = function (e) {
    let isOpen = true;
    document.querySelectorAll(".square").forEach(function (button) {
        button.addEventListener("click", function () {
            const links = document.querySelectorAll(".ln a:not(.dropdown-button)");

            links.forEach(function (link, index) {
                setTimeout(function () {
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


document.addEventListener('DOMContentLoaded', function () {
        var btn = document.querySelector('.Btn');
        var customDropdown = document.querySelector('.custom-dropdown');

        btn.addEventListener('click', function (e) {
            e.preventDefault();
            btn.classList.toggle('active');
            customDropdown.classList.toggle('show');
        });

        document.addEventListener('click', function (e) {
            if (!btn.contains(e.target) && !customDropdown.contains(e.target)) {
                btn.classList.remove('active');
                customDropdown.classList.remove('show');
            }
        });
    });

    document.addEventListener('DOMContentLoaded', function () {
        var btnCarrello = document.querySelector('.BtnCarrello');
        var customSidebar = document.getElementById('customSidebar');
        
        btnCarrello.addEventListener('click', function () {
            // Aggiungi la classe 'show-sidebar' al body quando viene cliccato il bottone
            document.body.classList.add('show-sidebar');
        });
    
        // Chiudi la sidebar quando viene cliccato ovunque al di fuori di essa
        document.addEventListener('click', function (event) {
            if (!customSidebar.contains(event.target) && !btnCarrello.contains(event.target)) {
                document.body.classList.remove('show-sidebar');
            }
        });
    });

    document.addEventListener('DOMContentLoaded', function () {
        var btnCarrello = document.querySelector('.BtnCarrello');
        var customSidebar = document.getElementById('customSidebar');
        var closeSidebarBtn = document.getElementById('closeSidebarBtn');
        
        btnCarrello.addEventListener('click', function () {
            document.body.classList.add('show-sidebar');
        });
    
        closeSidebarBtn.addEventListener('click', function () {
            document.body.classList.remove('show-sidebar');
        });
    
        document.addEventListener('click', function (event) {
            if (!customSidebar.contains(event.target) && !btnCarrello.contains(event.target)) {
                document.body.classList.remove('show-sidebar');
            }
        });
    });
    