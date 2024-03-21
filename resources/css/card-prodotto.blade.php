<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        .buttonCard {
            font-size: 15px;
            color: #222;
            font-family: IBM Plex Sans, sans-serif;
            font-weight: 800;
            cursor: pointer;
            position: absolute;
            bottom: 20px;
            border: none;
            background: none;
            transition-timing-function: cubic-bezier(0.25, 0.8, 0.25, 1);
            transition-duration: 400ms;
            transition-property: color;
        }

        .buttonCard:focus,
        .buttonCard:hover {
            color: #222;
        }

        .buttonCard:focus:after,
        .buttonCard:hover:after {
            width: 100%;
            left: 0%;
        }

        .buttonCard:after {
            content: "";
            pointer-events: none;
            bottom: -2px;
            left: 50%;
            position: absolute;
            width: 0%;
            height: 2px;
            background-color: #FDC627;
            transition-timing-function: cubic-bezier(0.25, 0.8, 0.25, 1);
            transition-duration: 400ms;
            transition-property: width, left;
        }

        #productImage {
            transition-duration: 0.5s;
        }
    </style>
</head>

<body>
    <div style="background: rgba(254, 234, 174, 0.53);padding-top:10px;">
        <h2
            style="font-family: IBM Plex Sans, sans-serif;color:rgb(53, 53, 53);text-align:center;font-size:37px;font-weight:700;margin-top: 15px;">
            Le occasioni della settimana</h2>
        <div class="container" style="margin-top: 60px;">
            <div class="row justify-content-center">
                <div
                    style="margin-left:20px;margin-right:20px;margin-bottom:40px; background: #FFFFFF; box-shadow: 0px 2px 9.3px rgba(0, 0, 0, 0.15); width:260px; height: 370px; border-radius:15px;display:flex;align-items:center;flex-direction:column; position:relative">
                    <div
                        style="display:flex;justify-content:center; height:30px; background-color:#2739fd;border-radius:100px; position:absolute;position:absolute;top:-15px; margin-bottom:15px;">

                        <img src="/img/elettronica.svg" alt="" style="width:25px;margin-left:18px">
                        <h5
                            style="font-family: IBM Plex Sans, sans-serif;color:rgb(255, 255, 255);text-align:center;font-size:15px;font-weight:700;margin-left: 7px;margin-top:6px;margin-right: 18px;">
                            Elettronica</h5>
                    </div>

                    <img id="productImage" src="/img/prova1.png" class="img-fluid" alt=""
                        style="width:250px; height: 160px; border-radius:10px; background:white;margin-top:30px;"
                        onmouseover="changeImage()" onmouseout="restoreImage()">
                    <h3
                        style="font-family: IBM Plex Sans, sans-serif;color:rgb(53, 53, 53);width:200px;text-align:center;font-size:18px;font-weight:700;margin-top: 15px;">
                        Titolo del prodotto anche lungo sta bene</h3>
                    <h2
                        style="margin-top:10px;margin-bottom:10px; font-family: 'IBM Plex Sans'; font-weight: 700;background: linear-gradient(96.64deg, #FDC627 7.25%, #EC6907 110.91%, #666666 110.92%);-webkit-background-clip: text;-webkit-text-fill-color: transparent;background-clip: text;text-fill-color: transparent;">
                        12,99€</h2>

                    <button class="buttonCard">Scopri di più</button>
                </div>
            </div>
        </div>

        <script>
            function changeImage() {
                document.getElementById('productImage').src = '/img/prova2.png';
            }

            function restoreImage() {
                document.getElementById('productImage').src = '/img/prova1.png';
            }
        </script>
</body>

</html>
