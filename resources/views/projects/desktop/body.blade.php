@section('luxe_asset_css')
    <style>
        .animated {
            -webkit-animation-duration: 1s;
            animation-duration: 1s;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
        }

        .animated.faster {
            -webkit-animation-duration: 500ms;
            animation-duration: 500ms;
        }

        .fadeIn {
            -webkit-animation-name: fadeIn;
            animation-name: fadeIn;
        }

        .fadeOut {
            -webkit-animation-name: fadeOut;
            animation-name: fadeOut;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @keyframes fadeOut {
            from {
                opacity: 1;
            }

            to {
                opacity: 0;
            }
        }
    </style>
@endsection



<header class="">
    <div class="w-full bg-cover bg-center" >
        <div class="flex items-center justify-center h-full w-full" >
            <div class="sm:container sm:mx-auto sm:px-4 sm:my-4 mx-auto  text-black">
                
                <section class="max-w-8xl mx-auto px-4 sm:px-6 lg:px-4 py-12">
                    
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-2 gap-6" @if($langSeg == 'ar') dir="rtl" @endif>
                        <div>
                            @foreach($response as $data)
                                <?php
                                    $id = $data['id'];
                                    $name = $data['name'];
                                    $namear = $data['name_ar'];
                                    $community = $data['community'];
                                    $communityar = $data['community_ar'];
                                    $slug = $data['slug_link'];
                                    $thumbnail = $data['thumbnail'];
                                    $logo = $data['logo'];
                                    $header = $data['header'];
                                ?>
                                <x-new-project-desktop
                                    :id="$id"
                                    :name="$name"
                                    :namear="$namear"
                                    :community="$community"
                                    :communityar="$communityar"
                                    :slug="$slug"
                                    :thumbnail="$thumbnail"
                                    :logo="$logo"
                                    :header="$header"

                                ></x-new-project-desktop>
                            @endforeach
                        </div>
                    </div>
                </section>
                
            </div>
        </div>
    </div>
</header>
