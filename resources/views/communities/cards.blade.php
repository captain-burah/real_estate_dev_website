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

{{-- Desktop View --}}
<div class="container mx-auto md:px-4 " @if($langSeg == 'ar') dir="rtl" @endif>
    <section class="max-w-8xl mx-auto px-4 sm:px-6 lg:px-4 mb-4">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-2 gap-6">

            {{-- @foreach($response as $data)             --}}
                {{-- <?php
                    $id = $data['id'];
                    $name = $data['title'];
                    $namear = $data['title_ar'];
                    $address = $data['address'];
                    $addressar = $data['address_ar'];
                    $slug = $data['slug_link'];
                    $thumbnail = $data['thumbnail'];
                ?> --}}
                <div>
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
                    <div class="max-w-6xl mx-auto p-0" @if($langSeg == 'ar') dir="rtl" @endif>
                            <div class="w-full rounded-0 border shadow-lg overflow-hidden flex flex-col justify-center items-center">
                                <div class="relative overflow-hidden rounded-0 lg:h-[26rem] max-h-[50rem] w-[100%] z-0">
                                        {{-- <div
                                            class="text-white text-xl rounded-0 absolute inset-0 flex justify-center items-center ">
                                        </div> --}}
                                    
                                    <img class="h-[100%] w-[100%] object-cover"
                                        src="{{asset('developments/Map2.webp')}}"
                                        alt="esnaad-project-card"
                                        title="the-spark-by-esnaad-thumbnail"
                                        height="300px"
                                        width="auto"
                                        loading="lazy"
                                    >
                                </div>
                                <div class=" mt-4 z-20">
                                    
                                    <div class="col-span-3 my-4" style="color: #ccc !important; background-color: #1c1c1c !important;">
                                        <h2 class="text-xl  text-left">
                                            @if($langSeg=="ar")
                                            مدينة محمد بن راشد
                                            @else
                                            Mohammed Bin Rashid City
                                            @endif
                                        </h2>
                                    </div>
                                </div>
                                <div class="text-center py-4 sm:py-4 w-full mb-4">
                                    <a href="{{ URL('https://www.esnaad.com/'.$langSeg.'/communities/mohammed-bin-rashid-city')}}" title="Mohammed Bin Rashid City" alt="Mohammed Bin Rashid City" class="bg-white text-base text-black py-3 px-10 rounded-0 mb-3" onclick="showLoader()">
                                        <span id="buttonText">
                                            @if($langSeg=="ar")
                                            اكتشف المزيد
                                            @else
                                            Explore More
                                            @endif
                                        </span>
                                        <img id="loaderImg" src="{{ asset('assets/img/loader/loader.gif') }}" style="width:40px" alt="Loading..." class="hidden">
                                    </a>
                                </div>
                            </div>
                    </div>
                </div>
            {{-- @endforeach --}}
        </div>
    </section>
</div>
<script>
    function showLoader() {
        // Hide the button text
        document.getElementById('buttonText').style.display = 'none';
        // Show the loader image
        document.getElementById('loaderImg').style.display = 'inline';

        // Wait for 2 seconds and then navigate to the next page
        setTimeout(function() {
            // window.location.href = 'https://www.esnaad.com/en/communities/mohammed-bin-rashid-city'; // URL of the next page
        }, 500);
    }
</script>