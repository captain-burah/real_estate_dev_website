@php
    $shortenedText = Str::limit(__('frontend.aboutLegacy'), 250, '...');
@endphp


<div class="w-full p-4">
    <div class="sm:container pt-0 sm:mx-auto mx-0  sm:mb-4 mx-auto">

        <div class="row h-[100%] w-[100%] shadow-lg p-8 border border-gray-100">
            <h2 class="text-xl font-thin text-left leading-8 mb-8">
                CEO's Message and Vision
            </h2>

            <blockquote class="relative mt-4">
                <svg class="absolute -top-8 -start-8 h-16 w-16 text-gray-100 dark:text-gray-700" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path d="M7.39762 10.3C7.39762 11.0733 7.14888 11.7 6.6514 12.18C6.15392 12.6333 5.52552 12.86 4.76621 12.86C3.84979 12.86 3.09047 12.5533 2.48825 11.94C1.91222 11.3266 1.62421 10.4467 1.62421 9.29999C1.62421 8.07332 1.96459 6.87332 2.64535 5.69999C3.35231 4.49999 4.33418 3.55332 5.59098 2.85999L6.4943 4.25999C5.81354 4.73999 5.26369 5.27332 4.84476 5.85999C4.45201 6.44666 4.19017 7.12666 4.05926 7.89999C4.29491 7.79332 4.56983 7.73999 4.88403 7.73999C5.61716 7.73999 6.21938 7.97999 6.69067 8.45999C7.16197 8.93999 7.39762 9.55333 7.39762 10.3ZM14.6242 10.3C14.6242 11.0733 14.3755 11.7 13.878 12.18C13.3805 12.6333 12.7521 12.86 11.9928 12.86C11.0764 12.86 10.3171 12.5533 9.71484 11.94C9.13881 11.3266 8.85079 10.4467 8.85079 9.29999C8.85079 8.07332 9.19117 6.87332 9.87194 5.69999C10.5789 4.49999 11.5608 3.55332 12.8176 2.85999L13.7209 4.25999C13.0401 4.73999 12.4903 5.27332 12.0713 5.85999C11.6786 6.44666 11.4168 7.12666 11.2858 7.89999C11.5215 7.79332 11.7964 7.73999 12.1106 7.73999C12.8437 7.73999 13.446 7.97999 13.9173 8.45999C14.3886 8.93999 14.6242 9.55333 14.6242 10.3Z" fill="currentColor"/>
                </svg>
                
                <div class="relative z-10">
                    <em>
                        <p class="text-base font-thin text-justify leading-6 mt-4">
                            {{__('frontend.contactCeoMsg1')}}                        
                        </p>
                
                        <p class="text-base font-thin text-justify leading-6 mt-4">
                            {{__('frontend.contactCeoMsg2')}}                        
                        </p>
        
                        <p class="text-base font-thin text-justify leading-6 mt-4">
                            {{__('frontend.contactCeoMsg3')}}                        
                        </p>
        
                        <p class="text-base font-thin text-justify leading-6 mt-4">
                            {{__('frontend.contactCeoMsg4')}}                        
                        </p>
        
                        <p class="text-base font-thin text-justify leading-6 mt-4">
                            {{__('frontend.contactCeoMsg5')}}                        
                        </p>
                    </em>
                </div>
                </blockquote>
    
            

            <div class="mt-4 w-full float-right text-right">
                <img src="{{ asset('home/signature2.png') }}" class="float-right" style="height: 15vh !important;" title="ESNAAD-" alt="ESNAAD Our Story" loading="lazy" width="auto" height="auto">
            </div>

            <p class="text-base font-thin text-right leading-8 mt-4 w-full">
                Ashraf Elbendari, CEO                      
            </p>
        </div>

    </div>
</div>



<div class="w-full px-4 mx-auto">
    <div class="sm:container pt-0 sm:mx-auto mx-0 mt-4 sm:mb-4 mx-auto">

        <div class="space-y-2">
            <div
                class="group flex flex-col gap-2 rounded-0 text-black"
                tabindex="3" @if($langSeg == 'ar') dir="rtl" @endif
            >
                <div class="flex cursor-pointer items-center justify-between border-b border-gray-700">
                <h3 class="text-xl font-thin text-left leading-6 py-4">
                    {{__('frontend.aboutH1')}}
                </h3>
                <img
                    src="https://demo.esnaad.com/public/home/down-arrow.png"
                    class="h-full w-6 transition-all duration-500 group-focus:-rotate-180"
                />
                </div>
                <div
                class="invisible h-auto max-h-0 items-center opacity-0 transition-all group-focus:visible group-focus:max-h-screen group-focus:opacity-100 group-focus:duration-1000 leading-6 text-justify"
                >
                    {{__('frontend.aboutP1')}}
                </div>
            </div>

            <div
                class="group flex flex-col gap-2 rounded-0 text-black"
                tabindex="1" @if($langSeg == 'ar') dir="rtl" @endif
            >
                <div class="flex cursor-pointer items-center justify-between border-b border-gray-700">
                <h3 class="text-xl font-thin text-left leading-6 py-4">
                    {{__('frontend.aboutH2')}}
                </h3>
                <img
                    src="https://demo.esnaad.com/public/home/down-arrow.png"
                    class="h-full w-6 transition-all duration-500 group-focus:-rotate-180"
                />
                </div>
                <div
                class="invisible h-auto max-h-0 items-center opacity-0 transition-all group-focus:visible group-focus:max-h-screen group-focus:opacity-100 group-focus:duration-1000 leading-6 text-justify"
                >
                    {{__('frontend.aboutP2')}}
                </div>
            </div>

            <div
                class="group flex flex-col gap-2 rounded-0 text-black"
                tabindex="2" @if($langSeg == 'ar') dir="rtl" @endif
            >
                <div class="flex cursor-pointer items-center justify-between border-b border-gray-700">
                    <h3 class="text-xl font-thin text-left leading-6 py-4">
                        {{__('frontend.aboutH3')}}
                    </h3>
                    <img
                        src="https://demo.esnaad.com/public/home/down-arrow.png"
                        class="h-full w-6 transition-all duration-500 group-focus:-rotate-180"
                    />
                </div>
                <div
                class="invisible h-auto max-h-0 items-center opacity-0 transition-all group-focus:visible group-focus:max-h-screen group-focus:opacity-100 group-focus:duration-1000 leading-6 text-justify"
                >
                    {{__('frontend.aboutP3')}}
                </div>
            </div>
        </div>


    </div>
</div>





<div class="container mx-auto  px-4 m-0 mt-8 mb-0">
    <div class="row">
        <div class="grid md:grid-cols-1 mx-auto">
            <div class="paragraph-container">
                <p id="mobileAboutP" class="leading-6 text-base text-justify" >{{$shortenedText }}</p>
                <button class="mt-2 underline" id="read-more-btn-about-mobile" data-full-text="{{ __('frontend.aboutLegacy') }}">Read More</button>
            </div>
        </div>
    </div>

    <div class="row my-8 p-0">
            <img src="{{ asset('home/home-decor-1.jpg')}}">
        </div>
</div>


<script>
    $(document).ready(function() {
        $('#read-more-btn-about-mobile').click(function() {
            var fullText = $(this).data('full-text');
            $('#mobileAboutP').text(fullText);
            $(this).hide();
        });
    });


    const moreTextEl = document.getElementById('more-text');
    const toggleBtnEl = document.getElementById('toggle-btn');
    const hideBtnEl = document.getElementById('hide-btn');

    toggleBtnEl.addEventListener('click', () => {
        moreTextEl.classList.toggle('hidden');
        toggleBtnEl.classList.toggle('hidden');
        hideBtnEl.classList.toggle('hidden');
    });

    hideBtnEl.addEventListener('click', () => {
        moreTextEl.classList.toggle('hidden');
        toggleBtnEl.classList.toggle('hidden');
        hideBtnEl.classList.toggle('hidden');
    });
</script>