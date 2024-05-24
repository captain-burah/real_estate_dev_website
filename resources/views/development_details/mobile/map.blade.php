
<div class="sm:mx-auto mx-0 px-0 sm:mt-4 sm:mb-0 mx-auto">

    {{-- <div id='map' class="map" style='width: 100%; height: 400px'></div> --}}

    <p class="mt-18 mb-4 text-3xl font-thin mx-auto w-full text-center">
        @if($langSeg=="ar")
        موقع
        @else
        Location
        @endif
    </p>


    <div class="sm:container sm:mx-auto mx-0 px-4 sm:my-4 mx-auto" id="projectSectionOne"  @if($langSeg == 'ar') dir="rtl" @endif>

        <div class="row w-[100%] my-3" >
            <style>
                select:focus, input:focus{
                    outline: #fff !important;
                }
            </style>
            <select class="w-[100%] text-white bg-transparent border border-white" style="border: 1px solid #fff !important;"  onchange="nearbyGoMobile()" id="nearbyGoMobile">
                <option class="bg-white text-black w-auto">Show nearby</option>
                <option class="bg-white text-black w-auto" value="https://api.mapbox.com/styles/v1/edgerealty/clw649oyk019601pf1v43gkx8.html?title=false&access_token=pk.eyJ1IjoiZWRnZXJlYWx0eSIsImEiOiJjbGNvcnE3eDgwYzBvM3JsYTB4dXpxa3I3In0.prc7SeJwtNYofG3O-fv61w&zoomwheel=false#12.83/25.12092/55.35634"
                >Pharmacy</option>

                <option class="bg-white text-black w-auto" value="https://api.mapbox.com/styles/v1/edgerealty/clw0obt9702i501ocfu0z1vvj.html?title=false&access_token=pk.eyJ1IjoiZWRnZXJlYWx0eSIsImEiOiJjbGNvcnE3eDgwYzBvM3JsYTB4dXpxa3I3In0.prc7SeJwtNYofG3O-fv61w&zoomwheel=false#14.18/25.13095/55.3553"
                >School</option>

                <option class="bg-white text-black w-auto" value="https://api.mapbox.com/styles/v1/edgerealty/clwj9sfx800so01qs8g8s8wvg.html?title=false&access_token=pk.eyJ1IjoiZWRnZXJlYWx0eSIsImEiOiJjbGNvcnE3eDgwYzBvM3JsYTB4dXpxa3I3In0.prc7SeJwtNYofG3O-fv61w&zoomwheel=false#11.27/25.1363/55.3315"
                >Shopping Mall</option>

                <option class="bg-white text-black w-auto" value="https://api.mapbox.com/styles/v1/edgerealty/clw0jw6hb02eq01qvbjwg3lkr.html?title=false&access_token=pk.eyJ1IjoiZWRnZXJlYWx0eSIsImEiOiJjbGNvcnE3eDgwYzBvM3JsYTB4dXpxa3I3In0.prc7SeJwtNYofG3O-fv61w&zoomwheel=false#13.57/25.12901/55.36108/0/0"
                >Park</option>

                <option class="bg-white text-black w-auto" value="https://api.mapbox.com/styles/v1/edgerealty/clw0onnns00z901pf2v4u4vof.html?title=false&access_token=pk.eyJ1IjoiZWRnZXJlYWx0eSIsImEiOiJjbGNvcnE3eDgwYzBvM3JsYTB4dXpxa3I3In0.prc7SeJwtNYofG3O-fv61w&zoomwheel=false#12.13/25.12452/55.35492"
                >Restaurants</option>

                <option class="bg-white text-black w-auto" value="https://api.mapbox.com/styles/v1/edgerealty/clw64gabt02qt01ocabs4g8sx.html?title=false&access_token=pk.eyJ1IjoiZWRnZXJlYWx0eSIsImEiOiJjbGNvcnE3eDgwYzBvM3JsYTB4dXpxa3I3In0.prc7SeJwtNYofG3O-fv61w&zoomwheel=false#12.72/25.1266/55.35497"
                >Gas</option>

                <option class="bg-white text-black w-auto" value="https://api.mapbox.com/styles/v1/edgerealty/clw642z6902ky01qr96gc843g.html?title=false&access_token=pk.eyJ1IjoiZWRnZXJlYWx0eSIsImEiOiJjbGNvcnE3eDgwYzBvM3JsYTB4dXpxa3I3In0.prc7SeJwtNYofG3O-fv61w&zoomwheel=false#13.36/25.11745/55.36656"
                >Grocery</option>

                <option class="bg-white text-black w-auto" value="https://api.mapbox.com/styles/v1/edgerealty/clw64wris02nf01qvczyb776z.html?title=false&access_token=pk.eyJ1IjoiZWRnZXJlYWx0eSIsImEiOiJjbGNvcnE3eDgwYzBvM3JsYTB4dXpxa3I3In0.prc7SeJwtNYofG3O-fv61w&zoomwheel=false#12.63/25.1193/55.37337"
                >Gym</option>

                <option class="bg-white text-black w-auto" value="https://api.mapbox.com/styles/v1/edgerealty/clw0s211402gx01qph60882ts.html?title=false&access_token=pk.eyJ1IjoiZWRnZXJlYWx0eSIsImEiOiJjbGNvcnE3eDgwYzBvM3JsYTB4dXpxa3I3In0.prc7SeJwtNYofG3O-fv61w&zoomwheel=false#11.85/25.12329/55.33199"
                >Highways</option>

                <option class="bg-white text-black w-auto" value="https://api.mapbox.com/styles/v1/edgerealty/clw65826v02rp01qubr619zc8.html?title=false&access_token=pk.eyJ1IjoiZWRnZXJlYWx0eSIsImEiOiJjbGNvcnE3eDgwYzBvM3JsYTB4dXpxa3I3In0.prc7SeJwtNYofG3O-fv61w&zoomwheel=false#11.36/25.1053/55.321"
                >Racecourse</option>
            </select>
        </div>

    <div class="h-[400px]">
        <iframe width='100%' height='100%' style="height: 100% !important;" id="mapbox_src" src="https://api.mapbox.com/styles/v1/edgerealty/clw0mp6v800z301pf63yz2hfr.html?title=false&access_token=pk.eyJ1IjoiZWRnZXJlYWx0eSIsImEiOiJjbGNvcnE3eDgwYzBvM3JsYTB4dXpxa3I3In0.prc7SeJwtNYofG3O-fv61w&zoomwheel=false#10.63/25.1577/55.3054/0/0" title="ESNAAD Dubai" style="border:none;"></iframe>
    </div>



    <script>
        function nearbyGoMobile() {
            var map_src = document.getElementById("nearbyGoMobile").value;
            document.getElementById('mapbox_src').src = map_src;
        }
        // function nearbyGo(loc) {
        //     document.getElementById('mapbox_src').src = loc;
        // }
    </script>

</div>

