{{-- Desktop View --}}
<div class="container px-0 px-4 mx-auto" @if($langSeg == 'ar') dir="rtl" @endif>
    <div class="mt-10 mb-10">
        <h3 class="text-xl xl:text-3xl font-thin text-center">
            
            {{ __('frontend.homeSectionThreeH') }}
            
        </h3>
    </div>
    <div class="row">
        <div class="grid grid-cols-5 gap-12 mb-5 mx-auto">
            
            <div class="col-span-2 w-full overflow-hidden flex flex-col justify-center items-center ">
                <div class="relative overflow-hidden max-h-[24rem] ">
                    <a href="http://esnaad.com/en/developments/the-spark-by-esnaad" title="THE SPARK BY ESNAAD - COMING SOON" alt="THE SPARK BY ESNAAD - COMING SOON" height="auto" width="auto" loading="lazy">
                    <div
                        class="text-white text-7xl absolute inset-0  flex justify-center items-center shadow ">
                        <span class="drop-shadow">{{ __('frontend.homeSectionThreeImage') }}</span>
                    </div>
                    <img class=" w-full object-cover "
                        src="{{ asset('home/project/2.webp')}}"                    
                        alt="esnaad-project-coming-soon"
                        title="COMING-SOON"
                        height="auto"
                        width="auto"
                        loading="lazy"
                        style="width: 100% !important;"
                    >
                </a>
                </div>
            </div>
            <div class="col-span-3 my-auto">
                <h2 class=" text-xl xl:text-4xl">
                </h2>
                <h3 class="text-xl mt-10 text-justify leading-8">
                    {{ __('frontend.homeSectionThreeP') }}
                </h3>

                {{-- <p class="text-base mt-2 text-justify leading-8">
                    {{ __('frontend.homeSectionThreeP2') }}
                </p> --}}
            </div>
        </div>
    </div>

</div>
