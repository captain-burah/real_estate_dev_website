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
<div class="max-w-full rounded-0 overflow-hidden" >

    <div class="w-full group">
        <div class="relative overflow-hidden shadow-lg">

            <div class="grid grid-cols-1  ">

                <img
                    class="sm:w-full object-cover"
                    src="{{ asset($url)}}"
                    alt="esnaad-quality-and-services"
                    title="esnaad-philosophies"
                    height="auto"
                    width="auto"
                    loading="lazy"
                    onerror="this.onerror=null;this.src='{{ URL::asset('assets/img/img-error2 (1).jpg')}}';"
                >

            </div>
            
        </div>
        <div class=" h-full w-full flex items-center justify-center">
                <span class="mt-10 px-0 text-justify text-base font-base  leading-8" @if($langSeg == 'ar') dir="rtl" @endif>
                    {{ __('frontend.'.$description) }}
                </span>
            </div>
    </div>

</div>
