@extends('components.public.matrix')

@section('css_improtados')
    <style>
        .image-container {
            position: relative;
            width: 100%;
            max-width: 600px;
            /* Ancho máximo para el contenedor */
        }







        .img-container {
            position: relative;
            width: 100%;
        }

        .img-container img {
            width: 100%;
            height: auto;
        }

        .logo-container {
            position: absolute;
            bottom: 12px;
            left: 58px;
            transform: translate(-50%, 50%);
            -webkit-transform: translate(-50%, 50%);
            -moz-transform: translate(-50%, 50%);
            -ms-transform: translate(-50%, 50%);
            -o-transform: translate(-50%, 50%);
            /*Centrarrespectoalaesquinainferiorizquierda*/
        }

        .logo-container img {
            width: 100%;
            /* Ancho relativo al contenedor padre (.image-container) */
            height: auto;
        }

        /* ------ MODIFICACIO PARA LAS GRILLAS DE SWIPER ------- */

        .swiper-grid-column>.swiper-wrapper {
            display: flex !important;
            flex-direction: row !important;
        }

        .enfermedades .swiper-slide {
            margin-top: 0 !important;
            margin-bottom: 50px !important;
        }

        .enfermedades .swiper-pagination-grid {
            display: block;
            text-align: center;
        }

        @media (min-width: 768px) {
            .enfermedades .swiper-pagination-grid {
                display: none;
            }
        }

        /* ------------ botones de navegacion ------------------ */

        .swiper-button-next:after {
            content: "" !important;
        }

        .swiper-button-next {
            background-color: #42bae2;
            background-image: url(../../../images/svg/arrow-right-sm.svg);
            background-repeat: no-repeat;
            background-position: center;
            width: calc(var(--swiper-navigation-size) / 29 * 27) !important;
            height: 50px;
            border-radius: 50%;
            -webkit-border-radius: 50%;
            -moz-border-radius: 50%;
            -ms-border-radius: 50%;
            -o-border-radius: 50%;
            position: relative !important;
        }

        .swiper-button-prev:after {
            content: "" !important;
        }

        .swiper-button-prev {
            background-color: #d4e5fe;
            background-image: url(../../../images/svg/arrow-left-sm.svg);
            background-repeat: no-repeat;
            background-position: center;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            -webkit-border-radius: 50%;
            -moz-border-radius: 50%;
            -ms-border-radius: 50%;
            -o-border-radius: 50%;
            position: relative !important;
            width: calc(var(--swiper-navigation-size) / 29 * 27) !important;
        }


        .buttonSliderServicios {
            display: flex !important;
            flex-direction: row-reverse;
            justify-content: start;
            gap: 2rem;
            height: 50px;
        }

        @media (min-width: 768px) {
            .buttonSliderServicios {
                flex-direction: row-reverse;
                justify-content: start;
            }
        }

        .swiper-button-lock {
            display: block !important;
        }

        /* -------- transparencia ---------------- */

        .bg-indice {
            background-color: rgba(249, 249, 249, 0.8);
            /* Color de fondo con opacidad */
            backdrop-filter: blur(4px);
            /* Efecto de desenfoque en el fondo */
        }

        /* --------------- flip card --------- */
        .contenedor {
            height: 100%;
            /* Ajustar altura al contenedor padre */
            position: relative;
        }

        .flip {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            -webkit-transform: translate(-50%, -50%);
            -moz-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            -o-transform: translate(-50%, -50%);
            perspective: 1200;
        }

        .card {
            display: flex;
            transition: all 0.5s;
            transform-style: preserve-3d;
        }

        .front,
        .back {
            backface-visibility: none;
            -webkit-backface-visibility: none;
        }

        .back {
            transform: rotateY(-180deg);
            -webkit-transform: rotateY(-180deg);
            -moz-transform: rotateY(-180deg);
            -ms-transform: rotateY(-180deg);
            -o-transform: rotateY(-180deg);
        }

        .card.flipCard {
            transform: rotateY(-180deg);
            -webkit-transform: rotateY(-180deg);
            -moz-transform: rotateY(-180deg);
            -ms-transform: rotateY(-180deg);
            -o-transform: rotateY(-180deg);
        }

        /* --- alerta --- */

        .alerta {
            color: white;
            font-weight: bold;
            font-size: 16px;
            font-family: "Outfit";
            border-radius: 1rem;
            background-color: red;
            text-align: center;
            padding: 0.6rem;
            margin-top: 1rem;
            -webkit-border-radius: 1rem;
            -moz-border-radius: 1rem;
            -ms-border-radius: 1rem;
            -o-border-radius: 1rem;
        }

        /* --------------------- deslizante ------------------- */
        ul {
            display: flex;
            flex-direction: column;

            gap: 30px;
        }

        ul li {
            list-style: none;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        /* Progress Div Css  */

        ul li .progress {
            border-radius: 50%;

            margin: 14px 0;

            width: 100%;

            position: relative;
            cursor: pointer;
        }

        .progress::after {
            content: "";

            position: absolute;
            width: 5px;

            height: 268px;
            /* 210 */
            top: -184px;
            /* 150 */
            left: 23px;
            background-color: #f8f2f2;

            z-index: -1;
        }

        .one::after {
            width: 0;
            height: 0;
        }

        /* Active Css  */

        li .active::after {
            background-color: #42bae2;
        }

        /* Responsive Css  */



        @media (min-width: 340px) {
            .progress::after {
                height: 322px;
                top: -286px;
            }
        }


        @media (min-width: 375px) {
            .progress::after {
                height: 290px;
                top: -266px;
            }
        }

        @media (min-width: 400px) {
            .progress::after {
                height: 290px;
                top: -245px;
            }
        }

        @media (min-width: 460px) {
            .progress::after {
                height: 266px;
                top: -215px;
            }
        }

        @media (min-width: 640px) {
            .progress::after {
                height: 220px;
                top: -200px;
            }
        }

        @media (min-width: 768px) {
            .progress::after {
                height: 344px;
                top: -305px;
            }
        }

        @media (min-width: 1024px) {
            .progress::after {
                height: 250px;
                top: -200px;
            }
        }

        @media (min-width: 1280px) {
            .progress::after {
                height: 250px;
                top: -210px;
            }
        }

        @media (min-width: 1920px) {
            .progress::after {
                height: 250px;
                top: -195px;
            }
        }

        @keyframes moveLeftAndBack {
            0% {
                left: 20%;
                /* Empieza y termina en la posición original */
                opacity: 1;
                /* Opacidad completa */
            }

            50% {
                left: -25%;
                /* Mueve hacia la izquierda fuera del borde */
                /* opacity: 0; */
            }

            100% {
                left: 20%;
                opacity: 1;
            }
        }

        /* Animación para la segunda imagen */
        @keyframes moveRightAndBack {
            0% {
                left: 50%;
                /* Empieza y termina en la posición original */
                opacity: 1;
                /* Opacidad completa */
            }

            50% {
                left: 75%;
                /* Mueve hacia la derecha fuera del borde */
                /* opacity: 0;  */
            }

            100% {
                left: 50%;
                opacity: 1;
            }
        }

        /* Aplicación de las animaciones a las imágenes */
        .myBox:nth-child(1) {
            animation: moveLeftAndBack 3s infinite;

            -webkit-animation: moveLeftAndBack 3s infinite;
        }

        .myBox:nth-child(2) {
            animation: moveRightAndBack 3s infinite;
            -webkit-animation: moveRightAndBack 3s infinite;
        }

        .testimonios .swiper-slide {
            overflow: hidden;
        }

        /* ---- */

        .contenedor_video {
            background-color: rgba(249, 249, 249, 0.1);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            padding: 1rem;
        }

        @media (min-width: 768px) {
            .contenedor_video {
                padding: 1.5rem;
            }
        }

        [type='text'],
        input:where(:not([type])),
        [type='email'],
        [type='url'],
        [type='password'],
        [type='number'],
        [type='tel'],
        textarea {
            font-size: inherit;
        }


        @media (min-width: 868px) {
            .bg__image-header {
                background-position: top !important;
                background-repeat: no-repeat !important;
                background-size: contain !important;
                background-image: url({{ asset('images/img/fondoheader.png') }}) !important;
            }

        }

        .bg__image-header {
            background-position: top;
            background-repeat: no-repeat;
            background-size: contain;
            background-image: url({{ asset('images/img/fondoheadermovil.png') }});
        }

        .fontosectionmidle {
            background-position: top right;
            background-repeat: no-repeat;
            background-size: contain;
            background-image: url({{ asset('images/img/texturasection.png') }});
        }

        .bannervideo {
            background-position: top;
            background-repeat: no-repeat;
            background-size: cover;
            background-image: url({{ asset('images/img/bannervideo.png') }});
        }
    </style>

@stop
{{-- style="background-image: url({{asset('images/img/Hero_Doctor_mobile.png')}})" --}}
@section('content')
    <main class="flex flex-col font-outfit">


        <section class="bg__image-header text-textWhite" id="acerca">
            <div class="relative py-12 md:pt-32  w-11/12 mx-auto xs:pb-[120px] 2xs:pb-[126px] sm:pb-[280px] lg:pb-[320px]  2xl:pb-[400px] flex flex-col items-center"
                data-aos="fade-up" data-aos-offset="150">
                <div class="flex flex-col xl:flex-row gap-6 xl:gap-20">
                    <div class="md:basis-full flex flex-col gap-4 mx-[7%]">
                        <p class="font-fontBook text-text56 leading-tight xl:text-text64 text-center tracking-tighter">
                            Obtén el <span class="text-verdecreditomype font-fontBold">impulso 💰 financiero</span> que tu
                            negocio necesita 💸

                        </p>
                    </div>
                </div>

                <div
                    class="flex justify-center items-center absolute xs:-bottom-[110px] 2xs:-bottom-[102px] sm:-bottom-[160px] md:-bottom-[190px] 3md:-bottom-[220px] xl:-bottom-[290px] 2xl:-bottom-[290px] w-full">
                    <div class="relative contenedor_video">
                        {{-- <p>{{$texto_despues_igual = substr(strrchr($generales->title2, '='), 1);}}</p>
                        <p>{{$texto_despues_igual}}</p> --}}
                        <iframe src="https://www.youtube.com/embed/{{ substr(strrchr($generales->title2, '='), 1) }}"
                            title="YouTube video player" frameborder="0" referrerpolicy="strict-origin-when-cross-origin"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen
                            class="w-full aspect-video  sm:w-[500px] sm:h-[283px]  md:w-[500px] md:h-[282px] lg:w-[1000px] lg:h-[550px] 2xl:w-[1000px] 2xl:h-[565px]"></iframe>
                        <!-- h-[200px] sm:w-[500px] sm:h-[400px] md:w-[500px] md:h-[400px] lg:w-[800px] lg:h-[500px] 2xl:w-[1000px] 2xl:h-[600px] -->
                    </div>
                </div>
            </div>

            <div class=" pt-[126px] md:pt-[200px] 3md:pt-[200px] lg:pt-[268px] xl:pt-[335px] 2xl:pt-[350px]">
                <div class="w-full mx-auto flex flex-col md:flex-row justify-center text-center items-start sm:pt-[90px] pb-10  md:pt-20 lg:pb-20 lg:px-20 lg:pt-10"
                    data-aos="fade-up" data-aos-offset="150">

                    <div class="text-azulcreditomype flex flex-col gap-14 basis-1/2 text-left pr-[8%]">
                        <div class="flex flex-col gap-8 md:gap-5">
                            <h1
                                class="font-bold fontBold text-[50px] md:text-text36 2md:text-text56 leading-none 2md:leading-tight">
                                Requisitos <span class="text-verdecreditomype font-fontLight">para solicitar 📄 un </span>
                                préstamo 💸
                            </h1>
                        </div>
                        <div
                            class="font-semibold text-text18 xl:text-text22 flex flex-col md:flex-col items-start justify-start gap-5">

                            <h2
                                class="text-white bg-verdecreditomype rounded-full w-20 h-20 text-text60 flex items-center justify-center font-fontMedium">
                                1</h2>
                            <h2 class="text-azulcreditomype text-text24 font-fontLight">Contar con un inmueble ubicado en
                                Lima Metropolitana, Lima provincias o Callao. Este debe estar inscrito en registros públicos
                                (SUNARP).</h2>

                        </div>

                        <div
                            class="font-semibold text-text18 xl:text-text22 flex flex-col md:flex-col items-start justify-start gap-5">

                            <h2
                                class="text-white bg-verdecreditomype rounded-full w-20 h-20 text-text60 flex items-center justify-center font-fontMedium">
                                2</h2>
                            <h2 class="text-azulcreditomype text-text24 font-fontLight">Contar con sustentos de ingresos
                                mensuales (boletas de pago, recibos por honorarios o reportes tributarios).</h2>

                        </div>


                    </div>

                    <div class="image-container flex justify-center items-center basis-1/2 relative md:mt-24">
                        <!-- md:mt-24 - mt-12  xl:mt-32-->
                        <div class="hidden md:flex flex-col justify-end h-full items-end">
                            <img src="{{ asset('images/img/mapa.png') }}" alt="doctor Kewin" class="w-[95%]">
                        </div>
                        {{-- <div class="relative md:absolute bottom-0">
                            <img src="{{ asset('images/img/doctor_kewin_1.png') }}" alt="doctor kevin"
                                class="h-full w-full">
                        </div> --}}
                    </div>
                </div>
            </div>
        </section>

        <section class="flex flex-col gap-10 w-full px-[5%] bg-plomocreditomype py-24" data-aos="fade-up"
            data-aos-offset="150">
            <div class="flex flex-col gap-3 text-center px-[20%]">
                <h2
                    class="font-bold font-fontBold text-verdecreditomype text-text48 md:text-text52 leading-none md:leading-tight">
                    Beneficios <span class="text-azulcreditomype font-fontLight">de adquirir un préstamo 💸 con</span>
                    garantía hipotecaria 🏡
                </h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5 ">
                <div class="flex flex-col justify-start  gap-5 text-azulcreditomype rounded-3xl py-4  group relative">
                    <div class="flex flex-col justify-center items-center gap-3 ">

                        <div class="relative">
                            <div class="flex justify-center items-center">
                                <img src="{{ asset('images/img/icono1.png') }}" alt=""
                                    class="w-16 h-16 rounded-full">
                            </div>
                        </div>

                        <div class="font-semibold flex flex-col gap-5 text-center items-center">
                            <h2 class="font-fontBold text-text29  w-full mx-auto px-5 tracking-tight">
                                Agilidad ⚡
                            </h2>
                            <p class="font-fontLight text-text20  px-5">
                                Desembolso en 7 días hábiles.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="flex flex-col justify-start  gap-5 text-azulcreditomype rounded-3xl py-4  group relative">
                    <div class="flex flex-col justify-center items-center gap-3 ">

                        <div class="relative">
                            <div class="flex justify-center items-center">
                                <img src="{{ asset('images/img/icono2.png') }}" alt=""
                                    class="w-16 h-16 rounded-full">
                            </div>
                        </div>

                        <div class="font-semibold flex flex-col gap-5 text-center items-center">
                            <h2 class="font-fontBold text-text29  w-full mx-auto px-5 tracking-tight">
                                Acompañamiento 👥
                            </h2>
                            <p class="font-fontLight text-text20  px-5">
                                Desde la solicitud hasta el levantamiento de hipoteca.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="flex flex-col justify-start  gap-5 text-azulcreditomype rounded-3xl py-4  group relative">
                    <div class="flex flex-col justify-center items-center gap-3 ">

                        <div class="relative">
                            <div class="flex justify-center items-center">
                                <img src="{{ asset('images/img/icono3.png') }}" alt=""
                                    class="w-16 h-16 rounded-full">
                            </div>
                        </div>

                        <div class="font-semibold flex flex-col gap-5 text-center items-center">
                            <h2 class="font-fontBold text-text29  w-full mx-auto px-5 tracking-tight">
                                Monto del 💰 Prestamo
                            </h2>
                            <p class="font-fontLight text-text20  px-5">
                                Desde S/.20,000, hasta el 30% del valor del inmueble.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="flex flex-col justify-start  gap-5 text-azulcreditomype rounded-3xl py-4  group relative">
                    <div class="flex flex-col justify-center items-center gap-3 ">

                        <div class="relative">
                            <div class="flex justify-center items-center">
                                <img src="{{ asset('images/img/icono6.png') }}" alt=""
                                    class="w-16 h-16 rounded-full">
                            </div>
                        </div>

                        <div class="font-semibold flex flex-col gap-5 text-center items-center">
                            <h2 class="font-fontBold text-text29  w-full mx-auto px-5 tracking-tight">
                                Tasas 📈 Competitivas
                            </h2>
                            <p class="font-fontLight text-text20  px-5">
                                Del 2.8% al 3.5% mensual.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="flex flex-col justify-start  gap-5 text-azulcreditomype rounded-3xl py-4 group relative">
                    <div class="flex flex-col justify-center items-center gap-3 ">

                        <div class="relative">
                            <div class="flex justify-center items-center">
                                <img src="{{ asset('images/img/icono5.png') }}" alt=""
                                    class="w-16 h-16 rounded-full">
                            </div>
                        </div>

                        <div class="font-semibold flex flex-col gap-5 text-center items-center">
                            <h2 class="font-fontBold text-text29 w-full mx-auto px-5 tracking-tight">
                                Evaluación 🔍 Flexible
                            </h2>
                            <p class="font-fontLight text-text20  px-5">
                                No revisamos Infocorp.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="flex flex-col justify-start  gap-5 text-azulcreditomype rounded-3xl py-4  group relative">
                    <div class="flex flex-col justify-center items-center gap-3 ">

                        <div class="relative">
                            <div class="flex justify-center items-center">
                                <img src="{{ asset('images/img/icono4.png') }}" alt=""
                                    class="w-16 h-16 rounded-full">
                            </div>
                        </div>

                        <div class="font-semibold flex flex-col gap-5 text-center items-center">
                            <h2 class="font-fontBold text-text29 w-full mx-auto px-5 tracking-tight">
                                Confianza ✔️
                            </h2>
                            <p class="font-fontLight text-text20  px-5">
                                Registrados en la SBS (Resolución N° 01144 - 2023)
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </section>


        <section class="bg-verdecreditomype fontosectionmidle">
            <div class="flex flex-col gap-5 text-textAzul w-full pl-[5%] " data-aos="fade-up" data-aos-offset="150">
                <div class="flex flex-col 2md:flex-row gap-10">
                    <div class="text-azulcreditomype flex flex-col gap-14 basis-1/3 text-left py-20">
                        <div class="flex flex-col gap-8 md:gap-5">
                            <h1
                                class="font-bold fontBold text-[50px] md:text-text36 2md:text-text56 leading-none 2md:leading-tight">
                                Préstamo <br><span class="text-white font-fontLight">con garantía</span>
                                hipotecaria 🏡
                            </h1>
                        </div>
                        <div class="font-semibold flex flex-col md:flex-col items-start justify-start gap-5">
                            <h2 class="text-white text-text30 font-fontLight">Creditomype conecta a emprendedores y
                                empresarios
                                que buscan financiamiento para sus proyectos, con inversionistas dispuestos a financiar
                                estos proyectos,
                                logrando un beneficio para ambos.</h2>

                        </div>
                    </div>

                    <div class="basis-2/3 w-full 2md:w-[200px] flex items-center -mt-20 pl-[5%]">
                        <img class="w-full h-full size-full" src="{{ asset('images/img/bannerchico.png') }}" />
                    </div>
                </div>
            </div>
        </section>


        <section class="bannervideo">
            <div class="flex flex-col gap-5 text-textAzul w-full" data-aos="fade-up" data-aos-offset="150">
                <div class="flex flex-col 2md:flex-row gap-10">

                    <div class=" flex flex-col gap-40 basis-full text-left py-32">
                        <div class="flex flex-col gap-8 md:gap-5 bg-verdecreditomype w-1/4 rounded-r-full py-5">
                            <h1
                                class="text-white font-bold font-fontBold text-[50px] md:text-text32  leading-none 2md:leading-tight justify-center items-center pl-[10%]">
                                Conoce <span class="font-fontLight"> nuestra<br> forma de</span>
                                trabajo
                            </h1>
                        </div>

                        <div
                            class="bg-plomoblanco font-semibold flex flex-col md:flex-col items-start justify-start gap-0 w-2/6 rounded-2xl p-5 relative left-24">

                            <img class="absolute top-0 right-28 -m-5" src="{{ asset('images/img/triangulo.png') }}" />
                            <h2 class="text-azulcreditomype text-text24 font-fontLight">"Credito MYPE me ayudó a expandir
                                mi tienda en un tiempo récord.
                                El proceso fue simple y el equipo muy profesional."</h2>
                            <h3 class="text-azulcreditomype text-text18 font-fontBold tracking-tighter mt-4">Maria
                                Rodríguez,</h3>
                            <h2 class="text-azulcreditomype text-text18 font-fontLight tracking-tighter">Emprendendora</h2>
                        </div>

                        <div class="bg-azulcreditomype rounded-full absolute top-1/2 right-1/2"><img class="w-20 h-20"
                                src="{{ asset('images/img/play.png') }}" /></div>
                    </div>

                </div>
            </div>
        </section>


        <section class="flex flex-col gap-10 w-full px-[5%] bg-white py-24" data-aos="fade-up" data-aos-offset="150">
            <div class="flex flex-col gap-3 text-center px-[20%]">
                <h2
                    class="tracking-tight font-bold font-fontBold text-verdecreditomype text-text48 md:text-text56 leading-none md:leading-tight">
                    Nuestros aliados 🤝 <span class="text-azulcreditomype font-fontBold"> <br>estratégicos
                </h2>
            </div>

            {{-- <div class="flex flex-row gap-5 "> --}}
            <div
                class="flex flex-row justify-between items-center  text-azulcreditomype rounded-3xl py-4  w-full px-[10%]">
                <div class="flex flex-col">
                    <img src="{{ asset('images/img/logocm1.png') }}" />
                </div>
                <div>
                    <img src="{{ asset('images/img/logocm2.png') }}" />
                </div>
                <div>
                    <img src="{{ asset('images/img/logocm3.png') }}" />
                </div>
            </div>
            <div
                class="flex flex-row justify-between  items-center gap-20 text-azulcreditomype rounded-3xl py-4  w-full px-[10%]">
                <div>
                    <img src="{{ asset('images/img/logocm4.png') }}" />
                </div>
                <div>
                    <img src="{{ asset('images/img/logocm5.png') }}" />
                </div>
                <div>
                    <img src="{{ asset('images/img/logocm6.png') }}" />
                </div>
            </div>

            {{-- </div> --}}

        </section>

        <section class="bg-azulcreditomype py-24 space-y-14" id="proceso">
            <div class="flex flex-col md:flex-row w-11/12 mx-auto">
                <h2
                    class="tracking-tight font-bold font-fontBold text-white text-text48 md:text-text56 leading-none md:leading-tight">
                    Nuestras 📰 <span class="text-verdecreditomype font-fontBold"> notas de prensa
                </h2>
            </div>
            <div class="flex flex-col md:flex-row w-11/12 mx-auto gap-10">
                <div class="basis-1/2 flex flex-col" data-aos="fade-up" data-aos-offset="150">

                    <img src="{{ asset('images/img/seniorcm.png') }}" />

                    <h2
                        class="font-bold font-fontBold text-text32 text-verdecreditomype leading-none md:leading-tight py-5">
                        ¿Qué requisitos necesito para solicitar un préstamo?
                    </h2>
                    <p class=" font-fontLight text-text18 xl:text-text20 text-white" data-aos="fade-up"
                        data-aos-offset="150">
                        Creditomype conecta a emprendedores y empresarios que buscan financiamiento para sus proyectos,
                        con inversionistas dispuestos a financiar estos proyectos, logrando un beneficio para ambos.
                    </p>
                    <a class="text-verdecreditomype font-fontMedium text-text20 mt-3 flex">
                        Leer más <img class="flex flex-col h-5 mt-1.5" src="{{ asset('images/img/flechaicon.png') }}" />
                    </a>

                </div>
                <div class="basis-1/2 flex flex-col" data-aos="fade-up" data-aos-offset="150">
                    <div class="basis-1/2 flex flex-col" data-aos="fade-up" data-aos-offset="150">

                        <img src="{{ asset('images/img/senoracm.png') }}" />

                        <h2
                            class="font-bold font-fontBold text-text32 text-verdecreditomype leading-none md:leading-tight py-5">
                            ¿Qué requisitos necesito para solicitar un préstamo?
                        </h2>
                        <p class=" font-fontLight text-text18 xl:text-text20 text-white" data-aos="fade-up"
                            data-aos-offset="150">
                            Creditomype conecta a emprendedores y empresarios que buscan financiamiento para sus proyectos,
                            con inversionistas dispuestos a financiar estos proyectos, logrando un beneficio para ambos.
                        </p>
                        <a class="text-verdecreditomype font-fontMedium text-text20 mt-3 flex">
                            Leer más <img class="flex flex-col h-5 mt-1.5"
                                src="{{ asset('images/img/flechaicon.png') }}" />
                        </a>

                    </div>

                </div>
            </div>
        </section>

        <section class="pt-12">
            <div class="w-full mx-auto flex flex-col md:flex-row justify-center text-center items-start sm:pt-[90px] pb-10 md:pt-20 lg:px-20 lg:pt-10"
                data-aos="fade-up" data-aos-offset="150">

                <div class="text-azulcreditomype flex flex-col gap-14 basis-1/2 text-left pr-[8%]">
                    <div class="flex flex-col gap-8 md:gap-5">
                        <h1
                            class="font-bold fontBold text-[50px] md:text-text36 2md:text-text56 leading-none 2md:leading-tight tracking-tight">
                            Cobertura <span class="text-verdecreditomype font-fontLight">de Servicio en </span>
                            Todo el Perú 📍
                        </h1>
                        <h2 class="text-azulcreditomype text-text24 font-semibold font-fontLight">Lima metropolitana, Lima
                            provincias, Ica, Huancayo, Arequipa y Cusco</h2>
                    </div>
                    <div
                        class="font-semibold text-text18 xl:text-text22 flex flex-col md:flex-col items-start justify-start gap-5">

                        <h2 class="text-azulcreditomype text-text24 font-fontBold tracking-tight">Elige tu Sucursal</h2>
                        <ul
                            class="text-azulcreditomype text-text24 font-semibold font-fontLight tracking-tight gap-5 mt-2">
                            <li class="flex flex-row"><img class="pr-3"
                                    src="{{ asset('images/img/iconocasa.png') }}" />Lima metropolitana</li>
                            <li class="flex flex-row"><img class="pr-3"
                                    src="{{ asset('images/img/iconocasa.png') }}" />Lima provincias</li>
                            <li class="flex flex-row"><img class="pr-3"
                                    src="{{ asset('images/img/iconocasa.png') }}" />Ica</li>
                            <li class="flex flex-row"><img class="pr-3"
                                    src="{{ asset('images/img/iconocasa.png') }}" />Huancayo</li>
                            <li class="flex flex-row"><img class="pr-3"
                                    src="{{ asset('images/img/iconocasa.png') }}" />Arequipa</li>
                            <li class="flex flex-row"><img class="pr-3"
                                    src="{{ asset('images/img/iconocasa.png') }}" />Cusco</li>

                        </ul>

                    </div>
                </div>

                <div class="image-container flex justify-center items-center basis-1/2 relative md:mt-16">
                    <!-- md:mt-24 - mt-12  xl:mt-32-->
                    <div class="hidden md:flex flex-col justify-center h-full items-center">
                        <img src="{{ asset('images/img/mapa.png') }}" alt="doctor Kewin" class="w-full">
                    </div>
                    {{-- <div class=" md:absolute bottom-0">
                            <img src="{{ asset('images/img/mapa.png') }}" alt="doctor kevin"
                                class="h-full w-full">
                        </div> --}}
                </div>
            </div>

        </section>

        <section>
            <div class="bg-[#F5F5F5] font-poppins py-20">
                <div class="relative bg-[#F5F5F5] px-6  ring-gray-900/5 sm:mx-auto sm:rounded-lg sm:px-10">
                    <div class="mx-auto px-5">
                        <div class="flex flex-col items-center ">
                            <h2
                                class="tracking-tight font-bold font-fontBold text-verdecreditomype text-text48 md:text-text56 leading-none md:leading-tight text-center">
                                Preguntas Frecuentes: <span class="text-azulcreditomype font-fontBold"> Todo lo<br> que
                                    Necesitas Saber 💡
                            </h2>
                        </div>
                        <div class="mx-auto mt-8 grid max-w-[900px] divide-y divide-neutral-200">
                            <div class="py-8">
                                <details class="group">
                                    <summary
                                        class="flex cursor-pointer list-none items-center justify-between font-medium">
                                        <span class="text-azulcreditomype font-fontBold text-text32 tracking-tight">
                                            ¿Qué requisitos necesito para solicitar un préstamo?</span>
                                        <span class="transition group-open:rotate-180">
                                            <svg width="50" height="50" viewBox="0 0 53 53" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <rect x="53" width="53" height="53" rx="26.5"
                                                    transform="rotate(90 53 0)" fill="#33BF82" />
                                                <path
                                                    d="M18.8244 28.2123C18.307 27.6949 17.468 27.6949 16.9506 28.2123C16.4331 28.7297 16.4331 29.5687 16.9506 30.0861L24.6262 37.7617C25.6611 38.7966 27.3389 38.7966 28.3738 37.7617L36.0494 30.0861C36.5669 29.5687 36.5669 28.7297 36.0494 28.2123C35.532 27.6949 34.693 27.6949 34.1756 28.2123L27.825 34.5629L27.825 15.8992C27.825 15.1674 27.2318 14.5742 26.5 14.5742C25.7682 14.5742 25.175 15.1674 25.175 15.8992L25.175 34.5629L18.8244 28.2123Z"
                                                    fill="white" />
                                            </svg>

                                        </span>
                                    </summary>
                                    <p class="group-open:animate-fadeIn mt-3 text-neutral-600 font-fontLight text-text20 tracking-tight">
                                        Nuestro proceso de aprobación es rápido y generalmente toma menos de 48 horas.
                                    </p>
                                </details>
                            </div>
                            <div class="py-8">
                                <details class="group">
                                    <summary
                                        class="flex cursor-pointer list-none items-center justify-between font-medium">
                                        <span class="text-azulcreditomype font-fontBold text-text32 tracking-tight">
                                            ¿Cuánto tiempo toma el proceso de aprobación?</span>
                                        <span class="transition group-open:rotate-180">
                                            <svg width="50" height="50" viewBox="0 0 53 53" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <rect x="53" width="53" height="53" rx="26.5"
                                                    transform="rotate(90 53 0)" fill="#33BF82" />
                                                <path
                                                    d="M18.8244 28.2123C18.307 27.6949 17.468 27.6949 16.9506 28.2123C16.4331 28.7297 16.4331 29.5687 16.9506 30.0861L24.6262 37.7617C25.6611 38.7966 27.3389 38.7966 28.3738 37.7617L36.0494 30.0861C36.5669 29.5687 36.5669 28.7297 36.0494 28.2123C35.532 27.6949 34.693 27.6949 34.1756 28.2123L27.825 34.5629L27.825 15.8992C27.825 15.1674 27.2318 14.5742 26.5 14.5742C25.7682 14.5742 25.175 15.1674 25.175 15.8992L25.175 34.5629L18.8244 28.2123Z"
                                                    fill="white" />
                                            </svg>

                                        </span>
                                    </summary>
                                    <p class="group-open:animate-fadeIn mt-3 text-neutral-600 font-fontLight text-text20 tracking-tight">
                                        Nuestro proceso de aprobación es rápido y generalmente toma menos de 48 horas.
                                    </p>
                                </details>
                            </div>
                            <div class="py-8">
                                <details class="group">
                                    <summary
                                        class="flex cursor-pointer list-none items-center justify-between font-medium">
                                        <span class="text-azulcreditomype font-fontBold text-text32 tracking-tight">
                                            ¿Puedo invertir si no tengo experiencia previa?</span>
                                        <span class="transition group-open:rotate-180">
                                            <svg width="50" height="50" viewBox="0 0 53 53" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <rect x="53" width="53" height="53" rx="26.5"
                                                    transform="rotate(90 53 0)" fill="#33BF82" />
                                                <path
                                                    d="M18.8244 28.2123C18.307 27.6949 17.468 27.6949 16.9506 28.2123C16.4331 28.7297 16.4331 29.5687 16.9506 30.0861L24.6262 37.7617C25.6611 38.7966 27.3389 38.7966 28.3738 37.7617L36.0494 30.0861C36.5669 29.5687 36.5669 28.7297 36.0494 28.2123C35.532 27.6949 34.693 27.6949 34.1756 28.2123L27.825 34.5629L27.825 15.8992C27.825 15.1674 27.2318 14.5742 26.5 14.5742C25.7682 14.5742 25.175 15.1674 25.175 15.8992L25.175 34.5629L18.8244 28.2123Z"
                                                    fill="white" />
                                            </svg>

                                        </span>
                                    </summary>
                                    <p class="group-open:animate-fadeIn mt-3 text-neutral-600 font-fontLight text-text20 tracking-tight">
                                        ¡Claro que sí! Nuestro equipo te guiará en todo el proceso para que puedas invertir con confianza.
                                    </p>
                                </details>
                            </div>
                            <div class="py-8">
                                <details class="group">
                                    <summary
                                        class="flex cursor-pointer list-none items-center justify-between font-medium">
                                        <span class="text-azulcreditomype font-fontBold text-text32 tracking-tight">
                                            ¿Qué garantías necesito para solicitar un préstamo?</span>
                                        <span class="transition group-open:rotate-180">
                                            <svg width="50" height="50" viewBox="0 0 53 53" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <rect x="53" width="53" height="53" rx="26.5"
                                                    transform="rotate(90 53 0)" fill="#33BF82" />
                                                <path
                                                    d="M18.8244 28.2123C18.307 27.6949 17.468 27.6949 16.9506 28.2123C16.4331 28.7297 16.4331 29.5687 16.9506 30.0861L24.6262 37.7617C25.6611 38.7966 27.3389 38.7966 28.3738 37.7617L36.0494 30.0861C36.5669 29.5687 36.5669 28.7297 36.0494 28.2123C35.532 27.6949 34.693 27.6949 34.1756 28.2123L27.825 34.5629L27.825 15.8992C27.825 15.1674 27.2318 14.5742 26.5 14.5742C25.7682 14.5742 25.175 15.1674 25.175 15.8992L25.175 34.5629L18.8244 28.2123Z"
                                                    fill="white" />
                                            </svg>

                                        </span>
                                    </summary>
                                    <p class="group-open:animate-fadeIn mt-3 text-neutral-600 font-fontLight text-text20 tracking-tight">
                                        Las garantías varían según el tipo y el monto del préstamo, pero nuestro equipo te ayudará a entender todos los requisitos.
                                    </p>
                                </details>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            
        </section>
    </main>


@section('scripts_improtados')
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            var especialidades = new Swiper(".especialidades", {
                slidesPerView: 4,
                spaceBetween: 20,
                loop: true,
                grab: true,
                centeredSlides: true,
                initialSlide: 2,
                pagination: {
                    el: ".swiper-pagination-estadisticas",
                    clickable: true,
                },
                allowTouchMove: false,
                autoplay: {
                    delay: 1500,
                    disableOnInteraction: false,
                },
                breakpoints: {
                    0: {
                        slidesPerView: 2,
                    },
                    768: {
                        slidesPerView: 4,
                    },
                },
            });

            /* ---------------- CARROSUEL PARA GRILLAS --------- */

            var enfermedades = new Swiper(".enfermedades", {
                slidesPerView: 1,
                spaceBetween: 20,
                loop: true,
                grab: true,
                centeredSlides: true,
                initialSlide: 2,
                allowTouchMove: true,
            });
            /* --------------------- CARRUSEL PARA MARCAS ------- */

            var logosHospitales = new Swiper(".logosHospitales", {
                slidesPerView: 2,
                spaceBetween: 10,
                loop: true,
                grab: true,
                centeredSlides: false,
                allowTouchMove: false,
                initialSlide: 0, // Empieza en el cuarto slide (índice 3) */
                autoplay: {
                    delay: 1500,
                    disableOnInteraction: false,
                },
                breakpoints: {
                    0: {
                        slidesPerView: 2,
                        centeredSlides: true,
                    },
                    768: {
                        slidesPerView: 2,
                    },
                },
            });

            /* ----- carrusel de testimonios --------- */

            var testimonios = new Swiper(".testimonios", {
                slidesPerView: 1,
                spaceBetween: 10,
                loop: true,
                grab: true,
                allowTouchMove: false,
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
                centeredSlides: true,
                initialSlide: 0, // Empieza en el cuarto slide (índice 3) */
                autoplay: {
                    delay: 2500,
                    disableOnInteraction: false,
                },
                breakpoints: {
                    0: {
                        slidesPerView: 1,
                    },
                },
            });

            /* ---------------- FLIPCARD IMC  ----------------------------- */
            const onCalcular = document.querySelector(".btnCalcular");
            const onRegresar = document.querySelector(".btnRegresar");
            const card = document.querySelector(".card");
            const front = document.querySelector(".front");
            const back = document.querySelector(".back");
            const resultado = document.querySelector(".resultado");
            const peso = document.querySelector(".peso");
            const altura = document.querySelector(".altura");

            const imc0 = document.getElementById("imc0");
            const imc1 = document.getElementById("imc1");
            const imc2 = document.getElementById("imc2");
            const imc3 = document.getElementById("imc3");
            const imc4 = document.getElementById("imc4");
            const imc5 = document.getElementById("imc5");
            const imcItems = document.querySelectorAll(".imcItems");
            const imcp = document.querySelectorAll(".imcpInfo");

            let imc = null;

            onCalcular.addEventListener("click", () => {
                imc = (
                    parseFloat(peso.value) / Math.pow(parseFloat(altura.value), 2)
                ).toFixed(1);

                if (imc < 0) {
                    createAlert("Solo se aceptan valores mayores a cero");
                    return;
                }

                if (isNaN(imc)) {
                    createAlert("Debe llenar los campos peso y altura");
                    return;
                }

                resultado.textContent = imc;

                card.classList.toggle("flipCard");
                front.classList.add("hidden");
                back.classList.remove("hidden");

                validateImc(imc);
            });

            onRegresar.addEventListener("click", () => {
                back.classList.add("hidden");
                card.classList.toggle("flipCard");
                front.classList.remove("hidden");
                resultado.textContent = "";
                peso.value = "";
                altura.value = "";

                imc0.classList.remove("bg-green-200");
                imc1.classList.remove("bg-green-200");
                imc2.classList.remove("bg-green-200");
                imc3.classList.remove("bg-red-200");
                imc4.classList.remove("bg-red-200");
                imc5.classList.remove("bg-red-200");

                /* Vuelve a eliminar los estilos y coloca el color inicial */
                imcp.forEach((imc) => {
                    imc.classList.remove(
                        "text-red-600",
                        "bg-green-200",
                        "text-green-600",
                        "bg-red-200"
                    );

                    imc.classList.add("text-textAzul");
                });
            });

            function createAlert(mensaje) {
                const alerta = document.createElement("p");
                onCalcular.disabled = true;
                alerta.textContent = mensaje;
                alerta.classList.add("alerta");
                card.parentNode.insertBefore(alerta, card.nextSibling);
                setTimeout(() => {
                    alerta.remove();
                    onCalcular.disabled = false;
                }, 3000);
            }

            function validateImc(imc) {
                if (imc <= 18.5) {
                    imc0.classList.add("bg-green-200");
                } else if (imc >= 18.5 && imc <= 24.9) {
                    imc1.classList.add("bg-green-200");
                } else if (imc >= 25 && imc <= 29.9) {
                    imc2.classList.add("bg-green-200");
                } else if (imc >= 30 && imc <= 34.9) {
                    imc3.classList.add("bg-red-200");
                } else if (imc >= 35 && imc <= 39.9) {
                    imc4.classList.add("bg-red-200");
                } else {
                    imc5.classList.add("bg-red-200");
                }

                /* Cambia de color al parrafo */
                imcItems.forEach((imc) => {
                    if (imc.classList.contains("bg-green-200")) {
                        imc.children[1].classList.remove("text-textAzul");
                        imc.children[1].classList.add("text-green-600");
                    }
                    if (imc.classList.contains("bg-red-200")) {
                        imc.children[1].classList.remove("text-textAzul");
                        imc.children[1].classList.add("text-red-600");
                    }
                });
            }

            /* ------------------------ deslizante --------------- */

            const one = document.querySelector(".one");
            const two = document.querySelector(".two");
            const three = document.querySelector(".three");
            const four = document.querySelector(".four");
            const five = document.querySelector(".five");
            const firstIcon = document.querySelector("#firstIcon");
            const firstCircle = document.querySelector("#firstCircle");
            const secondIcon = document.querySelector("#secondIcon");
            const secondCircle = document.querySelector("#secondCircle");
            const thirdsIcon = document.querySelector("#thirdsIcon");
            const thirdsCircle = document.querySelector("#thirdsCircle");

            let stepOne = null;
            let stepTwo = null;
            let stepThree = null;

            one.onclick = function() {
                stepOne = 1;
                one.classList.add("active");
                two.classList.remove("active");
                three.classList.remove("active");

                if (stepOne < stepTwo || stepOne < stepThree) {
                    secondIcon.setAttribute("stroke", "#66AAD8");
                    secondCircle.setAttribute("fill", "#F8FBFD");
                    thirdsIcon.setAttribute("stroke", "#66AAD8");
                    thirdsCircle.setAttribute("fill", "#F8FBFD");
                }
                if (stepOne < stepTwo && stepOne < stepThree) {
                    stepTwo = null;
                    stepThree = null;
                }
            };

            two.onclick = function() {
                stepTwo = 2;
                one.classList.add("active");
                two.classList.add("active");
                three.classList.remove("active");
                secondIcon.setAttribute("stroke", "#ffffff");
                secondCircle.setAttribute("fill", "#42BAE2");

                if (stepTwo < stepThree || stepTwo > stepOne) {
                    thirdsIcon.setAttribute("stroke", "#66AAD8");
                    thirdsCircle.setAttribute("fill", "#F8FBFD");

                    firstIcon.setAttribute("stroke", "#ffffff");
                    firstCircle.setAttribute("fill", "#42BAE2");
                }
            };
            three.onclick = function() {
                stepThree = 3;
                one.classList.add("active");
                two.classList.add("active");
                three.classList.add("active");

                thirdsIcon.setAttribute("stroke", "#ffffff");
                thirdsCircle.setAttribute("fill", "#42BAE2");

                if (stepThree > stepTwo || stepThree > stepOne) {
                    firstIcon.setAttribute("stroke", "#ffffff");
                    firstCircle.setAttribute("fill", "#42BAE2");
                    secondIcon.setAttribute("stroke", "#ffffff");
                    secondCircle.setAttribute("fill", "#42BAE2");
                }
            };
        });
    </script>
@stop

@stop
