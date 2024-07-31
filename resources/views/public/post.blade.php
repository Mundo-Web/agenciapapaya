@extends('components.public.matrix', ['pagina'=>'blog'])
@section('titulo', 'Post')
@section('meta_title', $meta_title)
@section('meta_description', $meta_description)
@section('meta_keywords', $meta_keywords)
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


@section('content')

    <section class="gap-20  bg-top object-right-top bg-cover bg-no-repeat h-[100px] -mt-[90px]"
    style="background-image: url('{{ asset('images/img/textura3.webp') }}');">
    </section>

    <main>


        <section class="w-11/12 md:w-10/12 mx-auto flex flex-col gap-10 pt-10 pb-16" data-aos="fade-up" data-aos-offset="150">
            <div class="flex flex-col gap-3">
                <h3 class="font-semibold font-jakartaSemiBold text-base text-primario">Blog</h3>
                <h2 class="font-jakartaSemiBold font-bold text-5xl md:text-text56 text-[#082252] leading-tight tracking-tight">
                    {{$post->title}}
                </h2>
                <p class="font-jakartaRegular font-semibold text-base text-[#0C4AC3]">{{ \Carbon\Carbon::parse($post->created_at)->translatedFormat('d F, Y') }}</p>


                @if($post->url_video)
                    <div class="w-full" data-aos="fade-up" data-aos-offset="150">
                        <iframe width="100%" height="600px" src="https://www.youtube.com/embed/{{ $post->url_video }}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                @endif
               


                <div class="flex flex-col gap-2 text-[#082252] font-roboto font-normal text-text18 py-4">
                    {!!$post->description!!}
                </div>

                @if($post->url_image)
                    <div class="w-full" data-aos="fade-up" data-aos-offset="150">
                        <img src="{{asset($post->url_image . $post->name_image)}}" alt="catedral" class="w-full h-[563px] object-cover hidden md:block rounded-xl" />
                        <img src="{{asset($post->url_image . $post->name_image)}}" alt="catedral" class="w-full h-[563px] object-cover block md:hidden rounded-xl" />
                    </div>
                @endif
            </div>

            {{-- <div>
                <div class="mb-4 flex justify-between border-t-2 pt-5" aria-label="Pagination">
                    <a class="px-2 py-2 text-[#3F76BB] flex gap-2" href="#">
                        <img src="{{asset('images/svg/image_38.svg')}}" alt="previo" />
                        <span class="font-bold font-roboto text-text14 text-[#FF5E14]">Anterior</span>
                    </a>

                    <a class="px-2 py-2 text-[#3F76BB] flex gap-2" href="#">
                        <span class="font-bold font-roboto text-text14 text-[#FF5E14]">Próximo</span>
                        <img src="{{asset('images/svg/image_37.svg')}}" alt="next" />
                    </a>
                </div>
            </div> --}}
        </section>
    </main>


@section('scripts_importados')


@stop

@stop
