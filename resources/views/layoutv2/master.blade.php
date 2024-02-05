<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

        <!-- Meta -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <link rel="shortcut icon" href="{{ asset('favicon.png') }}">
        
        <?php
            $route_name = request()->route()->getName();
            $currentUrl = request()->url();
            $segments = explode('/', $currentUrl);
            $nameBeforeSlug = $segments[count($segments) - 2];
        ?>
        
        @if($nameBeforeSlug == 'developments')
            <title>{{$jsonSEOData['title_en']}}</title>
            <meta name="description" content="{{$jsonSEOData['description_en']}}" />
            <meta name="keywords" content="{{$jsonSEOData['keywords_en']}}" />
        @else
            @if(isset($jsonSEOData))
                <title>{{$jsonSEOData['title_en']}}</title>
                <meta name="description" content="{{$jsonSEOData['description_en']}}" />
                <meta name="keywords" content="{{$jsonSEOData['keywords_en']}}" />
            @endif
        @endif

        <!-- Social Media Links -->
        <!-- <meta property="og:title" content="{{$jsonSEOData['title_en']}}">
        <meta property="og:description" content="{{$jsonSEOData['description_en']}}">
        <meta property="og:image" content="URL to your main website image"> -->

        <!-- Facebook -->
        <meta property="og:url" content="URL to your website">
        <meta property="og:type" content="website">
        <meta property="fb:app_id" content="Your Facebook App ID">

        <!-- Twitter -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:site" content="@YourTwitterHandle">
        <meta name="twitter:creator" content="@YourTwitterHandle">

        <!-- Instagram -->
        <meta property="og:instagram" content="YourInstagramUsername">

        <!-- LinkedIn -->
        <meta property="og:linkedin" content="YourLinkedInProfileURL">

        <!-- Pinterest -->
        <meta property="og:pinterest" content="YourPinterestUsername">

        <!-- YouTube -->
        <meta property="og:youtube" content="YourYouTubeChannelURL">



        {{-- Canonical Links --}}
        @php
            // Get the current URL without the query string
            $baseUrl = url()->current();
            header("Cache-Control: max-age=2592000");

            // Check if the current page is the first page
            if (!request()->has('page') || request()->get('page') == 1) {

                $current_url_2 = $_SERVER['REQUEST_URI'];

                if (strpos($current_url_2, 'en') !== false) {
                    $langhref = 'en';
                    $rel_type = 'canonical';
                } 
                elseif (strpos($current_url_2, 'ru') !== false) {
                    $langhref = 'ru';
                    $rel_type = 'canonical';
                } 
                elseif (strpos($current_url_2, 'ar') !== false) {
                    $langhref = 'ar';
                    $rel_type = 'canonical';
                } 
                else {
                    $langhref = 'x-default';
                    $rel_type = 'canonical';
                }
                $canonicalUrl = $baseUrl; // Use the base URL for the first page
            } 
            else {
                $current_url_2 = $_SERVER['REQUEST_URI'];

                if (strpos($current_url_2, 'en') !== false) {
                    $langhref = 'en';
                    $rel_type = 'canonical';
                } 
                elseif (strpos($current_url_2, 'ar') !== false) {
                    $langhref = 'ar';
                    $rel_type = 'canonical';
                } 
                else {
                    $langhref = 'x-default';
                    $rel_type = 'canonical';
                }
                $canonicalUrl = $baseUrl . '?page=' . request()->get('page'); // Append the page query parameter
            }                
        @endphp

        <link rel="{{$rel_type}}" href="<?php echo $canonicalUrl;?>" hreflang="{{$langhref}}">

        <script type="application/ld+json" >
			[{"@context":"https://schema.org","@type":"Organization","@id":"https://esnaad.com","name":"ESNAAD Real Estate Development","url":"https://esnaad.com","sameAs":[],"logo":{"@type":"ImageObject","url":"https://www.esnaad.com/public/logo-dark-2.png","width":"184","height":"35"}}]</script>



        <script type="application/ld+json">{
			"@context": "http://schema.org",
			"@type": "SiteNavigationElement",
			"name": [
				"Home",
				"Our Developments",
				"Why Invest In Dubai?",
				"Construction Updates",
				"Our Communities",
				"NEWS Updates",
				"Careers",  
				"About ESNAAD",
				"Contact Us"
			],
			"url": [
				"https://esnaad.com",
				"https://www.esnaad.com/en/projects",
				"https://www.esnaad.com/en/invest-in-dubai",
				"https://www.esnaad.com/en/constructions",
				"https://www.esnaad.com/en/communities
				"https://www.esnaad.com/en/news",
				"https://www.esnaad.com/en/careers",
				"https://www.esnaad.com/en/about-us",
				"https://www.esnaad.com/en/contact"
			]
		}</script>


        <style>
            html,body{
                background-color: #fff !important;
                max-width: 100%;
                overflow-x: hidden;
            }

            @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
            
            @font-face {
                font-family: 'OptimaNew';
                font-style: normal;
                font-weight: lighter;
                src: local('OptimaNew'), url('front/fonts/Optima/OptimaLTPro-Roman.otf') format('otf');
            }

            @font-face {
                font-family: 'Optima';
                font-style: lighter;
                font-weight: normal;
                src: local('Optima'), url('front/fonts/OPTIMA.woff') format('woff');
            }

            @font-face {
                font-family: 'Optima Italic';
                font-style: normal;
                font-weight: normal;
                src: local('Optima Italic'), url('front/fonts/Optima_Italic.woff') format('woff');
            }


            @font-face {
                font-family: 'Optima Medium';
                font-style: normal;
                font-weight: normal;
                src: local('Optima Medium'), url('front/fonts/Optima Medium.woff') format('woff');
            }


            @font-face {
                font-family: 'Optima Bold';
                font-style: normal;
                font-weight: normal;
                src: local('Optima Bold'), url('front/fonts/OPTIMA_B.woff') format('woff');
            }
            
            @font-face {
                font-family: 'Optima LT W02 Roman';
                font-style: normal;
                font-weight: normal;
                src: url("https://db.onlinewebfonts.com/t/c78d5ac2e0567f3d7abc24629e42741f.eot");
                src: url("https://db.onlinewebfonts.com/t/c78d5ac2e0567f3d7abc24629e42741f.eot?#iefix")format("embedded-opentype"),
                url("https://db.onlinewebfonts.com/t/c78d5ac2e0567f3d7abc24629e42741f.woff2")format("woff2"),
                url("https://db.onlinewebfonts.com/t/c78d5ac2e0567f3d7abc24629e42741f.woff")format("woff"),
                url("https://db.onlinewebfonts.com/t/c78d5ac2e0567f3d7abc24629e42741f.ttf")format("truetype"),
                url("https://db.onlinewebfonts.com/t/c78d5ac2e0567f3d7abc24629e42741f.svg#Optima LT W02 Roman")format("svg");
            }
        </style>

        @vite(['resources/css/app.css', 'resources/js/app.js'])

        @yield('luxe_asset_css')

    </head>


    <body class="font-body bg-white" style="background-color: #fff !important;">

        <?php
            $uri_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
            $uri_segments = explode('/', $uri_path);
            $seg1 = $uri_segments[1];
            if($seg1 == 'en' || $seg1 == 'ar'){
                $langSeg = $uri_segments[1];
            }else{
                $langSeg = 'en';
            }
        ?>
        <?php
            $finalUrl = '/ar/home';
            $finalUrlen = '/en/home';
            $uri_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
            if($uri_path == '/' || $uri_path == '/home' ){
                $finalUrl = '/ar/home';
                $finalUrlen = '/en/home';
            } else {
                $uri_segments = explode('/', $uri_path);
                $seg1 = $uri_segments[1];
                if($seg1) {
                    if($seg1 == 'en'){
                        $replacements1 = array(1 => "en");
                        $replacements2 = array(1 => "ar");
                        $basket1 = array_replace($uri_segments, $replacements1);
                        $basket2 = array_replace($uri_segments, $replacements2);
                        $finalUrlen = implode("/",$basket1);
                        $finalUrl = implode("/",$basket2);

                    } elseif($seg1 == 'ar'){
                        $replacements1 = array(1 => "en");
                        $replacements2 = array(1 => "ar");
                        $basket1 = array_replace($uri_segments, $replacements1);
                        $basket2 = array_replace($uri_segments, $replacements2);
                        $finalUrlen = implode("/",$basket1);
                        $finalUrl = implode("/",$basket2);

                    }elseif($seg1 == 'ru'){
                        $replacements1 = array(1 => "en");
                        $replacements2 = array(1 => "ar");
                        $basket1 = array_replace($uri_segments, $replacements1);
                        $basket2 = array_replace($uri_segments, $replacements2);
                        $finalUrlen = implode("/",$basket1);
                        $finalUrl = implode("/",$basket2);
                    }
                }else{
                    $replacements2 = array(1 => "ar");
                    $basket = array_replace($uri_segments, $replacements2);
                    $finalUrl = implode("/",$basket);
                }
            }
        ?>
        <div class="min-h-screen ">

            @notmobile                
                <nav x-data="{ open: false }" class="bg-white p-0 m-0 z-50 shadow " id="sample" style="position: fixed; width: 100vw !important" >
                    @include('layout.navigation')
                </nav>
            @endnotmobile

            @mobile
                @include('layout.mobileNavigation2')
            @endmobile

            <div class="relative">
                @yield('content')
            </div>
            
            @include('layout.footer')

        </div>




</html>
