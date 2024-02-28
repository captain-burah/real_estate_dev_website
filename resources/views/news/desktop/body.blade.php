<div class="mx-auto max-w-7xl lg:max-w-8xl xl:max-w-8xl 2xl:px-w-8xl mt-8 ">
    <div class="container mx-auto flex flex-col items-start md:flex- min-h-[7vh]">
        <div class="mb-4 w-[30vw] flex justify-center space-x-4 p-0 rounded-lg gap-6 mx-auto">
            <a href="{{ url('/en/press-release')}}" class="text-xl font-light underline underline-offset-4">
                {{ __('frontend.mediaH2') }}
            </a>
            <a href="{{ url('/en/blogs')}}" class=" text-xl font-light  transition duration-150 ease-out hover:ease-in">
                {{ __('frontend.mediaH3') }}
            </a>
            <a href="{{ url('/en/media-gallery')}}" class="text-xl font-light   transition duration-150 ease-out hover:ease-in ">
                {{ __('frontend.mediaH4') }}
            </a>
            
        </div>

        <div class="mb-4 w-[10vw] flex justify-center space-x-4 p-0 bg-white rounded-lg gap-6 mx-auto">
            <hr class="border-double border-gray-300 w-full" >
        </div>
    </div>
</div>

@if(isset($available))
    <div class="sm:container sm:mx-auto sm:px-4 sm:my-4 mx-auto">
        <div class="grid xl:grid-cols-3- lg:grid-cols-3 sm:grid-cols-2 gap-2 mb-5">

            @foreach($response as $data)
                <?php
                    $id = $data['id'];
                    $title = $data['title'];
                    $titlear = $data['title_ar'];
                    $sluglink = $data['slug_link'];
                    $thumbnail = $data['thumbnail'];
                ?>
                <div class="">
                    <div class="mx-auto px-0 ">
                        <div class="max-w-full cursor-pointer rounded-0 bg-white p-2 shadow">
                            <div class="row">
                                {{-- <img class="w-full rounded-0 object-cover object-center" src="{{ URL($langSeg.'/https://mis.esnaad.com/uploads/construction/'.$id.'/thumbnail/'.$thumbnail)}}" alt="product" /> --}}
                                <img class="w-full rounded-0 object-cover object-center" src="{{ asset('developments/3.jpg')}}" alt="product" />
                            </div>
                            <div class="row">
                                <div class="grid grid-cols-7">
                                    <div class="col-span-2">
                                        <img class="w-full ml-[1vw] mt-[-3vw] xl:h-[6vw] xl:w-[6vw]  rounded-0 object-cover object-center" 
                                            src="{{ asset('developments/1.jpg')}}" 
                                            height="3vw"
                                            width="3vw"
                                            alt="project-logo" 
                                        />
                                    </div>
                                    <div class="col-span-5">
                                        <p class="mt-4 pl-4 text-2xl font-thin text-black">The Gulf Villas & Residences</p>
                                        <p class="mb-4 ml-4 font-thin text-black">Nad Al Sheba</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row text-center pb-5 pt-2">
                                <a href="{{ URL($langSeg.'/news/'.$sluglink) }}" 
                                    class="bg-black text-white px-15 py-3">
                                    Explore
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endif
