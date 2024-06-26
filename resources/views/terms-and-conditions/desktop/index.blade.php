@extends('layoutv2.master')
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
@section('luxe_asset_css')

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@18.1.1/build/css/intlTelInput.css">

    <script src="https://cdn.jsdelivr.net/npm/intl-tel-input@18.1.1/build/js/intlTelInput.min.js"></script>

    <style>

        .iti {
            width: 100% !important;
        }
        .iti__flag-container{
            overflow: visible;
        }
    </style>
@endsection

@section('content')
    @notmobile
        <section class="my-0">
            @include('terms-and-conditions.desktop.header')
        </section>

        <section class="m-0" cl>
            @include('terms-and-conditions.desktop.body')
        </section>
    @endnotmobile
@endsection

@section('luxe_asset_js')

@endsection

