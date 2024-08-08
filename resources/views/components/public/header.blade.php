{{-- style="background-image: url('{{ asset('images/img/textura_roja.webp') }}');" --}}
<header class="bg-transparent top-0 h-20">
    <div class="flex flex-col md:flex-row justify-center items-center w-11/12 mx-auto py-5 gap-5">
        <div class="flex justify-center items-center">
            <a href="{{route('index')}}">
                <img src="{{ asset('images/svg/logoblancoheader.svg') }}" alt="Hidromec" class="w-full" />
            </a>
        </div>
        {{-- <div class="hidden md:flex justify-center items-center w-full md:w-auto">
            <a href="#formContactos"
                class="btn-secondary">Solicitar Servicio</a>
        </div> --}}
    </div>

    <div class="flex justify-end w-11/12 mx-auto  z-10">
        <div class="fixed bottom-10 sm:bottom-12 lg:bottom-20 z-20">
            <a target="_blank" href="https://wa.link/o8prqi" rel="noopener">
                <img src="{{ asset('images/svg/image_8.svg') }}" alt="whatsapp" class="w-18 h-18 md:w-full md:h-full">
            </a>
        </div>
    </div>
</header>
