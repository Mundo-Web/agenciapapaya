@extends('components.public.matrix')

@section('css_improtados')
    <style>
        @font-face {
            font-family: "helveticaBold";
            src: url("./fonts/helveticaneueltprobd-webfont.woff") format("woff");
        }

        @font-face {
            font-family: "helveticaLight";
            src: url("./fonts/helveticaneueltprolt-webfont.woff") format("woff");
        }

        @font-face {
            font-family: "helveticaMedium";
            src: url("./fonts/helveticaneueltpromd-webfont.woff") format("woff");
        }

        .custom-swiper-buttons .swiper-button-prev:after {
            background-image: url("./images/svg/image_35.svg");
            transition: background-image 0.2s ease-in-out;
        }

        .custom-swiper-buttons .swiper-button-prev:hover:after {
            background-image: url("./images/svg/image_37.svg");
        }

        .custom-swiper-buttons .swiper-button-next:after {
            background-image: url("./images/svg/image_36.svg");
            transition: background-image 0.2s ease-in-out;
        }

        .custom-swiper-buttons .swiper-button-next:hover:after {
            background-image: url("./images/svg/image_39.svg");
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

        #botoncotizar{
            display: none;
        }
    </style>

@stop

@section('content')

<section class="relative">
    <img src="{{asset('images/img/image_16.png')}}" alt="hidromec agricola"
        class="w-full h-[600px] object-cover hidden md:block" />

    <img src="{{asset('images/img/image_16.png')}}" alt="hidromec agricola"
        class="w-full h-[380px] object-cover block md:hidden" />

    <div
        class="absolute transform -translate-x-1/2 -translate-y-1/2 left-1/2 top-0 lg:top-1/2 w-11/12 mx-auto pt-[350px] sm:pt-[250px] md:pt-[500px] lg:pt-0">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 md:gap-24">
            <div class="flex flex-col justify-center items-start gap-2 w-full lg:max-w-[700px]">
               

                <div class="flex flex-col gap-5 items-start">
                    <h1 class="font-helveticaBold text-text46 md:text-text64 leading-none  text-white">
                       Gracias por escribirnos. Nos pondremos en contacto
                    </h1>
                  
                </div>

                
                <a
                 href="{{route('index')}}"
                 class="bg-secundario tracking-wide text-white text-text16 rounded-xl py-3 px-10 w-full md:w-auto text-center font-helveticaBold"
                 >Regresar</a
               >
            </div>
        </div>
    </div>
</section>

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
            let modal = document.getElementById("default-modal");
            let btn = document.getElementById("open-modal");
            let btn2 = document.getElementById("open-modal2");
            let closeButtons = document.querySelectorAll("[data-modal-hide='default-modal']");
            let body = document.body;

            btn.onclick = function() {
                modal.classList.remove("hidden");
                modal.classList.add("flex");
                body.classList.add("modal-open");
            }

            btn2.onclick = function() {
                modal.classList.remove("hidden");
                modal.classList.add("flex");
                body.classList.add("modal-open");
            }

            closeButtons.forEach(button => {
                button.onclick = function() {
                    modal.classList.remove("flex");
                    modal.classList.add("hidden");
                    body.classList.remove("modal-open");
                }
            });

            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.classList.remove("flex");
                    modal.classList.add("hidden");
                    body.classList.remove("modal-open");
                }
            }
        </script>
@stop

@stop