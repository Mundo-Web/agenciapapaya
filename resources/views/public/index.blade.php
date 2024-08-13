@extends('components.public.matrix')

@section('css_improtados')
  <style>
    @font-face {
      font-family: "jakartaExtraBold";
      src: url("/fonts/jakarta/PlusJakartaSans-ExtraBold.woff") format("woff");
    }

    @font-face {
      font-family: "jakartaBold";
      src: url("/fonts/jakarta/PlusJakartaSans-Bold.woff") format("woff");
    }

    @font-face {
      font-family: "jakartaSemiBold";
      src: url("/fonts/jakarta/PlusJakartaSans-SemiBold.woff") format("woff");
    }

    @font-face {
      font-family: "jakartaMedium";
      src: url("/fonts/jakarta/PlusJakartaSans-Medium.woff") format("woff");
    }

    @font-face {
      font-family: "jakartaRegular";
      src: url("/fonts/jakarta/PlusJakartaSans-Regular.woff") format("woff");
    }

    @font-face {
      font-family: "jakartaExtraBoldItalic";
      src: url("/fonts/jakarta/PlusJakartaSans-ExtraBoldItalic.woff") format("woff");
    }

    @font-face {
      font-family: "outfitExtraBold";
      src: url("/fonts/outfit/Outfit-ExtraBold.woff") format("woff");
    }

    @font-face {
      font-family: "outfitBold";
      src: url("/fonts/outfit/Outfit-Bold.woff") format("woff");
    }

    @font-face {
      font-family: "outfitSemiBold";
      src: url("/fonts/outfit/Outfit-SemiBold.woff") format("woff");
    }

    @font-face {
      font-family: "outfitMedium";
      src: url("/fonts/outfit/Outfit-Medium.woff") format("woff");
    }

    @font-face {
      font-family: "outfitRegular";
      src: url("/fonts/outfit/Outfit-Regular.woff") format("woff");
    }

    @font-face {
      font-family: "outfitLight";
      src: url("/fonts/outfit/Outfit-Light.woff") format("woff");
    }

    @font-face {
      font-family: "outfitExtraLight";
      src: url("/fonts/outfit/Outfit-ExtraLight.woff") format("woff");
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

@section('headseo')
  {!! SEO::generate() !!}
@stop

@section('content')

  <main class="-mt-20">

    <section class="gap-20  bg-top object-right-top bg-cover bg-no-repeat pt-16"
      style="background-image: url('{{ asset('images/img/textura3.webp') }}');">

      <div class="flex flex-col justify-center items-center gap-2 w-full ">
        <div class="flex flex-col gap-10 items-center py-10 px-[2%]">
          <h2 class="font-outfitSemiBold  text-4xl leading-none lg:text-primary  text-white max-w-4xl  text-center">
            Multiplica tus ventas B2B y B2C y potencia<span
              class="text-primario font-jakartaExtraBoldItalic"> tu éxito empresarial.</span>
          </h2>
          <p class="text-white text-xl tracking-wider text-center font-outfitLight max-w-4xl">
            Transforma tu negocio con estrategias efectivas y resultados visibles. 
            Nuestra agencia está lista para multiplicar tus ingresos.
          </p>
        </div>
      </div>
      {{-- style="background-image: url('{{ asset('images/img/personalanding.png') }}');" --}}
      <div
        class="grid grid-cols-1 lg:grid-cols-2 w-full pl-[5%] lg:pl-[5%] pr-[5%] gap-5 lg:gap-24 object-left bg-cover lg:bg-contain bg-no-repeat"
        >
        <div class="flex flex-col gap-6 md:gap-6 justify-end items-end  ">
          <img class="object-left lg:h-[600px] object-contain hidden lg:block" src="{{ asset('images/img/businesman.png') }}" />
        </div>

        <div class="flex flex-col gap-10 justify-start items-start mt-6 lg:mt-0  pb-[10%] xl:px-[8%]">
          <div class="bg-[#080101] p-[8%]  flex flex-col items-center justify-start w-full rounded-3xl">
            <div class="bg-transparent w-full ">
              <h2 class="font-outfitSemiBold  text-3xl leading-tight text-white max-w-4xl  text-left">
                ¿Estás listo para convertirte en el líder de la <span
                  class="text-primario font-jakartaExtraBoldItalic">industria?</span>
              </h2>
              <form class="text-gray-600 font-outfitRegular gap-6 bg-transparent" id="formContactos">
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
                  <input id="contact_name" name="contact_name" type="text" required 
                    class="bg-white  mt-1 block w-full border-0 border-none text-base rounded-xl p-3  focus:ring-0 focus:border-b-2 focus:border-gray-500"
                    placeholder="Nombre">
                  {{-- <span class="absolute inset-y-0 right-0 flex items-center pr-3 text-verdecreditomype text-text14">Obligatorio</span> --}}
                </div>

                <div class="flex flex-col md:flex-row md:gap-4">

                  <div class="relative mb-4 w-full">
                    <input id="contact_email" name="contact_email" type="email" 
                      class="bg-white mt-1 block w-full border-0 text-base  border-none rounded-xl p-3  focus:ring-0 focus:border-b-2 focus:border-gray-500"
                      placeholder="E-mail">
                    {{-- <span class="absolute inset-y-0 right-0 flex items-center pr-3 text-verdecreditomype text-text14"></span> --}}
                  </div>

                  <div class="relative mb-4 w-full">
                    <input id="contact_phone" name="contact_phone" type="text" ¿
                      class="bg-white mt-1 block w-full border-0  text-base border-none rounded-xl p-3  focus:ring-0 focus:border-b-2 focus:border-gray-500"
                      placeholder="Número de celular">
                    {{-- <span class="absolute inset-y-0 right-0 flex items-center pr-3 text-verdecreditomype text-text14"></span> --}}
                  </div>

                </div>


                {{-- <div class="relative mb-5">

                  <div class="relative mb-4 w-full">
                    <input id="contact_position" name="job" type="job" style="font-size: 17px"
                      class="bg-white mt-1 block w-full border-0  border-none rounded-xl p-3 focus:ring-0 focus:border-b-2 focus:border-gray-500"
                      placeholder="Puesto laboral">
                   
                  </div>

                  <div class="relative mb-4 w-full">
                    <input id="tradename" name="business" type="text" style="font-size: 17px"
                      class="bg-white mt-1 block w-full border-0  border-none rounded-xl p-3  focus:ring-0 focus:border-b-2 focus:border-gray-500"
                      placeholder="Empresa">
                    
                  </div>

                  <select id="sector_business" name="sector_business" type="text" required style="font-size: 17px"
                    class="bg-white text-gray-600  mt-1 block w-full border-0 border-none rounded-xl p-3  focus:ring-0 focus:border-b-2 focus:border-gray-500"
                    >
                    <option value="">Seleccione el rubro de su empresa</option>
                    <option value="Rubro">Rubro</option>
                    <option value="Comercial">Comercial</option>
                    <option value="Industrial">Industrial</option>
                    <option value="Inmobiliario">Inmobiliario</option>
                    <option value="Otros">Otros</option>

                  </select>

                </div> --}}

                <div class="relative mb-5">
                  <select id="workers" name="workers" type="text" required 
                    class="bg-white text-gray-600 text-base  mt-1 block w-full border-0 border-none rounded-xl p-3  focus:ring-0 focus:border-b-2 focus:border-gray-500"
                    placeholder="Nombre">
                    <option value="">¿Nro. trabajadores en tu empresa?</option>
                    <option value="1 a 2 Trabajadores">1 a 2 Trabajadores</option>
                    <option value="3 a 5 Trabajadores">3 a 5 Trabajadores</option>
                    <option value="6 a 10 Trabajadores">6 a 10 Trabajadores</option>
                    <option value="10 a más Trabajadores">10 a más Trabajadores</option>

                  </select>

                </div>


                <div class="relative mb-4">
                  <textarea id="message" name="message" style="height: auto; "
                    class="min-h-28 lg:min-h-14 tracking-tight text-base placeholder:text-base bg-white mt-1 block w-full border-0  border-none rounded-xl p-3 pr-24 focus:ring-0 focus:border-b-2 focus:border-gray-500"
                    placeholder="Necesito..."></textarea>
                  {{-- <span class="absolute inset-y-0 right-0 flex items-center pr-3 text-verdecreditomype text-text14"></span> --}}
                </div>

                <input type="hidden" name="client_width" id="anchodispositivo">
                <input type="hidden" name="client_height" id="largodispositivo">
                <input type="hidden" name="client_latitude" id="latitud">
                <input type="hidden" name="client_longitude" id="longitud">
                <input type="hidden" name="client_system" id="sistema">
                <input type="hidden" name="source" id="source" value="Pauta">
                <input type="hidden" name="origin" id="llegade" value="Pauta">
                <input type="hidden" name="triggered_by" id="triggered"
                value="Landing Papaya/Formulario">
                <div class="flex flex-col justify-center items-end">
                  
                  <button id='procesarSolicitud' rel="noopener" class="btn-secondary">Enviar solicitud</button>
                </div>
               
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

    <section class="pt-10 pb-12  lg:py-20 flex flex-col w-full gap-12 relative">
      <div class="w-11/12 mx-auto">
        <h2 class=" font-outfitSemiBold text-4xl lg:text-5xl leading-none  text-terciario">
          Casos de  <span class="text-primario font-jakartaExtraBoldItalic">Éxito</span>
        </h2>
      </div>

      <div class="swiper testimonios flex flex-row w-full !px-[5%] !lg:pl-[5%]">
        <div class="swiper-wrapper">
          <div class="swiper-slide">

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-16">
              <div class="flex flex-col justify-center items-center  px-0 lg:px-[5%]">
                <div class="w-full h-[500px] lg:h-[700px] border border-gray-200 rounded-3xl overflow-hidden relative bg-cover bg-center" style="background-image: url('{{ asset('images/img/rimbocare.png') }}');">
                  <div class="absolute inset-0 flex items-center justify-center disparo bg-opacity-50 cursor-pointer" onclick="showVideo(this)">
                    <button class="text-white text-2xl"><img class="w-16 hover:animate-jump hover:animate-once hover:animate-duration-1000" src="{{ asset('images/svg/iconoplayblanco.svg') }}" /></button>
                  </div>
                  <iframe id="videoIframe" class="videoIframe w-full h-full hidden" src="https://www.youtube.com/embed/7cdVdtrVUls" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
              </div>

              <div class="flex flex-col gap-10 justify-center items-start w-[95%] lg:w-[85%]">
                <h2 class="font-outfitSemiBold text-3xl  md:text-5xl leading-none  text-black  text-left">
                  "Nuestras ventas aumentaron un 400% gracias al método Papaya.
                  La calidad del contenido más las estrategias innovadoras<span class="text-primario font-jakartaExtraBoldItalic"> nos 
                    permitieron crecer muy rápido."</span>
                </h2>
                <div class="flex flex-col justify-start items-center">
                  <div class="flex flex-row items-center gap-3">
                    <img class="rounded-full w-20 h-20 object-cover" src="{{ asset('images/img/rimbocareuser.png') }}" />
                    <div>
                      <h3 class="text-lg font-outfitSemiBold">Elizabeth Ponce</h3>
                      <p class="text-base font-outfitLight">CO-Founder & CEO Rimboccare</p>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>

          <div class="swiper-slide">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-16">
              <div class="flex flex-col justify-center items-center  px-[5%]">
                <div class="w-full h-[500px] lg:h-[700px] border border-gray-200 rounded-3xl overflow-hidden relative bg-cover bg-center" style="background-image: url('{{ asset('images/img/coverprime.png') }}');">
                  <div class="absolute inset-0 flex items-center justify-center disparo bg-opacity-50 cursor-pointer" onclick="showVideo(this)">
                    <button class="text-white text-2xl"><img class="w-16 hover:animate-jump hover:animate-once hover:animate-duration-1000" src="{{ asset('images/svg/iconoplayblanco.svg') }}" /></button>
                  </div>
                  <iframe id="videoIframe" class="videoIframe w-full h-full hidden" src="https://www.youtube.com/embed/Q5_ALBh8Qe4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
              </div>

              <div class="flex flex-col gap-10 justify-center items-start w-[95%] lg:w-[85%]">
                <h2 class="font-outfitSemiBold text-2xl  md:text-4xl leading-none  text-black  text-left">
                  "Trabajar con agencia papaya trajo un impacto realmente positivo a la empresa,
                   logrando una mejora en la imagen de la marca, permitiendo obtener más clientes y mejorar
                  <span class="text-primario font-jakartaExtraBoldItalic"> nuestra rentabilidad."</span>
                </h2>
                <div class="flex flex-col justify-start items-center">
                  <div class="flex flex-row items-center gap-3">
                    <img class="rounded-full w-20 h-20 object-cover" src="{{ asset('images/img/coverprimeuser.png') }}" />
                    <div>
                      <h3 class="text-lg font-outfitSemiBold">Wendy Mendoza</h3>
                      <p class="text-base font-outfitLight">Grte. de Marketing Cover Prime</p>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>

          {{-- <div class="swiper-slide">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-16">
              <div class="flex flex-col justify-center items-center  px-[5%]">
                <div class="w-full h-[500px] lg:h-[700px] border border-gray-200 rounded-3xl overflow-hidden relative bg-cover bg-center" style="background-image: url('{{ asset('images/img/donchurro.png') }}');">
                  <div class="absolute inset-0 flex items-center justify-center disparo bg-opacity-50 cursor-pointer" onclick="showVideo(this)">
                    <button class="text-white text-2xl"><img class="w-16 hover:animate-jump hover:animate-once hover:animate-duration-1000" src="{{ asset('images/svg/iconoplayblanco.svg') }}" /></button>
                  </div>
                  <iframe id="videoIframe" class="videoIframe w-full h-full hidden" src="https://www.youtube.com/embed/HkwE_sflWsM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
              </div>

              <div class="flex flex-col gap-10 justify-center items-start w-[95%] lg:w-[85%]">
                <h2 class="font-outfitSemiBold text-3xl  md:text-5xl leading-none  text-black  text-left">
                  "Logramos mejorar nuestro contenido, nuestra planificación y nuestras ventas con papaya. 
                  De la mano de un equipo de trabajo con el que interactuamos constantemente, nos mantenemos 
                  informados y 
                  <span class="text-primario font-jakartaExtraBoldItalic">
                    alineados con los objetivos."</span>
                </h2>
                <div class="flex flex-col justify-start items-center">
                  <div class="flex flex-row items-center gap-3">
                    <img class="rounded-full w-20 h-20 object-cover" src="{{ asset('images/img/donchurrouser.png') }}" />
                    <div>
                      <h3 class="text-lg font-outfitSemiBold">Jennifer</h3>
                      <p class="text-base font-outfitLight">Fundadora de Don Churro</p>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div> --}}

          <div class="swiper-slide">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-16">
              <div class="flex flex-col justify-center items-center  px-[5%]">
                <div class="w-full h-[500px] lg:h-[700px] border border-gray-200 rounded-3xl overflow-hidden relative bg-cover bg-center" style="background-image: url('{{ asset('images/img/doulton.png') }}');">
                  <div class="absolute inset-0 flex items-center justify-center disparo bg-opacity-50 cursor-pointer" onclick="showVideo(this)">
                    <button class="text-white text-2xl"><img class="w-16 hover:animate-jump hover:animate-once hover:animate-duration-1000" src="{{ asset('images/svg/iconoplayblanco.svg') }}" /></button>
                  </div>
                  <iframe id="videoIframe" class="videoIframe w-full h-full hidden" src="https://www.youtube.com/embed/WLiUj_mLBYg" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
              </div>

              <div class="flex flex-col gap-10 justify-center items-start w-[95%] lg:w-[85%]">
                <h2 class="font-outfitSemiBold text-3xl  md:text-5xl leading-none  text-black  text-left">
                  "Incrementamos en un 35% nuestras ventas mensuales. Hoy vemos un gran crecimiento en 
                  el alcance 
                  <span class="text-primario font-jakartaExtraBoldItalic">
                    y la interacción."</span>
                </h2>
                <div class="flex flex-col justify-start items-center">
                  <div class="flex flex-row items-center gap-3">
                    <img class="rounded-full w-20 h-20 object-cover" src="{{ asset('images/img/doultonuser.png') }}" />
                    <div>
                      <h3 class="text-lg font-outfitSemiBold">Carlos Siles</h3>
                      <p class="text-base font-outfitLight">Representante Exclusivo Doulton</p>
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



    <section
      class="flex flex-col justify-center items-center w-11/12 mx-auto rounded-[35px] py-20 bg-[#110101] gap-6 mb-16 lg:mb-24 px-5 bg-center object-left-top bg-cover bg-no-repeat"
      style="background-image: url('{{ asset('images/img/textura4.webp') }}');">

      <h2 class="font-outfitSemiBold  text-4xl leading-none md:text-5xl  text-white max-w-3xl  text-center">
        ¿Listo para convertirte en un líder de la <span
          class="text-primario font-jakartaExtraBoldItalic">Industria?</span>
      </h2>
      <p class="text-lg font-outfitExtraLight text-white text-center max-w-3xl">Cuéntanos cómo podemos ayudarte. 
        Tenemos una eficaz metodología y casos de éxito comprobados</p>

      <div class="flex flex-col justify-start items-center w-60 ">
        <a target="_blank" href="https://wa.link/o8prqi" rel="noopener"
          class="btn-secondary">Conversemos</a>
      </div>
    </section>

  



     {{-- Seccion Blog --}}
     @if ($blogs->count() > 0)
     <section class="w-full px-[5%] pb-7 lg:pb-14" data-aos="fade-up">
          <div class="flex flex-col md:flex-row justify-between w-full gap-3">
            <h2 class=" font-outfitSemiBold text-4xl lg:text-5xl leading-none  text-terciario">
              Últimas <span class="text-primario font-jakartaExtraBoldItalic">Publicaciones</span>
            </h2>
            <a href="/blog/0" class="flex items-center text-base font-jakartaSemiBold font-semibold text-primario">Ver todas
              las publicaciones &rarr;</a>
          </div>
          <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 mt-14 gap-10 sm:gap-5">
            @foreach ($blogs as $post)
              <x-blog.container-post :post="$post" />
            @endforeach
          </div>
        </section>
      @endif


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
  
              <li class="w-32 py-8"><img class="object-contain" src="{{ asset('images/img/logo1p.png') }}" /></li>
              <li class="w-32 py-8"><img class="object-contain" src="{{ asset('images/img/logo2p.png') }}" /></li>
              <li class="w-32 py-8"><img class="object-contain" src="{{ asset('images/img/logo3p.png') }}" /></li>
              <li class="w-32 py-8"><img class="object-contain" src="{{ asset('images/img/logo4p.png') }}" /></li>
              <li class="w-32 py-8"><img class="object-contain" src="{{ asset('images/img/logo5p.png') }}" /></li>
              <li class="w-32 py-8"><img class="object-contain" src="{{ asset('images/img/logo6p.png') }}" /></li>
              <li class="w-32 py-8"><img class="object-contain" src="{{ asset('images/img/logo7p.png') }}" /></li>
              <li class="w-32 py-8"><img class="object-contain" src="{{ asset('images/img/logo8p.png') }}" /></li>
              <li class="w-32 py-8"><img class="object-contain" src="{{ asset('images/img/logo9p.png') }}" /></li>
              <li class="w-32 py-8"><img class="object-contain" src="{{ asset('images/img/logo10p.png') }}" /></li>
              <li class="w-32 py-8"><img class="object-contain" src="{{ asset('images/img/logo11p.png') }}" /></li>
              <li class="w-32 py-8"><img class="object-contain" src="{{ asset('images/img/logo12p.png') }}" /></li>
              <li class="w-32 py-8"><img class="object-contain" src="{{ asset('images/img/logo13p.png') }}" /></li>
  
            </ul>
  
            <ul x-ref="logos"
              class="h-16 flex flex-row justify-between items-center  [&_li]:mx-10   animate-infinite-scroll"
              aria-hidden="true">
  
              <li class="w-32 py-8"><img class="object-contain" src="{{ asset('images/img/logo1p.png') }}" /></li>
              <li class="w-32 py-8"><img class="object-contain" src="{{ asset('images/img/logo2p.png') }}" /></li>
              <li class="w-32 py-8"><img class="object-contain" src="{{ asset('images/img/logo3p.png') }}" /></li>
              <li class="w-32 py-8"><img class="object-contain" src="{{ asset('images/img/logo4p.png') }}" /></li>
              <li class="w-32 py-8"><img class="object-contain" src="{{ asset('images/img/logo5p.png') }}" /></li>
              <li class="w-32 py-8"><img class="object-contain" src="{{ asset('images/img/logo6p.png') }}" /></li>
              <li class="w-32 py-8"><img class="object-contain" src="{{ asset('images/img/logo7p.png') }}" /></li>
              <li class="w-32 py-8"><img class="object-contain" src="{{ asset('images/img/logo8p.png') }}" /></li>
              <li class="w-32 py-8"><img class="object-contain" src="{{ asset('images/img/logo9p.png') }}" /></li>
              <li class="w-32 py-8"><img class="object-contain" src="{{ asset('images/img/logo10p.png') }}" /></li>
              <li class="w-32 py-8"><img class="object-contain" src="{{ asset('images/img/logo11p.png') }}" /></li>
              <li class="w-32 py-8"><img class="object-contain" src="{{ asset('images/img/logo12p.png') }}" /></li>
              <li class="w-32 py-8"><img class="object-contain" src="{{ asset('images/img/logo13p.png') }}" /></li>
  
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
      on: {
          slideChange: function() {
              // Detener el video cuando se desliza a otro slide
              let iframes = document.querySelectorAll('.videoIframe');
              iframes.forEach(iframe => {
                  let src = iframe.src;
                  iframe.src = src.replace("?autoplay=1", ""); // Remueve el autoplay
                  iframe.classList.add('hidden');
              });
              // Mostrar los botones de play
              let playButtons = document.querySelectorAll('.disparo');
              playButtons.forEach(button => {
                  button.style.display = 'flex';
              });
          }
      }
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
  
  <script>
    // Obtener información del navegador y del sistema operativo
    const platform = navigator.platform;
    document.getElementById('sistema').value = platform;
    document.getElementById('sistema_wsp').value = platform;

    // Obtener la geolocalización del usuario (si se permite)
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function(position) {
            document.getElementById('latitud').value = position.coords.latitude;
            document.getElementById('longitud').value = position.coords.longitude;
            document.getElementById('latitud_wsp').value = position.coords.latitude;
            document.getElementById('longitud_Wsp').value = position.coords.longitude;
        });
    }

    // Obtener la resolución de la pantalla
    const screenWidth = window.screen.width;
    const screenHeight = window.screen.height;
    document.getElementById('anchodispositivo').value = screenWidth;
    document.getElementById('largodispositivo').value = screenHeight;
    document.getElementById('anchodispositivo_wsp').value = screenWidth;
    document.getElementById('largodispositivo_wsp').value = screenHeight;
</script>

<script>
  function showVideo(element) {
    const slide = element.closest('.swiper-slide');
    const videoIframe = slide.querySelector('.videoIframe');
    videoIframe.classList.remove('hidden');
    videoIframe.src += "?autoplay=1";
    element.style.display = 'none';
  }
</script>

<script>
  function getParameterByName(name) {
      name = name.replace(/[\[\]]/g, '\\$&');
      let url = window.location.href;

      let regex = new RegExp('[?&]' + name + '(=([^&#]*)|&|#|$)');
      let results = regex.exec(url);
      if (!results) return null;
      if (!results[2]) return '';
      return decodeURIComponent(results[2].replace(/\+/g, ' '));
  }
  let utmSource = getParameterByName('utm_source');
  
  if (utmSource) {
      let sourceInputWsp = document.getElementById('source_wsp');
      let sourceInput = document.getElementById('source');
    
      let sourceInputWspOrigin = document.getElementById('llegade_wsp');
      let sourceInputOrigin = document.getElementById('llegade');
      
      let currentValue = sourceInput.value;
      let currentValueWsp = sourceInputWsp.value;

      let currentValueOrigin = sourceInputOrigin.value;
      let currentValueWspOrigin = sourceInputWspOrigin.value;


      let nuevo = utmSource;
      let nuevoWsp = utmSource;


      sourceInput.value = nuevo;
      sourceInputWsp.value = nuevoWsp;

      sourceInputOrigin.value = nuevo;
      sourceInputWspOrigin.value = nuevoWsp;
      
      console.log(sourceInput.value);
      console.log(sourceInputWsp.value);
  }
</script>

<script>
  document.getElementById('whatsapp-toggle').addEventListener('click', function() {
      var chatBox = document.getElementById('whatsapp-chat');
      if (chatBox.classList.contains('hidden')) {
          chatBox.classList.remove('hidden');
          chatBox.classList.add('animate-fade-up');
      } else {
          chatBox.classList.add('hidden');
          chatBox.classList.remove('animate-fade-up');
      }
  });
</script>

<script>
  $('#procesarSolicitud').on('click', function() {
      console.log('precionando btn envio');
      event.preventDefault();
      let formulario = $('#formContactos').serialize()
      console.log(formulario);   
      Swal.fire({

          title: 'Procesando información',
          html: `Enviando... 
        <div class="max-w-2xl mx-auto overflow-hidden flex justify-center items-center mt-4 ">
            <div role="status">
                <svg aria-hidden="true" class="w-8 h-8 text-gray-200 animate-spin dark:text-gray-600 fill-blue-600" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/>
                    <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"/>
                </svg>
                
            </div>
        </div>
        `,
          allowOutsideClick: false,
          onBeforeOpen: () => {
              Swal.showLoading();
          }
      });

      fetch("{{ route('save.crm') }}", {
              method: 'POST',
              headers: {
                  'Content-Type': 'application/json'
              },
              body: JSON.stringify({
                  _token: $('[name="_token"]').val(),
                  contact_name: $('[name="contact_name"]').val(),
                  contact_email: $('[name="contact_email"]').val(),
                  contact_phone: `51${$('[name="contact_phone"]').val()}`,
                  // tradename: $('[name="name"]').val(),
                  // sector: $('[name="sector"]').val(),
                  workers: $('#workers').val(),
                  // web_url: $('[name="web_url"]').val(),
                  source: $('[name="source"]').val(),
                  origin: $('[name="origin"]').val(),
                  client_width: $('[name="client_width"]').val(),
                  client_height: $('[name="client_height"]').val(),
                  client_latitude: $('[name="client_latitude"]').val(),
                  client_longitude: $('[name="client_longitude"]').val(),
                  client_system: $('[name="client_system"]').val(),
                  message: $('[name="message"]').val(),
                  triggered_by: $('[name="triggered_by"]').val()
              })
          })
          .then(async res => {
              const data = await res.json()
              if (!res.ok) throw new Error(data?.message ?? 'Ocurrio un error inesperado')
              return data
          })
          .then(response => {
              Swal.close();
              Swal.fire({
                  title: response.message,
                  icon: "success",
              });

              $('#formContactos')[0].reset();

              window.location.href = 'http://landing.agenciapapaya.pe/#formularioListo';
          }).catch((error) => {
              Swal.close();
              Swal.fire({
                  title: error,
                  icon: "error",
              });
          })

  })
</script>

<script>
  $('#procesarSolicitud2').on('click', function() {
      event.preventDefault();
      console.log('precionando btn envio');

      let formulario = $('#dataWhatsapp').serialize()

      fetch("{{ route('save.crm') }}", {
              method: 'POST',
              headers: {
                  'Content-Type': 'application/json'
              },
              body: JSON.stringify({
                  _token: $('[name="_token"]').val(),
                  contact_name: $('[name="contact_name_wsp"]').val(),
                  contact_email: $('[name="contact_email_wsp"]').val(),
                  contact_phone: `51${$('[name="contact_phone_wsp"]').val()}`,
                  tradename: $('[name="name_wsp"]').val(),
                  sector: $('[name="sector_wsp"]').val(),
                  web_url: $('[name="web_url_wsp"]').val(),
                  source: $('[name="source_wsp"]').val(),
                  origin: $('[name="source_wsp"]').val(),
                  client_width: $('[name="client_width_wsp"]').val(),
                  client_height: $('[name="client_height_wsp"]').val(),
                  client_latitude: $('[name="client_latitude_wsp"]').val(),
                  client_longitude: $('[name="client_longitude_wsp"]').val(),
                  client_system: $('[name="client_system_wsp"]').val(),
                  message: $('[name="message_wsp"]').val(),
                  triggered_by: $('[name="triggered_by_wsp"]').val(),
              })
          })
          .then(async res => {
              const data = await res.json()
              if (!res.ok) throw new Error(data?.message ?? 'Ocurrio un error inesperado')
              return data
          })
          .then(response => {
              Swal.close();
              Swal.fire({
                  title: response.message,
                  icon: "success",
              });

              $('#dataWhatsapp')[0].reset();

               window.location.href = 'https://wa.link/tgjbni';
          }).catch((error) => {
              Swal.close();
              Swal.fire({
                  title: error,
                  icon: "error",
              });
          })

  })
</script>
@stop

@stop
