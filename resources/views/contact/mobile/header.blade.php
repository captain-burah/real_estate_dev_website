@section('luxe_asset_css')
    <style>
        .animated {
            -webkit-animation-duration: 1s;
            animation-duration: 1s;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
        }

        .animated.faster {
            -webkit-animation-duration: 500ms;
            animation-duration: 500ms;
        }

        .fadeIn {
            -webkit-animation-name: fadeIn;
            animation-name: fadeIn;
        }

        .fadeOut {
            -webkit-animation-name: fadeOut;
            animation-name: fadeOut;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @keyframes fadeOut {
            from {
                opacity: 1;
            }

            to {
                opacity: 0;
            }
        }
    </style>
@endsection

<header>
    <div class="w-full bg-cover bg-center" style="height:60vh; background-image: url('{{ URL::asset('developments/banners/4.webp')}}'), url('{{ URL::asset('developments/banners/4.webp')}}');">
        <div class="flex items-center justify-center h-full w-full  bg-black bg-opacity-40" > 
            <div class="container">
                    
                <h1 class="text-3xl text-white font-light uppercase mx-auto text-center">
                    {{__('frontend.contactH')}}
                </h1>

                <br>
                
                <p class="w-[75%] mx-auto text-white font-thin leading-8 text-lg text-center" @if($langSeg=='ar') dir="rtl" @endif>
                    {{__('frontend.contactAddress')}}
                </p>
                <br>
                <p class="w-[75%] mx-auto text-white font-thin leading-8 text-lg text-center">
                    <a href="tel:+971800376223" class="inline-flex items-center" >
                        @if($langSeg=="ar") (376223)&nbsp; <span>إسناد</span>-800: <span>هاتف</span> @else Phone: 800-ESNAAD (376223) @endif
                    </a>
                </p>
                {{-- <p class="w-[75%] mx-auto text-white font-base leading-8 text-lg text-center">
                    <a href="mailto:{{env('COMPANY_EMAIL')}}" class="inline-flex items-center">
                        {{__('frontend.contactEmail')}}
                        &nbsp;
                        customercare@esnaad.com
                    </a>
                </p> --}}
            </div>
        </div>
    </div>
</header>