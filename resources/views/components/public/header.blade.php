<header
    class="bg-transparent bg__servicios-fondo font-outfit w-full">
    <div class="text-azulcreditomype flex justify-between items-center w-11/12 mx-[5%] pt-7 pb-5">
        <div class="flex justify-start items-center w-60 xl:w-auto" data-aos="fade-up" data-aos-offset="150">
            <a href="{{route('index')}}">
                <img src="{{ asset('images/img/logocreditomype.png') }}" alt="creditomype">
            </a>

        </div>
        <div class="hidden lg:flex justify-center items-center gap-10 font-semibold text-text16 xl:text-text18">
            <nav class="flex justify-center items-center gap-10 text-center" data-aos="fade-up" data-aos-offset="150">
                <a href="{{route('index')}}" class="text-textCeleste">Solicitar Prestamo</a>
                <a href="{{route('index').'#servicios'}}">Requisitos</a>
                <a href="{{route('index').'#acerca'}}">Beneficios</a>
                <a href="{{route('index').'#proceso'}}">Testimonios</a>
                <a href="{{route('index').'#proceso'}}">Prensa</a>
                <a href="{{route('index').'#proceso'}}">Cobertura</a>
            </nav>
        </div>
    </div>

    

    <div class="flex justify-end w-11/12 mx-auto mb-4 z-10">
        <div class="fixed bottom-6 sm:bottom-[2rem] lg:bottom-[4rem] z-20">
            <a target="_blank" href="https://api.whatsapp.com/send?phone={{$generales->whatsapp}}&text={{$generales->mensaje_whatsapp}}" rel="noopener">
                <img src="{{ asset('images/svg/WhatsApp.svg') }}" alt="whatsapp" class="w-20 h-20 md:w-full md:h-full">
            </a>
        </div>
    </div>
</header>
