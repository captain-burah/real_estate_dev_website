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
    <div class="w-full bg-cover bg-center" style="height:40vh; background-image: url('{{ URL::asset('developments/banners/1.webp')}}'), url('{{ URL::asset('developments/banners/1.webp')}}');" @if($langSeg=='ar') dir="rtl" @endif>
        <div class="flex items-center justify-left h-full w-full bg-black bg-opacity-75   ">
            <div class="container mx-6 my-auto" @if($langSeg=='ar') dir="rtl" @endif>
                    
                <h1 class="text-xl text-white font-bold uppercase mx-auto  mb-2 mt-15">
                    {{__('frontend.aboutH')}}
                </h1>
                
                <p class="text-white font-thin leading-relax text-base ">
                    {{__('frontend.aboutP')}}
                </p>
            </div>
        </div>
    </div>
</header>