<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Selamat Datang di WEB DEV</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Courgette" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Dosis:300,400,500');

        @-moz-keyframes rocket-movement {
            100% {
                -moz-transform: translate(1200px, -600px);
            }
        }

        @-webkit-keyframes rocket-movement {
            100% {
                -webkit-transform: translate(1200px, -600px);
            }
        }

        @keyframes rocket-movement {
            100% {
                transform: translate(1200px, -600px);
            }
        }

        @-moz-keyframes move-astronaut {
            100% {
                -moz-transform: translate(-160px, -160px);
            }
        }

        @-webkit-keyframes move-astronaut {
            100% {
                -webkit-transform: translate(-160px, -160px);
            }
        }

        @keyframes move-astronaut {
            100% {
                -webkit-transform: translate(-160px, -160px);
                transform: translate(-160px, -160px);
            }
        }

        @-moz-keyframes rotate-astronaut {
            100% {
                -moz-transform: rotate(-720deg);
            }
        }

        @-webkit-keyframes rotate-astronaut {
            100% {
                -webkit-transform: rotate(-720deg);
            }
        }

        @keyframes rotate-astronaut {
            100% {
                -webkit-transform: rotate(-720deg);
                transform: rotate(-720deg);
            }
        }

        @-moz-keyframes glow-star {
            40% {
                -moz-opacity: 0.3;
            }

            90%,
            100% {
                -moz-opacity: 1;
                -moz-transform: scale(1.2);
            }
        }

        @-webkit-keyframes glow-star {
            40% {
                -webkit-opacity: 0.3;
            }

            90%,
            100% {
                -webkit-opacity: 1;
                -webkit-transform: scale(1.2);
            }
        }

        @keyframes glow-star {
            40% {
                -webkit-opacity: 0.3;
                opacity: 0.3;
            }

            90%,
            100% {
                -webkit-opacity: 1;
                opacity: 1;
                -webkit-transform: scale(1.2);
                transform: scale(1.2);
                border-radius: 999999px;
            }
        }

        html,
        body {
            margin: 0;
            width: 100%;
            height: 100%;
            font-family: 'Dosis', sans-serif;
            font-weight: 300;
            -webkit-user-select: none;
            /* Safari 3.1+ */
            -moz-user-select: none;
            /* Firefox 2+ */
            -ms-user-select: none;
            /* IE 10+ */
            user-select: none;
            /* Standard syntax */
        }

        .bg-purple {
            background: url(../img/bg_purple.png);
            background-repeat: repeat-x;
            background-size: cover;
            background-position: left top;
            height: 100%;
            overflow: hidden;
        }

        .objects img {
            z-index: 90;
            pointer-events: none;
        }

        .object_rocket_1 {
            z-index: 95;
            position: absolute;
            transform: translateX(-50px);
            top: 75%;
            pointer-events: none;
            animation: rocket-movement 200s linear infinite both running;
        }

        .object_earth {
            position: absolute;
            top: 20%;
            left: 15%;
            z-index: 90;
            /*    animation: spin-earth 100s infinite linear both;*/
        }

        .object_moon {
            position: absolute;
            top: 12%;
            left: 25%;
            /*
    transform: rotate(0deg);
    transition: transform ease-in 99999999999s;
*/
        }

        .object_astronaut {
            animation: rotate-astronaut 200s infinite linear both alternate;
        }

        .box_astronaut {
            z-index: 110 !important;
            position: absolute;
            top: 60%;
            right: 20%;
            will-change: transform;
            animation: move-astronaut 50s infinite linear both alternate;
        }

        .stars {
            background: url(http://salehriaz.com/404Page/img/overlay_stars.svg);
            background-repeat: repeat;
            background-size: contain;
            background-position: left top;
        }

        .glowing_stars .star {
            position: absolute;
            border-radius: 100%;
            background-color: #fff;
            width: 3px;
            height: 3px;
            opacity: 0.3;
            will-change: opacity;
        }

        .glowing_stars .star:nth-child(1) {
            top: 80%;
            left: 25%;
            animation: glow-star 2s infinite ease-in-out alternate 1s;
        }

        .glowing_stars .star:nth-child(2) {
            top: 20%;
            left: 40%;
            animation: glow-star 2s infinite ease-in-out alternate 3s;
        }

        .glowing_stars .star:nth-child(3) {
            top: 25%;
            left: 25%;
            animation: glow-star 2s infinite ease-in-out alternate 5s;
        }

        .glowing_stars .star:nth-child(4) {
            top: 75%;
            left: 80%;
            animation: glow-star 2s infinite ease-in-out alternate 7s;
        }

        .glowing_stars .star:nth-child(5) {
            top: 90%;
            left: 50%;
            animation: glow-star 2s infinite ease-in-out alternate 9s;
        }

        .glowing_stars .star:nth-child(6) {
            top: 40%;
            left: 70%;
            animation: glow-star 2s infinite ease-in-out alternate 9s;
        }

        .glowing_stars .star:nth-child(7) {
            top: 450%;
            left: 65%;
            animation: glow-star 2s infinite ease-in-out alternate 9s;
        }

        .glowing_stars .star:nth-child(8) {
            left: 65%;
            animation: glow-star 2s infinite ease-in-out alternate 9s;
        }

        .glowing_stars .star:nth-child(9) {
            top: 50%;
            left: 90%;
            animation: glow-star 2s infinite ease-in-out alternate 9s;
        }

        .glowing_stars .star:nth-child(10) {
            top: 75%;
            left: 50%;
            animation: glow-star 2s infinite ease-in-out alternate 9s;
        }

        @media only screen and (max-width: 600px) {
            .box_astronaut {
                top: 70%;
            }
        }

        .title {
            text-align: center;
            margin-top: 30px;
            font-family: 'Courgette', cursive;
            color: #fff;
            font-size: 50px;
        }

        * {
            margin: 0px auto;
            padding: 0px;
            font-family: 'Open Sans', sans-serif;
        }

        .cont_principal {
            position: absolute;
            width: 100%;
            height: 100%;
        }

        .cont_centrar {
            position: absolute;
            width: 320px;
            left: 50%;
            top: 30%;
            margin-left: -160px;
            margin-top: -160px;
        }

        .cont_centrar {
            position: relative;
            width: 320px;
            float: left;
            background-image: linear-gradient(#FFFFFF 8%, #EEF3F5 100%);
            border-radius: 8px;
            transition: all 0.5s;
        }

        .cont_text_inputs {
            position: relative;
            float: left;
            width: 100%;
            margin-top: 20px;
        }

        .input_form_sign {
            position: relative;
            float: left;
            width: 90%;
            border: none;
            border-bottom: 1px solid #B0BEC5;
            background-color: transparent;
            font-size: 14px;
            outline: none;
            opacity: 0;
            display: none;
        }

        .select_form {
            position: relative;
            float: left;
            width: 90%;
            border: none;
            border-bottom: 1px solid #B0BEC5;
            background-color: transparent;
            font-size: 14px;
            outline: none;
            margin: 5% 5%;
        }

        .select_form:focus {
            border-bottom: 1px solid #FF8383;
        }

        .active_inp {
            margin: 5% 5%;
            padding: 10px 0px;
            opacity: 1;
            height: 5px;
        }

        .input_form_sign:focus {
            border-bottom: 1px solid #FF8383;
        }

        .link_forgot_pass {
            position: relative;
            margin-top: 0px;
            margin-left: 30%;
            text-decoration: none;
            color: #999;
            font-size: 13px;
            display: none;
            float: left;
        }

        .cont_btn {
            position: relative;
            float: left;
        }

        .btn_sign {
            background: rgba(255, 64, 88, 0.74);
            box-shadow: 0px 2px 20px 2px rgba(255, 114, 132, 0.50);
            border-radius: 8px;
            padding: 15px 30px;
            border: none;
            color: #fff;
            font-size: 14px;
            position: relative;
            float: left;
            margin-left: 55px;
            margin-top: 20px;
            margin-bottom: 20px;
            cursor: pointer;
        }

        .d_block {
            display: block;
        }

    </style>
    <link rel="stylesheet" type="text/css" href="{{url('/css/sweetalert.css')}}">
    <script src="{{url('/css/sweetalert.js')}}"></script>
    @include('sweet::alert')
</head>


<body class="bg-purple">

    <div class="stars">
        <div class="objects">
            <img class="object_rocket_1" src="{{url('/img/rocket.svg')}}" width="40px">
            <div class="earth-moon">
                <img class="object_earth" src="{{url('/img/earth.svg')}}" width="100px">
                <img class="object_moon" src="{{url('/img/moon.svg')}}" width="80px">
            </div>
            <div class="box_astronaut">
                <img class="object_astronaut" src="{{url('/img/astronaut.svg')}}" width="140px">
            </div>
        </div>
        <div class="glowing_stars">
            <div class="star"></div>
            <div class="star"></div>
            <div class="star"></div>
            <div class="star"></div>
            <div class="star"></div>
            <div class="star"></div>
            <div class="star"></div>
            <div class="star"></div>
            <div class="star"></div>
            <div class="star"></div>
        </div>

    </div>

    <h1 class="title">Form Pendaftaran PANWIS 2019</h1>

    <div class="cont_principal">
        <div class="cont_centrar">
            <div class="cont_login">
                <form action="{{url('/add')}}" method="POST">
                    {{ csrf_field() }}
                    <div class="cont_text_inputs">
                        <input type="text" class="input_form_sign d_block active_inp" placeholder="Nama Lengkap"
                            name="nama" />
                        <input type="text" class="input_form_sign d_block active_inp" placeholder="NPM" name="nrp"
                            onkeypress='return event.charCode >= 48 && event.charCode <= 57' />
                        <input type="text" class="input_form_sign d_block active_inp" placeholder="Program Studi"
                            name="prodi" />
                        <input type="text" class="input_form_sign d_block active_inp" placeholder="Kelas"
                            name="kelas" />
                        <select name="ukuran_toga" class="select_form">
                            <option value="" disabled selected>Size Toga</option>
                            <option value="xs">XS</option>
                            <option value="s">S</option>
                            <option value="m">M</option>
                            <option value="l">L</option>
                            <option value="xl">XL</option>
                        </select>
                        <input type="text" style="width: 300px;" class="input_form_sign d_block active_inp"
                            placeholder="Alamat" name="alamat" />

                    </div>
                    <div class="cont_btn">
                        <button class="btn_sign">Bergabung Ke Panitia Wisuda </button>
                    </div>

                </form>
            </div>

        </div>


    </div>

</body>

</html>
