
<div class="sm:mx-auto mx-0 px-0 sm:mb-0 mx-auto">


        <p class="-4 text-3xl font-thin mx-auto w-full text-center">
            {{-- Community Map of {{ $response[0]['title'] }} --}}
        </p>
        
        @desktop
            <div id='map' class="map" style='width: 100%; height: 550px !important;'></div>
        @enddesktop

        @tablet
            <div id='map' class="map" style='width: 100%; height: 250px !important;'></div>
        @endtablet

</div>

