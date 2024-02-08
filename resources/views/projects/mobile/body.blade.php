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

<section class="max-w-8xl mx-auto px-4 py-4">

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
    <x-new-project
        :id="$id"
        :name="$name"
        :namear="$namear"
        :community="$community"
        :communityar="$communityar"
        :slug="$slug"
        :thumbnail="$thumbnail"
        :logo="$logo"
        :header="$header"

    ></x-new-project>
@endforeach
</section>
