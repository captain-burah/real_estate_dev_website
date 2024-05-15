
<div class="sm:mx-auto mx-0 px-0 sm:mt-4 sm:mb-0 mx-auto">

    {{-- <div id='map' class="map" style='width: 100%; height: 400px'></div> --}}


    <div class="sm:container sm:mx-auto mx-0 px-4 sm:my-4 mx-auto" id="projectSectionOne"  @if($langSeg == 'ar') dir="rtl" @endif>

        <div class="row w-[100%]">
            <div class="grid grid-cols-5 gap-4">
                <div class="py-2">
                    <button class="bg-white hover:bg-black text-black font-light hover:text-white py-2 px-4 border border-white rounded-0 hover:border-white w-[100%]"
                    onclick="nearbyGo('https://api.mapbox.com/styles/v1/edgerealty/clw649oyk019601pf1v43gkx8.html?title=false&access_token=pk.eyJ1IjoiZWRnZXJlYWx0eSIsImEiOiJjbGNvcnE3eDgwYzBvM3JsYTB4dXpxa3I3In0.prc7SeJwtNYofG3O-fv61w&zoomwheel=false#12.63/25.12066/55.35842')"
                    >
                        Pharmacy
                    </button>
                </div>
                <div class="py-2">
                    <button class="bg-white hover:bg-black text-black font-light hover:text-white py-2 px-4 border border-white rounded-0 hover:border-white w-[100%]"
                        onclick="nearbyGo('https://api.mapbox.com/styles/v1/edgerealty/clw0obt9702i501ocfu0z1vvj.html?title=false&access_token=pk.eyJ1IjoiZWRnZXJlYWx0eSIsImEiOiJjbGNvcnE3eDgwYzBvM3JsYTB4dXpxa3I3In0.prc7SeJwtNYofG3O-fv61w&zoomwheel=false#12.08/25.1231/55.36537')"
                    >
                        School
                    </button>
                </div>
                <div class="py-2">
                    <button class="bg-white hover:bg-black text-black font-light hover:text-white py-2 px-4 border border-white rounded-0 hover:border-white w-[100%]"
                    onclick="nearbyGo('https://api.mapbox.com/styles/v1/edgerealty/clw0s1vay018p01pch2jq50uk.html?title=false&access_token=pk.eyJ1IjoiZWRnZXJlYWx0eSIsImEiOiJjbGNvcnE3eDgwYzBvM3JsYTB4dXpxa3I3In0.prc7SeJwtNYofG3O-fv61w&zoomwheel=false#11.19/25.137/55.3196')"
                    >
                        Shopping Mall
                    </button>
                </div>
                <div class="py-2">
                    <button class="bg-white hover:bg-black text-black font-light hover:text-white py-2 px-4 border border-white rounded-0 hover:border-white w-[100%]"
                    onclick="nearbyGo('https://api.mapbox.com/styles/v1/edgerealty/clw0jw6hb02eq01qvbjwg3lkr.html?title=false&access_token=pk.eyJ1IjoiZWRnZXJlYWx0eSIsImEiOiJjbGNvcnE3eDgwYzBvM3JsYTB4dXpxa3I3In0.prc7SeJwtNYofG3O-fv61w&zoomwheel=false#12.05/25.12105/55.36296')"
                    >
                        Park
                    </button>
                </div>
                <div class="py-2">
                    <button class="bg-white hover:bg-black text-black font-light hover:text-white py-2 px-4 border border-white rounded-0 hover:border-white w-[100%]"
                        onclick="nearbyGo('https://api.mapbox.com/styles/v1/edgerealty/clw0onnns00z901pf2v4u4vof.html?title=false&access_token=pk.eyJ1IjoiZWRnZXJlYWx0eSIsImEiOiJjbGNvcnE3eDgwYzBvM3JsYTB4dXpxa3I3In0.prc7SeJwtNYofG3O-fv61w&zoomwheel=false#12.31/25.12695/55.35623')"
                    >
                        Restaurants
                    </button>
                </div>                
            </div>
            <div class="grid grid-cols-5 gap-4">
                <div class="py-2">
                    <button class="bg-white hover:bg-black text-black font-light hover:text-white py-2 px-4 border border-white rounded-0 hover:border-white w-[100%]"
                        onclick="nearbyGo('https://api.mapbox.com/styles/v1/edgerealty/clw64gabt02qt01ocabs4g8sx.html?title=false&access_token=pk.eyJ1IjoiZWRnZXJlYWx0eSIsImEiOiJjbGNvcnE3eDgwYzBvM3JsYTB4dXpxa3I3In0.prc7SeJwtNYofG3O-fv61w&zoomwheel=false#12.36/25.1196/55.36454')"
                    >
                        Gas
                    </button>
                </div>
                <div class="py-2">
                    <button class="bg-white hover:bg-black text-black font-light hover:text-white py-2 px-4 border border-white rounded-0 hover:border-white w-[100%]"
                        onclick="nearbyGo('https://api.mapbox.com/styles/v1/edgerealty/clw642z6902ky01qr96gc843g.html?title=false&access_token=pk.eyJ1IjoiZWRnZXJlYWx0eSIsImEiOiJjbGNvcnE3eDgwYzBvM3JsYTB4dXpxa3I3In0.prc7SeJwtNYofG3O-fv61w&zoomwheel=false#12.64/25.1212/55.35771')"
                    >
                        Grocery
                    </button>
                </div>
                <div class="py-2">
                    <button class="bg-white hover:bg-black text-black font-light hover:text-white py-2 px-4 border border-white rounded-0 hover:border-white w-[100%]"
                        onclick="nearbyGo('https://api.mapbox.com/styles/v1/edgerealty/clw64wris02nf01qvczyb776z.html?title=false&access_token=pk.eyJ1IjoiZWRnZXJlYWx0eSIsImEiOiJjbGNvcnE3eDgwYzBvM3JsYTB4dXpxa3I3In0.prc7SeJwtNYofG3O-fv61w&zoomwheel=false#12.07/25.12072/55.36506')"
                    >
                        Gym
                    </button>
                </div>
                <div class="py-2">
                    <button class="bg-white hover:bg-black text-black font-light hover:text-white py-2 px-4 border border-white rounded-0 hover:border-white w-[100%]"
                        onclick="nearbyGo('https://api.mapbox.com/styles/v1/edgerealty/clw0s211402gx01qph60882ts.html?title=false&access_token=pk.eyJ1IjoiZWRnZXJlYWx0eSIsImEiOiJjbGNvcnE3eDgwYzBvM3JsYTB4dXpxa3I3In0.prc7SeJwtNYofG3O-fv61w&zoomwheel=false#11.75/25.1371/55.3217')"
                    >
                        Highways
                    </button>
                </div>
                <div class="py-2">
                    <button class="bg-white hover:bg-black text-black font-light hover:text-white py-2 px-4 border border-white rounded-0 hover:border-white w-[100%]"
                        onclick="nearbyGo('https://api.mapbox.com/styles/v1/edgerealty/clw65826v02rp01qubr619zc8.html?title=false&access_token=pk.eyJ1IjoiZWRnZXJlYWx0eSIsImEiOiJjbGNvcnE3eDgwYzBvM3JsYTB4dXpxa3I3In0.prc7SeJwtNYofG3O-fv61w&zoomwheel=false#10.64/25.1042/55.3704')"
                    >
                        Racecourse
                    </button>
                </div>

            </div>
              
        </div>
    </div>


    <div class="h-[400px]">
        <iframe width='100%' height='100%' id="mapbox_src" src="https://api.mapbox.com/styles/v1/edgerealty/clw0mp6v800z301pf63yz2hfr.html?title=false&access_token=pk.eyJ1IjoiZWRnZXJlYWx0eSIsImEiOiJjbGNvcnE3eDgwYzBvM3JsYTB4dXpxa3I3In0.prc7SeJwtNYofG3O-fv61w&zoomwheel=false#12.22/25.13142/55.35794" title="ESNAAD Dubai" style="border:none;"></iframe>
    </div>



    <script>
        function nearbyGo(loc) {
            document.getElementById('mapbox_src').src = loc;
        }
    </script>

</div>

