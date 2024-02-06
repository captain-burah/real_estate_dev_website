<?php $actual_link = (empty($_SERVER['HTTPS']) ? 'http' : 'https') . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>



<div class="mx-0 px-0 ">
    <div class="mx-0">
        <button onclick="openModal('mymodalcentered-community-register')" class="w-full bg-black border-black text-lg text-white font-semibold py-4 px-2 rounded-0" type="button">
            Register Your Interest
        </button>
    </div>
</div>


<dialog id="mymodalcentered-community-register" class="bg-transparent relative w-screen h-screen">
    <div class="p-2 flex justify-center items-center fixed left-0 top-0 w-full h-full bg-black bg-opacity-80 transition-opacity duration-300 opacity-0">
        <div class="bg-white flex rounded-0 w-full relative">

            <div class="flex flex-col items-start w-full hidden" id="form_submitted">
                <div class="p-7 flex items-stretch w-full">
                    <svg onclick="modalClose('mymodalcentered-community-register')" class="ml-auto fill-current text-gray-700 w-5 h-5 cursor-pointer" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 18">
                        <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z" />
                    </svg>
                </div>
                <div class="flex flex-col items-start w-full">
                    <div class="rounded-lg  px-16 py-14">
                        <div class="flex justify-center">
                        <div class="rounded-full bg-green-200 p-6">
                            <div class="flex h-16 w-16 items-center justify-center rounded-full bg-green-500 p-4">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-8 w-8 text-white">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                                </svg>
                            </div>
                        </div>
                        </div>
                        <h3 class="my-4 text-center text-3xl font-semibold text-gray-700">Successful!</h3>
                        <p class="w-[100%] text-center font-normal text-gray-600">
                            Thank you for submitting your information. One of our representatives will contact you soon on your enquiry.
                        </p>
                    </div>
                </div>
            </div>
            
            <div class="flex flex-col items-start w-full" id="form_ready">
                <div class="p-4 flex items-stretch w-full">
                    <div class="font-thin text-xl text-gray-900">Register Your Interest</div>
                    <svg onclick="modalClose('mymodalcentered-community-register')" class="ml-auto fill-current text-gray-700 w-5 h-5 cursor-pointer" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 18">
                        <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z" />
                    </svg>
                </div>
                <div class="p-4 w-full hidden" id="projectInquiryCompletedForm">
                    <p class="text-black my-5 w-full text-xl text-center">
                        Thank You!
                    </p>
                    <p class="text-black my-5 w-full text-center">
                        Our real estate agents will be in touch with you shortly
                        {{-- An email with the details for your inquiry will be sent to the email address you provided --}}
                    </p>
                    {{-- <p class="text-gray-500 text-xs my-2 w-full text-left" >
                        *Please don't forget to look in your spam or junk folder just in case
                    </p> --}}
                </div>
                <form id="new-project-details-desktop-form" method="post" action="en/project-detail-inquiry" class="w-full">
                    @csrf
                    <div class="px-4  w-full" style="max-height: 40vh;">
                        <input type="hidden" id="project" name="project" value="{{$name}}">
                        <input type="hidden" id="country_code" name="country_code">
                        <input type="hidden" id="url" name="url" value="{{$actual_link}}">

                        <div class="mb-6">
                            <input type="text" id="name" name="name" class="w-full px-4 py-2 border rounded-0 focus:outline-none focus:ring-2 focus:ring-gray-500" placeholder="Your Name"  required>
                        </div>

                        <div class="mb-6">
                            <input type="email" id="email" name="email" class="w-full px-4 py-2 border rounded-0 focus:outline-none focus:ring-2 focus:ring-gray-500" placeholder="Email Address" required>
                        </div>

                        <div class="mb-6">
                            <input type="tel" id="phone" name="phone" class="w-max px-4 py-2 border rounded-0 focus:outline-none focus:ring-2 focus:ring-gray-500" placeholder="Phone" style="width: 100% !important" required>
                        </div>
                    </div>

                    <div class="p-4 flex justify-end items-center w-full">
                        <button type="button" onclick="modalClose('mymodalcentered-community-register')" class="bg-transparent hover:bg-black text-black font-semibold hover:text-white py-2 px-4 border border-black hover:border-transparent rounded-0"   >
                            Close
                        </button>
                        <button type="  " class="bg-black hover:bg-white border border-black text-white hover:text-black font-bold py-2 px-4 rounded-0 ml-3">
                            Register Your Interest
                        </button> 
                    </div>
                </form>
            </div>
        </div>
    </div>
</dialog>



<script>
    function myFunction() {
        // Get the text field
        var copyText = document.getElementById("myInput");

        // Select the text field
        copyText.select();
        copyText.setSelectionRange(0, 99999); // For mobile devices

        // Copy the text inside the text field
        navigator.clipboard.writeText(copyText.value);
    }
</script>

@section('form1')
    {{-- INTEL INPUT --}}
    <script>

        var input = document.querySelector("#phone");

        const iti = window.intlTelInput(input, {

            initialCountry: "auto",

            separateDialCode: true,

            // utilsScript: "/build/js/utils.js", // for editing placeholders

            geoIpLookup: function(success) {

                fetch("https://api.ipdata.co/?api-key=1f9ecc1670c915b3ddd397d233297968ccf720c0861abf9ecac1a8ef")
                .then(function(response) {
                    if (!response.ok) return success("");
                    return response.json();
                })
                .then(function(ipdata) {
                    success(ipdata.country_code);
                });
            },
        });

        input.addEventListener("countrychange", function() {
            // console.log(document.getElementById('phone').value);
            console.log(document.querySelector('[name="phone"]').value);
            document.getElementById('country_code').value = iti.getSelectedCountryData().dialCode;
        })
    </script>

    {{-- FORM SUBMIT INTEREST --}}
    <script>
        $(document).ready(function () {
            /**
             * INITIATE HEADERS WITH CSRF TOKENIZATION
             * FOR FORM SUBMISSION
             */
            // Function to set a cookie
            function setCookie(name, value, daysToExpire) {
                var expires = "";
                
                if (daysToExpire) {
                    var date = new Date();
                    date.setTime(date.getTime() + (daysToExpire * 5 * 60 * 1000));
                    expires = "; expires=" + date.toUTCString();
                }
                
                document.cookie = name + "=" + value + expires + "; path=/";
            };
            
            // Function to get a cookie
            function getCookie(cookieName) {
                var name = cookieName + "=";
                var decodedCookie = decodeURIComponent(document.cookie);
                var cookieArray = decodedCookie.split(';');

                for (var i = 0; i < cookieArray.length; i++) {
                    var cookie = cookieArray[i].trim();
                    if (cookie.indexOf(name) === 0) {
                        return cookie.substring(name.length, cookie.length);
                    }
                }

                return null; // Return null if the cookie is not found
            };

            if (getCookie('_q2vWT4junrLR')) {
                var successView = document.getElementById("form_ready");
                successView.classList.add("hidden");

                var formView = document.getElementById("form_submitted");
                formView.classList.remove("hidden");
            } else {
                $('#new-project-details-desktop-form').on('submit', function(e){

                    /**
                     * INITIATE AN AJAX SCRIPT FOR THE FORM SUBMISSION
                     * ALONG WITH POST ROUTE METHOD AND URL. IF RESPONSE
                     * IS A SUCCESS DISPLAY THE THANK YOU MODAL AND
                     * UPDATE THE FORM SESSION IN SESSION-STORAGE OF BROWSER
                     *
                    */
                    e.preventDefault(); //---cancel default form submissions
                    var formData = new FormData(this); //---get alll the form data here
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="XSRF-TOKEN"]').attr('content')
                        }
                    });
                    $.ajax({
                        type:'POST',
                        headers: //---set the headers for cross-origin policies between domains
                        {
                            'X-CSRF-TOKEN': $('meta[name="XSRF-TOKEN"]').attr('content'),
                            'Access-Control-Allow-Origin': 'https://esnaad.com/en/project-detail-inquiry'
                        },
                        url: "/en/project-detail-inquiry",
                        data: formData,
                        processData: false,
                        contentType: false,
                        success:function(data) 
                        {
                            if($.isEmptyObject(data.error)){ //---if success
                                setCookie("_q2vWT4junrLR", true, 1); //---set a cookie
                                document.location.href = '/en/project-details/thanks'; //---redirect to thank you page for seo
                            }else{
                                printErrorMsg(data.error);//---show error
                            }
                        }
                    });

                });
            }
            
            
        });
    </script>

@endsection


