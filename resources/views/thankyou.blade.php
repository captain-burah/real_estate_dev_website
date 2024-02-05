@extends('layoutv2.master')

@section('content')

    @include('layoutv2.search')

<header>

    <div class="w-full bg-cover bg-center" style="height:32rem; background-image: url('{{URL::asset('front/images/bg-hero3.jpg')}}'), url('{{ URL::asset('assets/img/img-error2.webp')}}');">
        <div class="flex items-center justify-center h-full w-full bg-gray-900 bg-opacity-50">
            <div class="text-center">
                
                <h1 class="text-white text-2xl font-semibold uppercase md:text-4xl">
                    Thank You!
                    <br>
                </h1>

                <p class="text-white text-md font-semibold xl:text-lg">
                    One of our consultants will contact you shortly.
                </p>

            </div>
        </div>
    </div>
</header>

@endsection

