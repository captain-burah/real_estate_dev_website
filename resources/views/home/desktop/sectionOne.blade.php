<section id="component_home_section_one">
<div class="container px-0 px-4 mx-auto h-[40vh] mt-20">
    <div class="row my-auto h-[100%]">
        <div class="grid grid-cols-2 gap-12 mb-5 mx-auto h-[100%]" @if($langSeg == 'ar') dir="rtl" @endif>
            <div class="my-auto">
                <h2 class=" text-xl xl:text-3xl font-thin">
                    {{__('frontend.homeSectionOneH')}}
                </h2>
                <p class="text-sm xl:text-base leading-8 mt-2 text-left">
                    {{__('frontend.homeSectionOneP1')}}
                </p>

                <p class="text-sm xl:text-base leading-8 mt- text-left">
                    {{__('frontend.homeSectionOneP2')}}
                </p>
            </div>
            <div class="my-auto">
                <img src="{{ asset('home/13.webp') }}"  title="ESNAAD-Our-Story" alt="ESNAAD Our Story" loading="lazy" width="auto" height="auto">

                <!-- <div class="placeholder">

                    <div class="bg-image-blur"></div>

                    <div class="bg-image"></div>

                </div> -->
            </div>
        </div>
    </div>

</div>
</section>
