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
        .button2 {
            position: relative;
            height: 45px;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 5px;
            background: linear-gradient(101.43deg, #FDC627 12.64%, #EC6907 112.5%);
            font-family: "IBM Plex Sans", sans-serif;
            font-size: 15px;
            box-shadow: 0px 6px 24px 0px rgba(0, 0, 0, 0.2);
            overflow: hidden;
            cursor: pointer;
            border: none;
        }

        .button2:after {
            content: " ";
            width: 0%;
            height: 100%;
            background: #ffd401;
            position: absolute;
            transition: all 0.4s ease-in-out;
            right: 0;
        }

        .button2:hover::after {
            right: auto;
            left: 0;
            width: 100%;
        }

        .button2 span {
            text-align: center;
            text-decoration: none;
            width: 100%;
            padding: 18px 25px;
            color: #fff;
            font-size: 1.125em;
            font-weight: 600;
            z-index: 20;
            transition: all 0.3s ease-in-out;
        }

        .button2:hover span {
            color: #183153;
            animation: scaleUp 0.3s ease-in-out;
        }

        @keyframes scaleUp {
            0% {
                transform: scale(1);
            }

            50% {
                transform: scale(0.95);
            }

            100% {
                transform: scale(1);
            }
        }

        .BtnContatti {
            display: flex;
            align-items: center;
            justify-content: flex-start;
            width: 45px;
            height: 45px;
            border: none;
            border-radius: 10%;
            cursor: pointer;
            position: relative;
            overflow: hidden;
            transition-duration: .3s;
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.199);
            background-color: green;
        }


        .sign {
            width: 100%;
            transition-duration: .3s;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .sign svg {
            width: 17px;
        }

        .sign svg path {
            fill: white;
        }

        .textContatti {
            position: absolute;
            right: 0%;
            width: 0%;
            opacity: 0;
            color: white;
            font-size: 14px;
            font-weight: 600;
            transition-duration: .3s;
        }

        .BtnContatti:hover {
            width: 200px;
            border-radius: 5px;
            transition-duration: .3s;
        }

        .BtnContatti:hover .sign {
            width: 30%;
            transition-duration: .3s;
            padding-left: 20px;
        }

        .BtnContatti:hover .textContatti {
            opacity: 1;
            width: 70%;
            transition-duration: .3s;
            padding-right: 10px;
        }

        .BtnContatti:active {
            transform: translate(2px, 2px);
        }



        .containerBoxCategoria {
            display: flex;
            justify-content: center;

        }

        .boxCategoria {
            display: flex;
            justify-content: center;
            width: fit-content;
            height: 30px;
            background-color: #2739fd;
            border-radius: 100px;
            margin-bottom: 15px;
            margin-top: 20px
        }

        .iconaBoxCategoria {
            width: 25px;
            margin-left: 18px
        }

        .titoloBoxCategoria {
            font-family: IBM Plex Sans, sans-serif;
            color: rgb(255, 255, 255);
            text-align: center;
            font-size: 15px;
            font-weight: 700;
            margin-left: 7px;
            margin-top: 6px;
            margin-right: 18px;
        }

        .carousel-custom {
            margin: 20px;
            background: #FFFFFF;
            box-shadow: 0px 1px 12.6px rgba(0, 0, 0, 0.15);
            border-radius: 15px;
            align-item: center;
            justify-content: center;
        }

        .containerInfoProdotto {
            display: flex;
            align-items: center;
            flex-direction: column;
        }

        .dataInfoProdotto {
            color: #EE700A;
            font-weight: 700;
            font-size: 16px;
            margin-bottom: 10px;
        }

        .titoloInfoProdotto {
            font-family: IBM Plex Sans, sans-serif;
            text-align: center;
            font-weight: 800;
        }

        .descrizioneInfoProdotto {
            color: #B6B6B6;
            text-align: center;
            font-size: 15px;
            margin:  10px 20px 10px 20px;
        }

        .prezzoInfoProdotto {
            background: linear-gradient(96.64deg, #FDC627 7.25%, #EC6907 110.91%, #666666 110.92%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            text-fill-color: transparent;
            font-width: 800;
            margin-bottom: 20px;
            font-size: 32px;
        }

        .containerBtnInfoProdotto {
            display: flex;
            margin-bottom: 30px;
        }
    </style>

</head>

<body>



    <div class="col-lg-4 mx-auto col-12">
        <div class="containerBoxCategoria">
            <div class="boxCategoria">

                <img src="/img/elettronica.svg" alt="" class="iconaBoxCategoria">
                <h5 class="titoloBoxCategoria">
                    Elettronica</h5>
            </div>
        </div>
        <div id="carouselExampleIndicators" class="carousel slide carousel-custom"
            style="margin:20px; background: #FFFFFF;box-shadow: 0px 1px 12.6px rgba(0, 0, 0, 0.15);border-radius: 15px;align-item:center;justify-content:center;">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="/img/prova2.png" class="d-block w-100 " alt="">
                </div>
                <div class="carousel-item">
                    <img src="/img/prova1.png" class="d-block w-100" alt="">
                </div>
                <div class="carousel-item">
                    <img src="/img/prova1.png" class="d-block w-100" alt="">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>






        <div class="containerInfoProdotto">
            <h5 class="dataInfoProdotto">12.12.12</h5>
            <h2 class="titoloInfoProdotto">
                Iphone 12 pro max
            </h2>

            <p class="descrizioneInfoProdotto">Lorem ipsum dolor sit amet,
                consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam
                erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis
                nisl ut aliquip ex ea commodo consequat.
            </p>

            <h2 class="prezzoInfoProdotto">
                12,99€
            </h2>
            <div class="containerBtnInfoProdotto">
                <button class="button2" style="margin-inline: 5px;"><span>Acquista ora</span></button>
                <button class="BtnContatti">
                    <div class="sign"><svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M21.9872 16.6187C21.791 18.1093 21.059 19.4775 19.9278 20.4677C18.7967 21.458 17.3437 22.0027 15.8403 22C7.10613 22 9.95368e-06 14.8939 9.95368e-06 6.15984C-0.00268507 4.65644 0.541975 3.20347 1.53226 2.0723C2.52255 0.941132 3.89074 0.209117 5.3813 0.0129775C5.75823 -0.0330459 6.13993 0.0440659 6.46943 0.232802C6.79892 0.421538 7.05855 0.711775 7.20953 1.06019L9.53277 6.24674V6.25994C9.64837 6.52664 9.69611 6.81782 9.67174 7.10747C9.64736 7.39712 9.55162 7.67623 9.39307 7.91985C9.37327 7.94955 9.35237 7.97705 9.33037 8.00455L7.04013 10.7194C7.86405 12.3936 9.61528 14.1294 11.3115 14.9555L13.989 12.6774C14.0152 12.6553 14.0428 12.6347 14.0715 12.6158C14.3149 12.4534 14.5949 12.3543 14.8863 12.3274C15.1777 12.3006 15.4712 12.3467 15.7402 12.4618L15.7545 12.4684L20.9367 14.7905C21.2857 14.941 21.5766 15.2004 21.766 15.5299C21.9554 15.8594 22.033 16.2414 21.9872 16.6187Z"
                                fill="white" />
                        </svg>
                    </div>
                    <div class="textContatti">3407276262</div>
                </button>



            </div>

        </div>
    </div>
</body>

</html>
