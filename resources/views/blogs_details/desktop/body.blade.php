<?php $actual_link = (empty($_SERVER['HTTPS']) ? 'http' : 'https') . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>

<div class="mx-auto max-w-7xl lg:max-w-8xl xl:max-w-8xl 2xl:px-w-8xl">
    <div class="container mx-auto flex flex-col items-start md:flex-">
        
        <div class="mt-8 lg:flex lg:gap-x-28 xl:gap-x-full w-full">
            <div class="w-full">
                <div class="space-y-10">
                    <div>
                        <h1 class="text-2xl font-bold mb-4">
                            @if($langSeg == 'ar')
                                {{$titlear}}
                            @else
                                {{$title}}
                            @endif
                        </h1>
                        <div class="grid grid-cols-2 gap-4 place-content-between">
                            <div class="">
                                <p class="text-sm mb-2">Published {{\Carbon\Carbon::parse($created_at)->format('j F, Y')}}</p>
                            </div>
                            <div class="text-right">
                                <div class="inline-flex float-right text-right">
                                    @include('constructions_details.desktop.buttons')
                                </div>
                            </div>
                        </div>

                        <img src="{{ URL("https://mis.esnaad.com/uploads/news/".$id."/header_image/".$header_image)}}" alt="Ensaad-news-article {{$title}}" class="object-cover w-full h-56 mb-6 rounded-0 shadow-md sm:h-80 2xl:h-[60vh]">                          

                        @if($langSeg == 'ar')
                            {!! $descriptionar !!}
                        @else
                            {!! $description !!}
                        @endif
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>


    
