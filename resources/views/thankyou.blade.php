@extends('layoutv2.master')
<?php
    $uri_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    $uri_segments = explode('/', $uri_path);
    $seg1 = $uri_segments[1];
    if($seg1 == 'en' || $seg1 == 'ar'){
        $langSeg = $uri_segments[1];
    }else{
        $langSeg = 'en';
    }
?>
@section('content')

    @include('layoutv2.search')

<header>

    <div class="w-full bg-cover bg-center" style="height:100vh; background-image: url('{{URL::asset('front/images/002.webp')}}'), url('{{ URL::asset('assets/img/img-error2.webp')}}');">
        <div class="flex items-center justify-left h-full w-full bg-black bg-opacity-60">
            <div class="container mx-auto ">

                <h1 class="text-white text-2xl font-semibold uppercase md:text-4xl px-4">
                    You're a Member!
                    <br>
                </h1>

                <p class="text-white text-md font-bold xl:text-lg mt-5 px-4">
                    Thank you for considering ESNAAD, where we transform dreams into reality. Whether you're seeking a new home or an investment opportunity, ESNAAD is dedicated to crafting spaces that go beyond the ordinary. Explore the possibilities with "The Spark by ESNAAD," where life sparks with endless opportunities.
                </p>

            </div>
        </div>
    </div>
</header>

@endsection

