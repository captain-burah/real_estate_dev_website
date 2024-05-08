<div class="container mx-0 px-0 mx-auto">

    <div class="row-span-2 grid gap-2 h-[100%] w-[100%]">
        
        <div class=" text-justify font-light w-full mb-2">
            
            <div class="row-span-2 grid grid-cols-1 gap-0 w-[100%]">
                <div class=" py-4 border-b border-gray-700">
                    <h2 class="text-xl text-center font-thin textbasel w-full">
                        @if($langSeg=='ar')
                        السعر يبدأ من
                        @else
                        Prices From
                        @endif 
                        <span class="font-bold">
                            AED 1,050,000
                        </span>
                    </h2>
                </div>

                <div class=" py-4">
                    <h2 class="text-xl text-center font-thin textbasel w-full">
                        @if($langSeg=='ar')
                        شقق سكنية
                        @else
                        Apartments
                        @endif  
                        <span class="font-bold">
                            @if($langSeg == 'ar')
                                {{$bedrooms}} غرف نوم
                            @else
                                {{$bedrooms}} Bedrooms
                            @endif
                        </span>
                    </h2>
                </div>
            </div>

        </div>
        <div @if($langSeg=='ar') dir=rtl @endif>
            <h2 class="text-lg ">
                @if($langSeg == 'ar')
                    {{$secOne_title_ar}}
                @else
                    {{$secOne_title}}
                @endif
            </h2>
            <p class="font-base my-3 w-full leading-6" @if($langSeg=='ar') dir=rtl @endif>
                @if($langSeg == 'ar')
                    {{$SecOne_description_ar}}
                @else
                    {{$SecOne_description}}
                @endif
            </p>
        </div>
    </div>

</div>

