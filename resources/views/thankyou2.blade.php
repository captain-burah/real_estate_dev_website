@extends('layoutv2.master')

@section('content')

    @include('layoutv2.search')

<header>

    <div class="w-full bg-cover bg-top" style="height:75vh; background-image: url('{{URL::asset('front/images/002.webp')}}'), url('{{ URL::asset('assets/img/img-error2.webp')}}');">
        <div class="flex items-center justify-left h-full w-full bg-black bg-opacity-60">
            <div class="container mx-auto ">

                <h1 class="text-white text-2xl font-semibold uppercase md:text-4xl px-4">
                    Thank you for your interest!
                    <br>
                </h1>

                <p class="text-white text-md font-bold xl:text-lg mt-5 px-4">
                    One of our representatives will contact you soon on your enquiry
                </p>

            </div>
        </div>
    </div>
</header>

@endsection

