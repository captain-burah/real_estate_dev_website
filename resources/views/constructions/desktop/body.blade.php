@if(isset($available))
    <div class="sm:container sm:mx-auto sm:px-4 sm:my-4 mx-auto min-h-screen py-8">
        <div class="grid xl:grid-cols-1 lg:grid-cols-1 sm:grid-cols-2 gap-2 mb-5">

            @foreach($response as $data)
                <?php
                    $id = $data['id'];
                    $title = $data['title'];
                    $titlear = $data['title_ar'];
                    $description = $data['description'];
                    $descriptionar = $data['description_ar'];
                    $sluglink = $data['slug_link'];
                    $thumbnail = $data['thumbnail'];
                    $growth = $data['growth'];
                    $created_at = $data['created_at'];
                    $updated_at = $data['updated_at'];
                ?>
                <div class="">
                    <div class="mx-auto px-0 ">
                        <div class="max-w-full cursor-pointer rounded-0 border p-0 shadow">
                            <div class="row">
                                <div class="grid xl:grid-cols-3 lg:grid-cols-3 sm:grid-cols-2 gap-2 mb-5">
                                    <div>
                                        <img class="w-full rounded-0 object-cover object-center" src="{{ URL('https://mis.esnaad.com/uploads/construction/'.$id.'/thumbnail/'.$thumbnail) }}"
                                            height="400px"
                                            width="auto"
                                            loading="lazy"
                                            style="height: 400px !important;"
                                            alt="ESNAAD Media Unit - Gallery - {{$title}}"
                                        />
                                    </div>
                                    <div class="col-span-2">
                                        <p class="mt-4 pl-4 text-2xl text-center font-thin">
                                            @if($langSeg == 'ar')
                                                {{$titlear}}
                                            @else
                                                {{$title}}
                                            @endif
                                        </p>
    
                                        <p class="mt-4 pl-4 text-base text-center font-thin">
                                            Last Updated {{ date('jS F Y', strtotime($updated_at)) }}
                                        </p>
    
    
                                        <p class="mt-4 pl-4 text-base text-center font-thin">
                                            Progress {{ $growth }} %
                                        </p>
    
                                       
                                        <div class="mt-2 h-6 relative w-auto rounded-full overflow-hidden">
                                            <div class=" w-full h-full bg-gray-200 absolute "></div>
                                            <div class=" h-full bg-yellow-400 sm:bg-green-500 absolute" style="width:{{$growth}}%"><div class="h-full w-full mx-auto text-sm text-center pt-1 text-white font-bold"> &nbsp; &nbsp;</div></div>
                                        </div>

                                        <div class="row text-center pb-5 pt-2">
                                            <a href="javascript:void(0)" onclick="return false;" 
                                                class="bg-white text-black px-15 my-3 py-3">
                                                Explore
                                            </a>
                                        </div>                                      
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>

            @endforeach
        </div>
    </div>
@endif
