{{-- style="background-image: url('{{ asset('images/img/textura_roja.webp') }}');" --}}
<header class="bg-transparent top-0 h-20">
    <div class="flex flex-col md:flex-row justify-between items-center w-11/12 mx-auto py-5 gap-5">
        <div class="flex justify-center items-center">
            <a href="#">
                <img src="{{ asset('images/svg/logoheader.svg') }}" alt="Hidromec" class="w-full" />
            </a>
        </div>
        <div class="hidden md:flex justify-center items-center w-full md:w-auto">
            <a target="_blank" href="https://api.whatsapp.com/send?phone=51123456789&text=hola" rel="noopener"
                class="btn-secondary">Solicitar Servicio</a>
        </div>
    </div>

    {{-- <div class="flex justify-end w-11/12 mx-auto  z-10">
        <div class="fixed bottom-6 sm:bottom-[2rem] lg:bottom-[4rem] z-20">
            <a target="_blank" href="https://api.whatsapp.com/send?phone=51123456789&text=hola" rel="noopener">
                <img src="{{ asset('images/svg/image_8.svg') }}" alt="whatsapp" class="w-20 h-20 md:w-full md:h-full">
            </a>
        </div>
    </div> --}}
</header>
