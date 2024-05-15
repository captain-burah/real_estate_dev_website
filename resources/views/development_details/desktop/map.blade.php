<script src='https://api.mapbox.com/mapbox-gl-js/v2.9.1/mapbox-gl.js'></script>
<link href='https://api.mapbox.com/mapbox-gl-js/v2.9.1/mapbox-gl.css' rel='stylesheet'/>
<div class="sm:mx-auto mx-0 px-0 sm:mt-4 sm:mb-0 mx-auto">


    <p class="mt-18 mb-4 text-3xl font-thin mx-auto w-full text-center">
        @if($langSeg=="ar")
        موقع
        @else
        Location
        @endif
    </p>

    {{-- <div id='map' class="map" style='width: 100%; height: 600px'></div> --}}

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

    
    
    <!-- Location start -->
    {{-- <div class="pricing-tables content-area pb-0 pt-2" id="pricing">
        <div class="container">
            <!-- Main title -->
            <div class="main-title wow fadeInDown delay-04s">
                <h2 class="" style="font-weight: 400 !important;">Strategic Location</h2>
                <p style="font-weight: 200;" class="text-center m-0" >Dubai's strategic location extends beyond city infrastructure to include a robust legal system, public transport, parks, and entertainment, making it a gateway to global opportunities. </p>
            </div>
            <div class="row mb-4">
                <div class="col-md-3">
                    <button class="brochure_anime btn rounded-0 btn-block p-4" style=" font-size: 20px;" onclick="nearbyGo('https://api.mapbox.com/styles/v1/edgerealty/clw0jw6hb02eq01qvbjwg3lkr.html?title=false&access_token=pk.eyJ1IjoiZWRnZXJlYWx0eSIsImEiOiJjbGNvcnE3eDgwYzBvM3JsYTB4dXpxa3I3In0.prc7SeJwtNYofG3O-fv61w&zoomwheel=false#10.88/25.1374/55.2933/307.5')">
                        <span>
                            <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                                width="15.000000pt" height="15.000000pt" viewBox="0 0 90.000000 90.000000"
                                preserveAspectRatio="xMidYMid meet">
                                <g transform="translate(0.000000,90.000000) scale(0.100000,-0.100000)"
                                fill="#fff" stroke="none">
                                <path d="M277 803 c-17 -16 1 -44 124 -194 l131 -159 -132 -160 c-79 -97 -130
                                -167 -128 -178 2 -13 15 -18 53 -20 l50 -2 143 174 c78 96 142 180 142 186 0
                                6 -64 89 -142 185 l-143 175 -46 0 c-25 0 -49 -3 -52 -7z"/>
                                </g>
                            </svg>

                            Parks</span>
                    </button>
                </div>
                <div class="col-md-3">
                    <button class="brochure_anime btn rounded-0 btn-block p-4" style=" font-size: 20px;" onclick="nearbyGo('https://api.mapbox.com/styles/v1/edgerealty/clw0obt9702i501ocfu0z1vvj.html?title=false&access_token=pk.eyJ1IjoiZWRnZXJlYWx0eSIsImEiOiJjbGNvcnE3eDgwYzBvM3JsYTB4dXpxa3I3In0.prc7SeJwtNYofG3O-fv61w&zoomwheel=false#11.11/25.1515/55.322/307.5')">
                        <span>
                            <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                                width="15.000000pt" height="15.000000pt" viewBox="0 0 90.000000 90.000000"
                                preserveAspectRatio="xMidYMid meet">
                                <g transform="translate(0.000000,90.000000) scale(0.100000,-0.100000)"
                                fill="#fff" stroke="none">
                                <path d="M277 803 c-17 -16 1 -44 124 -194 l131 -159 -132 -160 c-79 -97 -130
                                -167 -128 -178 2 -13 15 -18 53 -20 l50 -2 143 174 c78 96 142 180 142 186 0
                                6 -64 89 -142 185 l-143 175 -46 0 c-25 0 -49 -3 -52 -7z"/>
                                </g>
                            </svg>
                            Schools</span>
                    </button>
                </div>
                <div class="col-md-3">
                    <button class="brochure_anime btn rounded-0 btn-block p-4" style=" font-size: 20px;" onclick="nearbyGo('https://api.mapbox.com/styles/v1/edgerealty/clw0s1vay018p01pch2jq50uk.html?title=false&access_token=pk.eyJ1IjoiZWRnZXJlYWx0eSIsImEiOiJjbGNvcnE3eDgwYzBvM3JsYTB4dXpxa3I3In0.prc7SeJwtNYofG3O-fv61w&zoomwheel=false#10.61/25.1401/55.3022/307.5/4')">
                        <span>
                            <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                                width="15.000000pt" height="15.000000pt" viewBox="0 0 90.000000 90.000000"
                                preserveAspectRatio="xMidYMid meet">
                                <g transform="translate(0.000000,90.000000) scale(0.100000,-0.100000)"
                                fill="#fff" stroke="none">
                                <path d="M277 803 c-17 -16 1 -44 124 -194 l131 -159 -132 -160 c-79 -97 -130
                                -167 -128 -178 2 -13 15 -18 53 -20 l50 -2 143 174 c78 96 142 180 142 186 0
                                6 -64 89 -142 185 l-143 175 -46 0 c-25 0 -49 -3 -52 -7z"/>
                                </g>
                            </svg>
                            Malls</span>
                    </button>
                </div>
                <div class="col-md-3">
                    <button class="brochure_anime btn rounded-0 btn-block p-4" style=" font-size: 20px;" onclick="nearbyGo('https://api.mapbox.com/styles/v1/edgerealty/clw0onnns00z901pf2v4u4vof.html?title=false&access_token=pk.eyJ1IjoiZWRnZXJlYWx0eSIsImEiOiJjbGNvcnE3eDgwYzBvM3JsYTB4dXpxa3I3In0.prc7SeJwtNYofG3O-fv61w&zoomwheel=false#10.98/25.1311/55.297/307.5')">
                        <span>
                            <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                                width="15.000000pt" height="15.000000pt" viewBox="0 0 90.000000 90.000000"
                                preserveAspectRatio="xMidYMid meet">
                                <g transform="translate(0.000000,90.000000) scale(0.100000,-0.100000)"
                                fill="#fff" stroke="none">
                                <path d="M277 803 c-17 -16 1 -44 124 -194 l131 -159 -132 -160 c-79 -97 -130
                                -167 -128 -178 2 -13 15 -18 53 -20 l50 -2 143 174 c78 96 142 180 142 186 0
                                6 -64 89 -142 185 l-143 175 -46 0 c-25 0 -49 -3 -52 -7z"/>
                                </g>
                            </svg>
                            Restaurants</span>
                    </button>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-md-6">
                    <button class="brochure_anime btn rounded-0 btn-block p-4" style=" font-size: 20px;" onclick="nearbyGo('https://api.mapbox.com/styles/v1/edgerealty/clw0owpmg02fe01qzge68hxzc.html?title=false&access_token=pk.eyJ1IjoiZWRnZXJlYWx0eSIsImEiOiJjbGNvcnE3eDgwYzBvM3JsYTB4dXpxa3I3In0.prc7SeJwtNYofG3O-fv61w&zoomwheel=false#10.74/25.122/55.307/307.5')">
                        <span>
                            <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                                width="15.000000pt" height="15.000000pt" viewBox="0 0 90.000000 90.000000"
                                preserveAspectRatio="xMidYMid meet">
                                <g transform="translate(0.000000,90.000000) scale(0.100000,-0.100000)"
                                fill="#fff" stroke="none">
                                <path d="M277 803 c-17 -16 1 -44 124 -194 l131 -159 -132 -160 c-79 -97 -130
                                -167 -128 -178 2 -13 15 -18 53 -20 l50 -2 143 174 c78 96 142 180 142 186 0
                                6 -64 89 -142 185 l-143 175 -46 0 c-25 0 -49 -3 -52 -7z"/>
                                </g>
                            </svg>
                            Communities</span>
                    </button>
                </div>
                <div class="col-md-6">
                    <button class="brochure_anime btn rounded-0 btn-block p-4" style=" font-size: 20px;" onclick="nearbyGo('https://api.mapbox.com/styles/v1/edgerealty/clw0s211402gx01qph60882ts.html?title=false&access_token=pk.eyJ1IjoiZWRnZXJlYWx0eSIsImEiOiJjbGNvcnE3eDgwYzBvM3JsYTB4dXpxa3I3In0.prc7SeJwtNYofG3O-fv61w&zoomwheel=false#10.3/25.1291/55.3291/307.5')">
                        <span>
                            <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                                width="15.000000pt" height="15.000000pt" viewBox="0 0 90.000000 90.000000"
                                preserveAspectRatio="xMidYMid meet">
                                <g transform="translate(0.000000,90.000000) scale(0.100000,-0.100000)"
                                fill="#fff" stroke="none">
                                <path d="M277 803 c-17 -16 1 -44 124 -194 l131 -159 -132 -160 c-79 -97 -130
                                -167 -128 -178 2 -13 15 -18 53 -20 l50 -2 143 174 c78 96 142 180 142 186 0
                                6 -64 89 -142 185 l-143 175 -46 0 c-25 0 -49 -3 -52 -7z"/>
                                </g>
                            </svg>
                            Highways</span>
                    </button>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Pricing tables end -->

    <div class="h-[600px]">
        <iframe width='100%' height='100%' id="mapbox_src" src="https://api.mapbox.com/styles/v1/edgerealty/clw0mp6v800z301pf63yz2hfr.html?title=false&access_token=pk.eyJ1IjoiZWRnZXJlYWx0eSIsImEiOiJjbGNvcnE3eDgwYzBvM3JsYTB4dXpxa3I3In0.prc7SeJwtNYofG3O-fv61w&zoomwheel=false#12.22/25.13142/55.35794" title="ESNAAD Dubai" style="border:none;"></iframe>
    </div>



    <script>
        function nearbyGo(loc) {
            document.getElementById('mapbox_src').src = loc;
        }
    </script>
</div>

