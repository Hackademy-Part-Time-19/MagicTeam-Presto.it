<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Presto.it</title>
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/css/main.css','resources/css/footer.css', 'resources/css/career.css', "resources/js/script.js"])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">    

    <style>
        @media (min-width: 1000px) {
    .d-lg-none {
        display: none !important;
    }
}
    </style>

</head>
<body>
    
    <x-navbar></x-navbar> 

    {{$slot}}
    <x-footer></x-footer>

    <!-- START TRANSLATE -->
    <div id="google_translate_element" style="display:none;"></div>
    <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <!-- END TRANSALATE -->

</body>
</html>