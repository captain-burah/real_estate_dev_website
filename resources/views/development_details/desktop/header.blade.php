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
    <div class="w-full bg-cover bg-center" style="height: 100vh; background-image: url('https://mis.esnaad.com/uploads/projects/{{$id}}/{{$header}}'), url('{{ URL::asset('assets/img/img-error2.webp')}}');">
        <div class="flex items-center @if($langSeg == 'ar') justify-right @else justify-left @endif h-full w-full bg-gray-950/70">

            <div class="sm:container sm:mx-auto mx-0 px-0 sm:px-4 my-20 sm:my-4 mx-auto text-white @if($langSeg == 'ar') text-right @else text-left @endif">
                <h1 class="text-4xl font-semibold ">
                    @if($langSeg == 'ar')
                        {{$namear}}
                    @else
                        {{$name}}
                    @endif
                </h1>
                <p class="text-base font-light leading-8 w-[50%] @if($langSeg == 'ar') float-right @else float-left @endif">
                    @if($langSeg == 'ar')
                        {{$descriptionar}}
                    @else
                        {{$description}}
                    @endif    
                </p>
            </div>
        </div>
    </div>
</header>



