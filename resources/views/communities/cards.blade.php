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
<div class="container mx-auto md:px-4 ">
    <section class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-4 mb-4">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-2 gap-6">

            @foreach($response as $data)            
                <?php
                    $id = $data['id'];
                    $name = $data['title'];
                    $namear = $data['title_ar'];
                    $address = $data['address'];
                    $addressar = $data['address_ar'];
                    $slug = $data['slug_link'];
                    $thumbnail = $data['thumbnail'];
                ?>
                <div class="full rounded-0 border shadow-lg overflow-hidden flex flex-col justify-center items-center shadow">
                    <div class="relative overflow-hidden rounded-0 lg:h-[20rem] max-h-[34rem]">
                        {{--
                        <p
                            class="text-white text-xl rounded-0 absolute inset-0  bg-gray-950/80 flex justify-center items-center">
                            COMING SOON
                        </p>
                        --}}

                        <img class="h-full w-full object-cover "
                            src="https://mis.esnaad.com/uploads/communities/{{$id}}/thumbnail/{{$thumbnail}}"
                            alt="esnaad-community-{{$name}}"
                            title="esnaad-community-{{$name}}"
                            height="300px"
                            width="auto"
                            loading="lazy"
                        >
                    </div>
                    <div class="text-center py-8 sm:py-6">
                        <p class="text-xl  font-bold mb-2">
                            @if($langSeg === 'ar')
                                {{$namear}}
                            @else
                                {{$name}}
                            @endif
                        </p>
                        <p class="text-base  font-normal">
                            @if($langSeg === 'ar')
                                {{$addressar}}
                            @else
                                {{$address}}
                            @endif    
                        </p>
                        <div class="text-center py-4 sm:py-4 w-full mt-2">
                            <a href="{{ url('en/communities/'.$slug) }}" class="bg-white text-base text-black py-3 px-10 rounded-0">
                                {{ __('frontend.exploreMore') }}
                            </a>
                        </div>
                    </div>
                    
                </div>
            @endforeach
        </div>
    </section>
</div>
