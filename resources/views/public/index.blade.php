@extends('components.public.matrix')

@section('css_improtados')
    <style>
        @font-face {
            font-family: "jakartaExtraBold";
            src: url("./fonts/jakarta/PlusJakartaSans-ExtraBold.woff") format("woff");
        }

        @font-face {
            font-family: "jakartaBold";
            src: url("./fonts/jakarta/PlusJakartaSans-Bold.woff") format("woff");
        }

        @font-face {
            font-family: "jakartaSemiBold";
            src: url("./fonts/jakarta/PlusJakartaSans-SemiBold.woff") format("woff");
        }

        @font-face {
            font-family: "jakartaMedium";
            src: url("./fonts/jakarta/PlusJakartaSans-Medium.woff") format("woff");
        }

        @font-face {
            font-family: "jakartaRegular";
            src: url("./fonts/jakarta/PlusJakartaSans-Regular.woff") format("woff");
        }

        @font-face {
            font-family: "jakartaExtraBoldItalic";
            src: url("./fonts/jakarta/PlusJakartaSans-ExtraBoldItalic.woff") format("woff");
        }

        @font-face {
            font-family: "outfitExtraBold";
            src: url("./fonts/outfit/Outfit-ExtraBold.woff") format("woff");
        }

        @font-face {
            font-family: "outfitBold";
            src: url("./fonts/outfit/Outfit-Bold.woff") format("woff");
        }

        @font-face {
            font-family: "outfitSemiBold";
            src: url("./fonts/outfit/Outfit-SemiBold.woff") format("woff");
        }

        @font-face {
            font-family: "outfitMedium";
            src: url("./fonts/outfit/Outfit-Medium.woff") format("woff");
        }

        @font-face {
            font-family: "outfitRegular";
            src: url("./fonts/outfit/Outfit-Regular.woff") format("woff");
        }

        @font-face {
            font-family: "outfitLight";
            src: url("./fonts/outfit/Outfit-Light.woff") format("woff");
        }

        @font-face {
            font-family: "outfitExtraLight";
            src: url("./fonts/outfit/Outfit-ExtraLight.woff") format("woff");
        }

        .flip-card-inner {
            transition: transform 0.8s;
            transform-style: preserve-3d;
        }

        .flip-card:hover .flip-card-inner {
            transform: rotateY(180deg);
        }

        .flip-card-front,
        .flip-card-back {
            position: absolute;
            display: flex;
            flex-direction: column;
            justify-content: center;
            width: 100%;
            height: 100%;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
        }

        .flip-card-back {
            transform: rotateY(180deg);
        }

        .custom-swiper-buttons .swiper-button-prev:after {
            background-image: url("./images/svg/arrow_left.svg");
            transition: background-image 0.2s ease-in-out;
            object-fit: contain;
            background-repeat: no-repeat;
            width: 50px;
        }

        .custom-swiper-buttons .swiper-button-prev:hover:after {
            background-image: url("./images/svg/arrow_left.svg");
        }

        .custom-swiper-buttons .swiper-button-next:after {
            background-image: url("./images/svg/arrow_right.svg");
            transition: background-image 0.2s ease-in-out;
            object-fit: contain;
            background-repeat: no-repeat;
            width: 50px;
        }

        .custom-swiper-buttons .swiper-button-next:hover:after {
            background-image: url("./images/svg/arrow_right.svg");
        }

        .fondobombas {
            background-image: url("./images/img/fondobombas.png");
            object-fit: contain;
        }

        .fondologos {
            background-image: url("./images/img/fondologos.png");
            object-fit: cover;
        }

        .modal-open {
            overflow: hidden;
            background-color: rgba(0, 0, 0, 1);
        }
    </style>

@stop

@section('content')

    <main class="-mt-20">
        
            <section class="gap-20  bg-top object-right-top bg-cover bg-no-repeat pt-16" style="background-image: url('{{ asset('images/img/textura3.webp') }}');">
                
                <div class="flex flex-col justify-center items-center gap-2 w-full ">
                    <div class="flex flex-col gap-10 items-center py-10 px-[2%]">
                        <h2
                            class="font-outfitSemiBold  text-4xl leading-none lg:text-primary  text-white max-w-4xl  text-center">
                            Duplica tus Conversiones y Domina el Mercado B2B y B2C <span
                                class="text-primario font-jakartaExtraBoldItalic">Digital</span>
                        </h2>
                        <p class="text-white text-xl tracking-wider text-center font-outfitLight max-w-4xl">
                            Sé el líder en tu industria con nuestras estrategias avanzadas de performance. Aumenta tus conversiones y posiciona tu marca como referente en el mercado.
                        </p>
                    </div>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 w-full pl-[5%] lg:pl-[0%] pr-[5%] gap-5 lg:gap-24 object-left bg-cover lg:bg-contain bg-no-repeat" style="background-image: url('{{ asset('images/img/hombresentado2.png') }}');" >
                    <div class="flex flex-col gap-6 md:gap-12 max-w-[665px] justify-center items-end lg:h-[700px]">
                        {{-- <div class="flex flex-row justify-start"><img class="object-left"
                            src="{{ asset('images/img/hombresentado2.png') }}" /></div> --}}
                    </div>

                    <div class="flex flex-col gap-10 justify-start items-start mt-6 lg:mt-0  pb-[10%] xl:px-[8%]">
                        <div class="bg-[#080101] p-[8%]  flex flex-col items-center justify-start w-full rounded-3xl">
                            <div class="bg-transparent w-full ">
                                <h2
                                    class="font-outfitSemiBold  text-3xl leading-tight text-white max-w-4xl  text-left">
                                    ¿Estás listo para convertirte en el líder de la <span
                                        class="text-primario font-jakartaExtraBoldItalic">industria?</span>
                                </h2>
                                <form class="text-gray-600 font-fontBook gap-6 bg-transparent" id="formContactos">
                                    @csrf
                                    
                                    {{-- <div class="flex flex-col xl:flex-row justify-between items-start relative py-5 gap-4">
                                        <div id="meeting-container"
                                            class="text-sm btn-secondary py-2 flex flex-row gap-2 justify-start items-center bg-transparent px-0">
                                            <input id="meeting" type="radio" name="type_meet"
                                                class="checked:bg-black checked:active:bg-black checked:focus:bg-black  border-0 border-none focus:ring-0 focus:border-b-2 focus:border-transparent"
                                                value="Programar una reunión"> </input>
                                            <label for="meeting">Programar una reunión</label>
                                        </div>
                                        <div id="call-container"
                                            class="text-sm btn-secondary py-2 flex flex-row gap-2 justify-start items-center bg-transparent px-0">
                                            <input id="call" type="radio" name="type_meet"
                                                class="checked:bg-black checked:active:bg-black checked:focus:bg-black border-0 border-none focus:ring-0 focus:border-b-2 focus:border-transparent"
                                                value="Programar una llamada"> </input>
                                            <label for="call">Programar una llamada</label>
                                        </div>
                                    </div> --}}
                                    

                                    <div class="relative mb-4 mt-5">
                                        <input name="name" type="text" required style="font-size: 17px"
                                            class="bg-white  mt-1 block w-full border-0 border-none rounded-xl p-3  focus:ring-0 focus:border-b-2 focus:border-gray-500"
                                            placeholder="Nombre">
                                        {{-- <span class="absolute inset-y-0 right-0 flex items-center pr-3 text-verdecreditomype text-text14">Obligatorio</span> --}}
                                    </div>
    
                                    <div class="flex flex-col md:flex-row md:gap-4">
    
                                        <div class="relative mb-4 w-full">
                                            <input id="email" name="email" type="email" style="font-size: 17px"
                                                class="bg-white mt-1 block w-full border-0  border-none rounded-xl p-3  focus:ring-0 focus:border-b-2 focus:border-gray-500"
                                                placeholder="E-mail">
                                            {{-- <span class="absolute inset-y-0 right-0 flex items-center pr-3 text-verdecreditomype text-text14"></span> --}}
                                        </div>
    
                                        <div class="relative mb-4 w-full">
                                            <input id="telefono" name="cellphone" type="text" style="font-size: 17px"
                                                class="bg-white mt-1 block w-full border-0  border-none rounded-xl p-3  focus:ring-0 focus:border-b-2 focus:border-gray-500"
                                                placeholder="Número de celular">
                                            {{-- <span class="absolute inset-y-0 right-0 flex items-center pr-3 text-verdecreditomype text-text14"></span> --}}
                                        </div>
    
                                    </div>
    
    
                                    <div class="flex flex-col md:flex-row md:gap-4">
    
                                        <div class="relative mb-4 w-full">
                                            <input id="job" name="job" type="job" style="font-size: 17px"
                                                class="bg-white mt-1 block w-full border-0  border-none rounded-xl p-3 focus:ring-0 focus:border-b-2 focus:border-gray-500"
                                                placeholder="Puesto laboral">
                                            {{-- <span class="absolute inset-y-0 right-0 flex items-center pr-3 text-verdecreditomype text-text14"></span> --}}
                                        </div>
    
                                        <div class="relative mb-4 w-full">
                                            <input id="business" name="business" type="text" style="font-size: 17px"
                                                class="bg-white mt-1 block w-full border-0  border-none rounded-xl p-3  focus:ring-0 focus:border-b-2 focus:border-gray-500"
                                                placeholder="Empresa">
                                            {{-- <span class="absolute inset-y-0 right-0 flex items-center pr-3 text-verdecreditomype text-text14"></span> --}}
                                        </div>
    
                                    </div>
                                    
                                    <div class="relative mb-4">
                                        <select name="total_personal" style="font-size: 17px"
                                            class="bg-white text-gray-600  mt-1 block w-full border-0 border-none rounded-xl p-3  focus:ring-0 focus:border-b-2 focus:border-gray-500"
                                            placeholder="Nombre">
                                            <option value="">Seleccione nro. de trabajadores</option>
                                            <option value="1 a 2 Trabajadores">1 a 2 Trabajadores</option>
                                            <option value="3 a 5 Trabajadores">3 a 5 Trabajadores</option>
                                            <option value="6 a 10 Trabajadores">6 a 10 Trabajadores</option>
                                            <option value="10 a más Trabajadores">10 a más Trabajadores</option>
                                        </select>
                                        
                                    </div>


                                    <div class="relative mb-4">
                                        <textarea name="message" style="font-size: 17px; height: auto; "
                                            class="min-h-28 lg:min-h-14 tracking-tight placeholder:text-base bg-white mt-1 block w-full border-0  border-none rounded-xl p-3 pr-24 focus:ring-0 focus:border-b-2 focus:border-gray-500"
                                            placeholder="Necesito..."></textarea>
                                        {{-- <span class="absolute inset-y-0 right-0 flex items-center pr-3 text-verdecreditomype text-text14"></span> --}}
                                    </div>
    
                                    <div class="flex flex-col justify-center items-end pt-8">
                                        <button type="submit" rel="noopener" class="btn-secondary">Enviar solicitud</button>
                                    </div>
                                    {{-- <div class="mt-6">
                                        <button type="submit" class="w-full bg-verdecreditomype text-white py-3 rounded-3xl hover:bg-green-600 mt-3">Quiero una cotización</button>
                                    </div> --}}
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </section> 




        {{-- <section class="pt-[5%] py-12  bg-cover object-top " style="background-image: url('{{ asset('images/svg/textura2.svg') }}');">
            <div class="grid grid-cols-1 md:grid-cols-2 w-11/12 mx-auto gap-5">
                <div class="flex flex-col gap-10 max-w-[665px]">
                    <h2 class="text-terciario text-4xl lg:text-secondary font-outfitSemiBold leading-tight">
                        ¿Cómo lo hacemos?
                    </h2>
                </div>

                <div class="flex flex-col gap-7 lg:gap-10 group rounded-xl">
                    <p class="text-xl font-outfitLight">Etiam lacinia tortor sed nisi imperdiet, eu rhoncus felis semper.
                        Fusce venenatis magna vel fermentum feugiat. Integer ullamcorper mauris sit amet.</p>
                    <div class="flex flex-col justify-start items-center w-60 ">
                        <a target="_blank" href="https://api.whatsapp.com/send?phone=51123456789&text=hola" rel="noopener"
                            class="btn-secondary">Solicitar Presupuesto</a>
                    </div>
                </div>

            </div>
        </section> --}}


        {{-- <section class="bg-white">
            <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 w-11/12 mx-auto gap-10 py-8 lg:py-20">
                <div class="flex flex-col gap-3 items-center">
                    <div
                        class="flip-card hover:-translate-y-5 lg:hover:-translate-y-10 duration-1000 w-72 h-72 bg-transparent">
                        <div class="flip-card-inner w-full h-full relative text-center">
                            <div
                                class="flip-card-front bg-cardflip rounded-3xl flex flex-col justify-center items-center gap-3 p-6">
                                <img src="{{ asset('images/svg/icono_rojo.svg') }}" />
                                <h3 class="font-outfitSemiBold text-2xl">Auditoria <br> Digital</h3>
                            </div>
                            <div
                                class="flip-card-back bg-primario rounded-3xl flex flex-col justify-center items-center gap-3 p-6">
                                <img src="{{ asset('images/svg/icono_blanco.svg') }}" />
                                <h3 class="font-outfitSemiBold text-2xl text-white">Auditoria <br> Digital</h3>
                                <p class="text-lg font-outfitExtraLight text-white leading-tight">Vestibulum non metus ut
                                    dolor iaculis tincidunt id vitae libero, tortor consectetur.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex flex-col gap-3 items-center">
                    <div
                        class="flip-card hover:-translate-y-5 lg:hover:-translate-y-10 duration-1000 w-72 h-72 bg-transparent">
                        <div class="flip-card-inner w-full h-full relative text-center">
                            <div
                                class="flip-card-front bg-cardflip rounded-3xl flex flex-col justify-center items-center gap-3 p-6">
                                <img src="{{ asset('images/svg/icono_rojo.svg') }}" />
                                <h3 class="font-outfitSemiBold text-2xl">Estrategia Paid <br>Media</h3>
                            </div>
                            <div
                                class="flip-card-back bg-primario rounded-3xl flex flex-col justify-center items-center gap-3 p-6">
                                <img src="{{ asset('images/svg/icono_blanco.svg') }}" />
                                <h3 class="font-outfitSemiBold text-2xl text-white">Estrategia Paid <br>Media</h3>
                                <p class="text-lg font-outfitExtraLight text-white leading-tight">Vestibulum non metus ut
                                    dolor iaculis tincidunt id vitae libero, tortor consectetur.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex flex-col gap-3 items-center">
                    <div
                        class="flip-card hover:-translate-y-5 lg:hover:-translate-y-10 duration-1000 w-72 h-72 bg-transparent">
                        <div class="flip-card-inner w-full h-full relative text-center">
                            <div
                                class="flip-card-front bg-cardflip rounded-3xl flex flex-col justify-center items-center gap-3 p-6">
                                <img src="{{ asset('images/svg/icono_rojo.svg') }}" />
                                <h3 class="font-outfitSemiBold text-2xl">Contenido <br> Persuasivo</h3>
                            </div>
                            <div
                                class="flip-card-back bg-primario rounded-3xl flex flex-col justify-center items-center gap-3 p-6">
                                <img src="{{ asset('images/svg/icono_blanco.svg') }}" />
                                <h3 class="font-outfitSemiBold text-2xl text-white">Contenido <br> Persuasivo</h3>
                                <p class="text-lg font-outfitExtraLight text-white leading-tight">Vestibulum non metus ut
                                    dolor iaculis tincidunt id vitae libero, tortor consectetur.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex flex-col gap-3 items-center">
                    <div
                        class="flip-card hover:-translate-y-5 lg:hover:-translate-y-10 duration-1000 w-72 h-72 bg-transparent">
                        <div class="flip-card-inner w-full h-full relative text-center">
                            <div
                                class="flip-card-front bg-cardflip rounded-3xl flex flex-col justify-center items-center gap-3 p-6">
                                <img src="{{ asset('images/svg/icono_rojo.svg') }}" />
                                <h3 class="font-outfitSemiBold text-2xl">Metodología <br>Performance 360°</h3>
                            </div>
                            <div
                                class="flip-card-back bg-primario rounded-3xl flex flex-col justify-center items-center gap-3 p-6">
                                <img src="{{ asset('images/svg/icono_blanco.svg') }}" />
                                <h3 class="font-outfitSemiBold text-2xl text-white">Metodología <br>Performance 360°</h3>
                                <p class="text-lg font-outfitExtraLight text-white leading-tight">Vestibulum non metus ut
                                    dolor iaculis tincidunt id vitae libero, tortor consectetur.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}



        {{-- <section class="pt-[5%] py-12 lg:py-20">
            <div class="grid grid-cols-1 md:grid-cols-2 w-11/12 mx-auto gap-5">
                <div class="flex flex-col gap-10 max-w-[665px]">
                    <img src="{{ asset('images/svg/orbita.svg') }}" />
                </div>

                <div class="flex flex-col gap-10 justify-center items-center">
                    <img class="w-72" src="{{ asset('images/img/movil.png') }}" />
                    <h2 class=" font-outfitSemiBold text-4xl leading-none text-terciario max-w-4xl  text-center">
                        Crear campañas <span class="text-primario font-jakartaExtraBoldItalic"> efectivas</span> con
                        <span class="text-primario font-jakartaExtraBoldItalic">anuncios</span> persuasivos
                    </h2>
                </div>

            </div>
        </section> --}}

        {{-- <section class="py-12 lg:py-20 bg-primario">
            <div class="grid grid-cols-1 md:grid-cols-2 w-11/12 mx-auto gap-5">
                <div class="flex flex-col gap-6 md:gap-12 max-w-[665px] justify-center items-start">
                    <h3 class="text-xl font-outfitSemiBold text-white">Conoce los perfiles</h3>
                    <h2 class="font-outfitSemiBold  text-5xl leading-none md:text-6xl  text-white max-w-4xl  text-left">
                        El Dream Team de marketing digital si existe!!! Y será designado <span
                            class="text-terciario font-jakartaExtraBoldItalic">para ti!.</span>
                    </h2>
                    <div class="flex flex-col justify-start items-center w-60 ">
                        <a target="_blank" href="https://api.whatsapp.com/send?phone=51123456789&text=hola" rel="noopener"
                            class="btn-primary">Solicitar Presupuesto</a>
                    </div>
                </div>

                <div class="flex flex-col gap-10 justify-center items-center pt-7 md:pt-0">
                    <div class="grid grid-cols-2 gap-6">
                        <div><img src="{{ asset('images/img/person_1.png') }}" /></div>
                        <div><img src="{{ asset('images/img/person_2.png') }}" /></div>
                        <div><img src="{{ asset('images/img/person_3.png') }}" /></div>
                        <div><img src="{{ asset('images/img/person_4.png') }}" /></div>
                        <div><img src="{{ asset('images/img/person_5.png') }}" /></div>
                        <div><img src="{{ asset('images/img/person_6.png') }}" /></div>
                    </div>

                </div>

            </div>
        </section> --}}


        {{-- <section class="py-12 lg:py-20 flex flex-col w-full gap-12 relative">
            <div class="w-11/12 mx-auto">
                <h2 class=" font-outfitSemiBold text-4xl lg:text-5xl leading-none  text-terciario">
                    Lo que piensan de <span class="text-primario font-jakartaExtraBoldItalic">PMD</span>
                </h2>
            </div>

            <div class="swiper testimonios flex flex-row w-full !px-[5%] !lg:pl-[5%]">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-16">
                            <div class="flex flex-col justify-center items-center  px-[5%]">

                                <video class="w-full h-[700px] border border-gray-200 rounded-3xl" controls>
                                    <source src="/docs/videos/flowbite.mp4" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>

                            </div>

                            <div class="flex flex-col gap-10 justify-center items-start w-[95%] lg:w-[85%]">

                                <h2 class="font-outfitSemiBold text-3xl  md:text-5xl leading-none  text-black  text-left">
                                    Donec molestie, urna scelerisque auctor bibendum, libero libero sollicitudin diam,
                                    et eleifend massa nisi vitae ipsum. In massa mauris, porttitor id eros et, ornare
                                    laoreet magna. Y sera designado<span class="text-primario font-jakartaExtraBoldItalic"> para
                                        ti!.</span>
                                </h2>
                                <div class="flex flex-col justify-start items-center">
                                    <div class="flex flex-row items-center gap-3">
                                        <img class="rounded-full w-20 h-20 object-cover"
                                            src="{{ asset('images/img/person_3.png') }}" />
                                        <div>
                                            <h3 class="text-lg font-outfitSemiBold">Carlos Sile</h3>
                                            <p class="text-base font-outfitLight">Representante Exclusivo Doulton Perú</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-16">
                            <div class="flex flex-col justify-center items-center  px-[5%]">

                                <video class="w-full h-[700px] border border-gray-200 rounded-3xl" controls>
                                    <source src="/docs/videos/flowbite.mp4" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>

                            </div>

                            <div class="flex flex-col gap-10 justify-center items-start w-[95%] lg:w-[85%]">

                                <h2 class="font-outfitSemiBold text-3xl  md:text-5xl leading-none  text-black  text-left">
                                    Donec molestie, urna scelerisque auctor bibendum, libero libero sollicitudin diam,
                                    et eleifend massa nisi vitae ipsum. In massa mauris, porttitor id eros et, ornare
                                    laoreet magna. Y sera designado<span class="text-primario font-jakartaExtraBoldItalic"> para
                                        ti!.</span>
                                </h2>
                                <div class="flex flex-col justify-start items-center">
                                    <div class="flex flex-row items-center gap-3">
                                        <img class="rounded-full w-20 h-20 object-cover"
                                            src="{{ asset('images/img/person_3.png') }}" />
                                        <div>
                                            <h3 class="text-lg font-outfitSemiBold">Carlos Silessss</h3>
                                            <p class="text-base font-outfitLight">Representante Exclusivo Doulton Perú</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-16">
                            <div class="flex flex-col justify-center items-center  px-[5%]">

                                <video class="w-full h-[700px] border border-gray-200 rounded-3xl" controls>
                                    <source src="/docs/videos/flowbite.mp4" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>

                            </div>

                            <div class="flex flex-col gap-10 justify-center items-start w-[95%] lg:w-[85%]">

                                <h2 class="font-outfitSemiBold text-3xl  md:text-5xl leading-none  text-black  text-left">
                                    Donec molestie, urna scelerisque auctor bibendum, libero libero sollicitudin diam,
                                    et eleifend massa nisi vitae ipsum. In massa mauris, porttitor id eros et, ornare
                                    laoreet magna. Y sera designado<span class="text-primario font-jakartaExtraBoldItalic"> para
                                    ti!.</span>
                                </h2>
                                <div class="flex flex-col justify-start items-center">
                                    <div class="flex flex-row items-center gap-3">
                                        <img class="rounded-full w-20 h-20 object-cover"
                                            src="{{ asset('images/img/person_3.png') }}" />
                                        <div>
                                            <h3 class="text-lg font-outfitSemiBold">Carlos Silessss</h3>
                                            <p class="text-base font-outfitLight">Representante Exclusivo Doulton Perú</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="custom-swiper-buttons absolute bottom-0">
                <div class="flex flex-row gap5 w-24">
                    <div class="swiper-button-prev left-0"></div>
                    <div class="swiper-button-next left-28"></div>
                </div>
            </div>
        </section> --}}

        {{-- <section class="py-12 lg:py-20 flex flex-col w-full gap-12 relative">
            <div class="flex flex-col justify-center items-center w-11/12 mx-auto gap-3">
                <h3 class="font-jakartaExtraBoldItalic text-primario text-lg">FAQs</h3>
                <h2 class="font-outfitSemiBold text-4xl lg:text-5xl leading-none  text-terciario">
                    Preguntas Frecuentes
                </h2>
            </div>

            <div class="flex flex-col justify-center items-center w-11/12 mx-auto">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-x-12 w-full">

                    <div class="py-3 lg:py-5">
                        <details class="group bg-cardflip px-5 py-2 rounded-2xl">
                            <summary
                                class="flex cursor-pointer list-none items-center justify-between font-medium gap-10">
                                <span class="text-[20px] text-[#151515] font-outfitSemiBold text-xl">
                                    ¿Cuando podré ver los resultados?
                                </span>
                                <span class="transition group-open:rotate-180">
                                    <img src="{{ asset('images/svg/icono.svg') }}" />
                                </span>
                            </summary>
                            <p class="group-open:animate-fadeIn mt-3 text-neutral-600 font-outfitLight text-lg">
                                Etiam lacinia tortor sed nisi imperdiet, eu rhoncus felis semper.
                                Fusce venenatis magna vel fermentum feugiat. Integer ullamcorper mauris sit amet.
                            </p>
                        </details>
                    </div>

                    <div class="py-3 lg:py-5">
                        <details class="group bg-cardflip px-5 py-2 rounded-2xl">
                            <summary
                                class="flex cursor-pointer list-none items-center justify-between font-medium gap-10">
                                <span class="text-[20px] text-[#151515] font-outfitSemiBold text-xl">
                                    ¿Cuando podré ver los resultados?
                                </span>
                                <span class="transition group-open:rotate-180">
                                    <img src="{{ asset('images/svg/icono.svg') }}" />
                                </span>
                            </summary>
                            <p class="group-open:animate-fadeIn mt-3 text-neutral-600 font-outfitLight text-lg">
                                Etiam lacinia tortor sed nisi imperdiet, eu rhoncus felis semper.
                                Fusce venenatis magna vel fermentum feugiat. Integer ullamcorper mauris sit amet.
                            </p>
                        </details>
                    </div>

                    <div class="py-3 lg:py-5">
                        <details class="group bg-cardflip px-5 py-2 rounded-2xl">
                            <summary
                                class="flex cursor-pointer list-none items-center justify-between font-medium gap-10">
                                <span class="text-[20px] text-[#151515] font-outfitSemiBold text-xl">
                                    ¿Cuando podré ver los resultados?
                                </span>
                                <span class="transition group-open:rotate-180">
                                    <img src="{{ asset('images/svg/icono.svg') }}" />
                                </span>
                            </summary>
                            <p class="group-open:animate-fadeIn mt-3 text-neutral-600 font-outfitLight text-lg">
                                Etiam lacinia tortor sed nisi imperdiet, eu rhoncus felis semper.
                                Fusce venenatis magna vel fermentum feugiat. Integer ullamcorper mauris sit amet.
                            </p>
                        </details>
                    </div>

                    <div class="py-3 lg:py-5">
                        <details class="group bg-cardflip px-5 py-2 rounded-2xl">
                            <summary
                                class="flex cursor-pointer list-none items-center justify-between font-medium gap-10">
                                <span class="text-[20px] text-[#151515] font-outfitSemiBold text-xl">
                                    ¿Cuando podré ver los resultados?
                                </span>
                                <span class="transition group-open:rotate-180">
                                    <img src="{{ asset('images/svg/icono.svg') }}" />
                                </span>
                            </summary>
                            <p class="group-open:animate-fadeIn mt-3 text-neutral-600 font-outfitLight text-lg">
                                Etiam lacinia tortor sed nisi imperdiet, eu rhoncus felis semper.
                                Fusce venenatis magna vel fermentum feugiat. Integer ullamcorper mauris sit amet.
                            </p>
                        </details>
                    </div>


                    <div class="py-3 lg:py-5">
                        <details class="group bg-cardflip px-5 py-2 rounded-2xl">
                            <summary
                                class="flex cursor-pointer list-none items-center justify-between font-medium gap-10">
                                <span class="text-[20px] text-[#151515] font-outfitSemiBold text-xl">
                                    ¿Cuando podré ver los resultados?
                                </span>
                                <span class="transition group-open:rotate-180">
                                    <img src="{{ asset('images/svg/icono.svg') }}" />
                                </span>
                            </summary>
                            <p class="group-open:animate-fadeIn mt-3 text-neutral-600 font-outfitLight text-lg">
                                Etiam lacinia tortor sed nisi imperdiet, eu rhoncus felis semper.
                                Fusce venenatis magna vel fermentum feugiat. Integer ullamcorper mauris sit amet.
                            </p>
                        </details>
                    </div>


                    <div class="py-3 lg:py-5">
                        <details class="group bg-cardflip px-5 py-2 rounded-2xl">
                            <summary
                                class="flex cursor-pointer list-none items-center justify-between font-medium gap-10">
                                <span class="text-[20px] text-[#151515] font-outfitSemiBold text-xl">
                                    ¿Cuando podré ver los resultados?
                                </span>
                                <span class="transition group-open:rotate-180">
                                    <img src="{{ asset('images/svg/icono.svg') }}" />
                                </span>
                            </summary>
                            <p class="group-open:animate-fadeIn mt-3 text-neutral-600 font-outfitLight text-lg">
                                Etiam lacinia tortor sed nisi imperdiet, eu rhoncus felis semper.
                                Fusce venenatis magna vel fermentum feugiat. Integer ullamcorper mauris sit amet.
                            </p>
                        </details>
                    </div>
                </div>
            </div>
        </section> --}}
       
        <section class="py-12 lg:py-20 flex flex-col w-full gap-12 relative">
            <div class="w-11/12 mx-auto">
                <h2 class=" font-outfitSemiBold text-4xl lg:text-5xl leading-none  text-terciario">
                    Lo que piensan de <span class="text-primario font-jakartaExtraBoldItalic">PMD</span>
                </h2>
            </div>

            <div class="swiper testimonios flex flex-row w-full !px-[5%] !lg:pl-[5%]">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-16">
                            <div class="flex flex-col justify-center items-center  px-[5%]">

                                <video class="w-full h-[700px] border border-gray-200 rounded-3xl" controls>
                                    <source src="/docs/videos/flowbite.mp4" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>

                            </div>

                            <div class="flex flex-col gap-10 justify-center items-start w-[95%] lg:w-[85%]">

                                <h2 class="font-outfitSemiBold text-3xl  md:text-5xl leading-none  text-black  text-left">
                                    Donec molestie, urna scelerisque auctor bibendum, libero libero sollicitudin diam,
                                    et eleifend massa nisi vitae ipsum. In massa mauris, porttitor id eros et, ornare
                                    laoreet magna. Y sera designado<span class="text-primario font-jakartaExtraBoldItalic"> para
                                        ti!.</span>
                                </h2>
                                <div class="flex flex-col justify-start items-center">
                                    <div class="flex flex-row items-center gap-3">
                                        <img class="rounded-full w-20 h-20 object-cover"
                                            src="{{ asset('images/img/person_3.png') }}" />
                                        <div>
                                            <h3 class="text-lg font-outfitSemiBold">Carlos Sile</h3>
                                            <p class="text-base font-outfitLight">Representante Exclusivo Doulton Perú</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-16">
                            <div class="flex flex-col justify-center items-center  px-[5%]">

                                <video class="w-full h-[700px] border border-gray-200 rounded-3xl" controls>
                                    <source src="/docs/videos/flowbite.mp4" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>

                            </div>

                            <div class="flex flex-col gap-10 justify-center items-start w-[95%] lg:w-[85%]">

                                <h2 class="font-outfitSemiBold text-3xl  md:text-5xl leading-none  text-black  text-left">
                                    Donec molestie, urna scelerisque auctor bibendum, libero libero sollicitudin diam,
                                    et eleifend massa nisi vitae ipsum. In massa mauris, porttitor id eros et, ornare
                                    laoreet magna. Y sera designado<span class="text-primario font-jakartaExtraBoldItalic"> para
                                        ti!.</span>
                                </h2>
                                <div class="flex flex-col justify-start items-center">
                                    <div class="flex flex-row items-center gap-3">
                                        <img class="rounded-full w-20 h-20 object-cover"
                                            src="{{ asset('images/img/person_3.png') }}" />
                                        <div>
                                            <h3 class="text-lg font-outfitSemiBold">Carlos Silessss</h3>
                                            <p class="text-base font-outfitLight">Representante Exclusivo Doulton Perú</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-16">
                            <div class="flex flex-col justify-center items-center  px-[5%]">

                                <video class="w-full h-[700px] border border-gray-200 rounded-3xl" controls>
                                    <source src="/docs/videos/flowbite.mp4" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>

                            </div>

                            <div class="flex flex-col gap-10 justify-center items-start w-[95%] lg:w-[85%]">

                                <h2 class="font-outfitSemiBold text-3xl  md:text-5xl leading-none  text-black  text-left">
                                    Donec molestie, urna scelerisque auctor bibendum, libero libero sollicitudin diam,
                                    et eleifend massa nisi vitae ipsum. In massa mauris, porttitor id eros et, ornare
                                    laoreet magna. Y sera designado<span class="text-primario font-jakartaExtraBoldItalic"> para
                                    ti!.</span>
                                </h2>
                                <div class="flex flex-col justify-start items-center">
                                    <div class="flex flex-row items-center gap-3">
                                        <img class="rounded-full w-20 h-20 object-cover"
                                            src="{{ asset('images/img/person_3.png') }}" />
                                        <div>
                                            <h3 class="text-lg font-outfitSemiBold">Carlos Silessss</h3>
                                            <p class="text-base font-outfitLight">Representante Exclusivo Doulton Perú</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="custom-swiper-buttons absolute bottom-0">
                <div class="flex flex-row gap5 w-24">
                    <div class="swiper-button-prev left-0"></div>
                    <div class="swiper-button-next left-28"></div>
                </div>
            </div>
        </section>



        <section class="flex flex-col justify-center items-center w-11/12 mx-auto rounded-[35px] py-20 bg-[#110101] gap-6 mb-16 lg:mb-24 px-5 bg-center object-left-top bg-cover bg-no-repeat" style="background-image: url('{{ asset('images/img/textura4.webp') }}');">
            
            <h2 class="font-outfitSemiBold  text-4xl leading-none md:text-5xl  text-white max-w-3xl  text-center">
                ¿Listo para convertirte en un líder de la <span class="text-primario font-jakartaExtraBoldItalic">Industria</span>
            </h2>
            <p class="text-lg font-outfitExtraLight text-white text-center max-w-3xl">Etiam lacinia tortor sed nisi imperdiet, eu rhoncus
                felis semper. Fusce venenatis magna vel fermentum feugiat. Integer ullamcorper mauris sit amet.</p>

            <div class="flex flex-col justify-start items-center w-60 ">
                <a target="_blank" href="https://api.whatsapp.com/send?phone=51123456789&text=hola" rel="noopener"
                    class="btn-secondary">Solicitar Presupuesto</a>
            </div>       
        </section>

        <section class="z-10 col-span-2 pt-12 lg:pt-28">
            <div class="px-1 py-2 h-20 lg:-mt-20 bg-cardflip">
                <div x-data="{}" x-init="$nextTick(() => {
                    let ul = $refs.logos;
                    ul.insertAdjacentHTML('afterend', ul.outerHTML);
                    ul.nextSibling.setAttribute('aria-hidden', 'true');
                })"
                    class="px-[5%] w-full inline-flex flex-nowrap overflow-hidden [mask-image:_linear-gradient(to_right,transparent_0,_black_40px,_black_calc(100%-40px),transparent_100%)] md:[mask-image:_linear-gradient(to_right,transparent_0,_black_100px,_black_calc(100%-100px),transparent_100%)]">
                    <ul x-ref="logos"
                        class="h-16 flex flex-row justify-between items-center  [&_li]:mx-10   animate-infinite-scroll">

                        <li class="w-32 py-8"><img class="object-contain" src="{{ asset('images/svg/evernote.svg') }}" /></li>
                        <li class="w-32 py-8"><img class="object-contain" src="{{ asset('images/svg/adobe.svg') }}" /></li>
                        <li class="w-32 py-8"><img class="object-contain" src="{{ asset('images/svg/amazon.svg') }}" /></li>
                        <li class="w-32 py-8"><img class="object-contain" src="{{ asset('images/svg/paypal.svg') }}" /></li>
                        <li class="w-32 py-8"><img class="object-contain" src="{{ asset('images/svg/spotif.svg') }}" /></li>

                    </ul>

                    <ul x-ref="logos"
                        class="h-16 flex flex-row justify-between items-center  [&_li]:mx-10   animate-infinite-scroll"
                        aria-hidden="true">

                        <li class="w-32 py-8"><img class="object-contain" src="{{ asset('images/svg/evernote.svg') }}" /></li>
                        <li class="w-32 py-8"><img class="object-contain" src="{{ asset('images/svg/adobe.svg') }}" /></li>
                        <li class="w-32 py-8"><img class="object-contain" src="{{ asset('images/svg/amazon.svg') }}" /></li>
                        <li class="w-32 py-8"><img class="object-contain" src="{{ asset('images/svg/paypal.svg') }}" /></li>
                        <li class="w-32 py-8"><img class="object-contain" src="{{ asset('images/svg/spotif.svg') }}" /></li>

                    </ul>
                </div>
            </div>
        </section>

    </main>

    <div id="default-modal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        Políticas de privacidad
                    </h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-hide="default-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Cerrar modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-4 md:p-5 space-y-4">
                    <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                        With less than a month to go before the European Union enacts new consumer privacy laws for its
                        citizens, companies around the world are updating their terms of service agreements to comply.
                    </p>
                    <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                        The European Union’s General Data Protection Regulation (G.D.P.R.) goes into effect on May 25 and is
                        meant to ensure a common set of data rights in the European Union. It requires organizations to
                        notify users as soon as possible of high-risk data breaches that could personally affect them.
                    </p>
                </div>
                <!-- Modal footer -->
                <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                    <button data-modal-hide="default-modal" type="button"
                        class="text-white bg-terciario p-3 rounded-lg">Aceptar</button>
                </div>
            </div>
        </div>
    </div>



@section('scripts_improtados')
    <script>
        /*  */
        var swiper = new Swiper(".testimonios", {
            slidesPerView: 1,
            spaceBetween: -30,
            loop: true,
            grabCursor: true,
            centeredSlides: false,
            initialSlide: 0,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            pagination: {
                el: ".swiper-pagination",
            },
            breakpoints: {
                0: {
                    slidesPerView: 1,
                    spaceBetween: 30,
                },
                768: {
                    slidesPerView: 1,
                    spaceBetween: 30,
                },
                1024: {
                    slidesPerView: 1,
                },
            },
        });
        /*  */
        var swiper = new Swiper(".logos", {
            slidesPerView: 4,
            spaceBetween: 30,
            centeredSlides: false,
            initialSlide: 0,
            loop: true,
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
                    slidesPerView: 4,
                    centeredSlides: false,
                    autoplay: false,
                },
            },
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const meetingContainer = document.getElementById('meeting-container');
            const callContainer = document.getElementById('call-container');
            const inputs = document.querySelectorAll('input[name="type_meet"]');

            inputs.forEach(input => {
                input.addEventListener('change', function() {
                    if (this.checked && this.value === 'Programar una reunión') {
                        meetingContainer.classList.add('bg-primario');
                        meetingContainer.classList.remove('bg-[#FFFFFF1F]');
                        callContainer.classList.add('bg-[#FFFFFF1F]');
                        callContainer.classList.remove('bg-primario');
                    } else if (this.checked && this.value === 'Programar una llamada') {
                        callContainer.classList.add('bg-primario');
                        callContainer.classList.remove('bg-[#FFFFFF1F]');
                        meetingContainer.classList.add('bg-[#FFFFFF1F]');
                        meetingContainer.classList.remove('bg-primario');
                    }
                });
            });
        });
    </script>
@stop

@stop
