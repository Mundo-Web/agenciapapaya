{{-- style="background-image: url('{{ asset('images/img/textura_roja.webp') }}');" --}}
<header class="bg-transparent top-0 h-20">
    <div class="flex flex-col md:flex-row justify-center items-center w-11/12 mx-auto py-5 gap-5">
        <div class="flex justify-center items-center">
            <a href="{{route('index')}}">
                <img src="{{ asset('images/svg/logoblancoheader.svg') }}" alt="Hidromec" class="w-full" />
            </a>
        </div>
      
    </div>

    {{-- whatssapp --}}
    <div class="flex justify-end w-11/12 mx-auto z-[100] relative">
        <div class="fixed bottom-6 sm:bottom-[2rem] lg:bottom-[4rem] z-20 cursor-pointer right-[20px] ">
            <a target="_blank" id="whatsapp-toggle">
                <img src="{{ asset('images/svg/WhatsApp.svg') }}" alt="whatsapp"
                    class="w-16 h-16 md:w-24 md:h-24">
            </a>
        </div>
    </div>

    <div class="fixed bottom-24 right-6 lg:bottom-40 z-[99] shadow-xl hidden animate-once animate-duration-1000"
        id="whatsapp-chat">
        <div class="w-72 h-auto rounded-xl">
            <div class="bg-green-500 font-outfitRegular text-white text-center py-3 rounded-t-xl"> Whatsapp Chat </div>
            <div class="bg-white shadow-xl hover:bg-slate-100 cursor-pointer">
                <div class="flex flex-row p-3">
                    <div class="px-2">
                        <div class="flex flex-row justify-start items-center gap-3">
                            <img class="w-10" src="{{ asset('images/img/asistente.png') }}" />
                            <div class="flex flex-col justify-start items-start">
                                <p class="text-slate-400 font-outfitRegular text-text14 ">Agente Papaya</p>
                                <div class="flex flex-row items-center justify-start gap-2">
                                    <div class="w-2 h-2 bg-green-400 rounded-full ml-1"></div>
                                    <p class="text-slate-400 font-outfitRegular text-text12">En Línea </p>
                                </div>
                            </div>
                        </div>

                        <form class="space-y-2 mt-3" id="dataWhatsapp">
                            @csrf
                            <input type="text" name="contact_name_wsp" placeholder="Nombre Completo" required
                                class="border-green-500 border-2 focus:!border-green-500 focus:!border-2 focus:!ring-0 focus:!ring-transparent
                                  text-gray-600 font-outfitRegular w-full py-2 px-2 rounded-xl text-text16  placeholder-opacity-25 font-light  bg-white">

                            <input type="email" name="contact_email_wsp" id="email_wsp"
                                placeholder="Correo Electrónico" required
                                class="border-green-500 border-2 focus:!border-green-500 focus:!border-2 focus:!ring-0 focus:!ring-transparent
                                    text-gray-600 font-outfitRegular w-full py-2 px-2 rounded-xl text-text16  placeholder-opacity-25 font-light  bg-white">

                            <input type="text" name="contact_phone_wsp" id="telefono_wsp" placeholder="Teléfono"
                                required
                                class="border-green-500 border-2 focus:!border-green-500 focus:!border-2 focus:!ring-0 focus:!ring-transparent
                                      text-gray-600 font-outfitRegular w-full py-2 px-2 rounded-xl text-text16  placeholder-opacity-25 font-light  bg-white">
                            <input type="hidden" name="source_wsp" id="source_wsp" value="Pauta">
                            <input type="hidden" name="origin_wsp" id="llegade_wsp" value="Pauta">
                            <input type="hidden" name="triggered_by_wsp" id="triggered_wsp"
                                value="Landing Papaya/Btn Whatsapp">
                            <input type="hidden" name="client_width_wsp" id="anchodispositivo_wsp">
                            <input type="hidden" name="client_height_wsp" id="largodispositivo_wsp">
                            <input type="hidden" name="client_latitude_wsp" id="latitud_wsp">
                            <input type="hidden" name="client_longitude_wsp" id="longitud_wsp">
                            <input type="hidden" name="client_system_wsp" id="sistema_wsp">
                            <input type="hidden" name="message_wsp" id="mensaje"
                                value="Lead de boton whatsapp">

                            <button id='procesarSolicitud2'
                                class="font-outfitRegular font-semibold text-white py-2 px-2 bg-green-500 justify-center items-center rounded-xl inline-flex text-text16 w-full">
                                <span>Enviar</span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</header>




