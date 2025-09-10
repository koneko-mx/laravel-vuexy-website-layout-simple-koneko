@extends('koneko-layout-small-templates::layouts.samuel-coming-soon.master')

@section('content')
    <div class="relative h-screen w-full flex items-center justify-center bg-cover bg-center text-center px-5"
        style="background-image:url({{ asset('vendor/koneko-layout-small-templates/img/bg-coming-soon.png') }});">
        <div class="absolute top-0 right-0 bottom-0 left-0 bg-gray-900 opacity-75"></div>

        <div class="z-50 flex flex-col justify-center text-white w-full h-screen">
            <span class="text-bold">{{ $_seo['title'] }}</span>
            <h1 class="text-5xl">¡Ya casi <b>estamos listos</b>!</h1>
            <p>¡Estamos trabajando en ello!</p>
            <div class="mt-6 flex text-gray-900 mx-auto">
                @if (isset($_social['twitter']) && !empty($_social['twitter']))
                <a href="{{ $_social['twitter'] }}" class="bg-white flex h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2" type="button">
                    <i class="fab fa-twitter"></i>
                </a>
                @endif
                @if (isset($_social['facebook']) && !empty($_social['facebook']))
                <a href="{{ $_social['facebook'] }}" class="bg-white flex h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2" type="button">
                    <i class="fab fa-facebook-f"></i>
                </a>
                @endif
                @if (isset($_social['instagram']) && !empty($_social['instagram']))
                <a href="{{ $_social['instagram'] }}" class="bg-white flex h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2" type="button">
                    <i class="fab fa-instagram"></i>
                </a>
                @endif
                @if (isset($_social['youtube']) && !empty($_social['youtube']))
                <a href="{{ $_social['youtube'] }}" class="bg-white flex h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2" type="button">
                    <i class="fab fa-youtube"></i>
                </a>
                @endif
                @if (isset($_social['linkedin']) && !empty($_social['linkedin']))
                <a href="{{ $_social['linkedin'] }}" class="bg-white flex h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2" type="button">
                    <i class="fab fa-linkedin-in"></i>
                </a>
                @endif
                @if (isset($_social['tiktok']) && !empty($_social['tiktok']))
                <a href="{{ $_social['tiktok'] }}" class="bg-white flex h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2" type="button">
                    <i class="fab fa-tiktok"></i>
                </a>
                @endif
                @if (isset($_social['whatsapp']) && !empty($_social['whatsapp']))
                <a href="{{ $_social['whatsapp'] }}" class="bg-white flex h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2" type="button">
                    <i class="fab fa-whatsapp"></i>
                </a>
                @endif
                @if (isset($_social['x']) && !empty($_social['x']))
                <a href="{{ $_social['x'] }}" class="bg-white flex h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2" type="button">
                    <i class="fab fa-x"></i>
                </a>
                @endif
            </div>
        </div>
    </div>
@endsection
