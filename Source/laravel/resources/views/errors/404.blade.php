@php
    $_page = "error.404";
    $_title = "Error 404 | ImageGlass";
    $_description = "Sorry, the page you are looking for could not be found.";
@endphp

@extends("layouts._layout_listing")
@section("_page_title")
    Error {{ $exception->getStatusCode() }} 🙄
@stop

@section("_page_subtitle")
    Sorry, the page you are looking for could not be found.

    <div class="col-lg-10 col-xl-9 col-xxl-8 col-hg-12 mb-0 mt-4">
        <div class="row">
            <div class="col-md-8 col-lg-7 col-xl-6 col-xxl-5 col-hg-3 mb-0">
                @include("shared._ads")
            </div>
        </div>
    </div>
@stop


@section("_article_list")

<div class="row justify-content-end" style="margin-top: -100px;">
    <div class="col-10 col-md-8 col-lg-7 col-xl-6 col-xxl-5 col-hg-4">

        {{-- Source: https://codepen.io/sdras/pen/doZReX --}}

        <svg id="error404SVG" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 642.1 646.6">
            <g id="moon">
                <circle fill="#f3ba2a" cx="305.5" cy="350.4" r="135.7" />
                <circle fill="#ffce52" cx="291.1" cy="333.7" r="105.4" />
                <circle fill="#ffce52" cx="346.2" cy="253.8" r="25.4" />
                <circle fill="#ffce52" cx="406.3" cy="325.9" r="24.5" />
                <circle fill="#ffce52" cx="247.8" cy="419.6" r="27.6" />
                <circle fill="#ffde8d" cx="338.9" cy="249.5" r="17.7" />
                <circle fill="#ffde8d" cx="400.9" cy="323.7" r="19.1" />
                <circle fill="#ffde8d" cx="273.5" cy="320.1" r="18.7" />
                <circle fill="#ffde8d" cx="245.3" cy="415.9" r="20.7" />
                <circle fill="#ffde8d" cx="217.5" cy="282.2" r="7.1" />
                <circle fill="#ffde8d" cx="337.5" cy="361.5" r="6.9" />
                <circle opacity=".52" fill="#ffce52" cx="374.5" cy="437.2" r="12.4" />
            </g>
            <g id="astronaut">
                <ellipse opacity=".19" fill="#1A222D" cx="297.7" cy="225.2" rx="40.7" ry="10" />
                <circle fill="#9B835C" cx="270.1" cy="179.8" r="4.8" />
                <circle fill="#9B835C" cx="318.9" cy="202" r="4.8" />
                <path fill="#86878E" d="M321 184.5c-.7-6.4-10.6-8.2-10.6-8.2s-11.1 1.1-18.1.7c-6.7-.4-9.7 5.5-10 6.1-5 2.9-7.9-4.9-7.9-4.9l-7.9 7.8c6.7 7.9 6.4 10.2 11.1 11.8 2 .7 4.6-.4 7-1.9l.2.9.2 5.7 1.6 17.4h11.6l2.6-15 1.9 15h9.9l3.3-17 7.9-2.2c0 .1-2.1-9.8-2.8-16.2z" />
                <circle id="head" class="drop" fill="#93959E" cx="300.9" cy="158.7" r="20.2" />
                <path id="mask" opacity=".57" fill="#1A222D" d="M310.7 163.7c.5-1.4.8-3 .8-4.6 0-7.3-5.9-13.3-13.3-13.3s-13.3 5.9-13.3 13.3c0 1.5.3 3 .7 4.3 4 1.9 13.2 5 25.1.3z" />
                <g fill="#575C66">
                    <path d="M286.9 217c-2.3.8-3.9 2.4-3.9 4.1 0 2.7 3.5 4.8 7.7 4.8 4.3 0 7.7-2.1 7.7-4.8 0-.7-.3-1.4-.7-2-5.7 2.3-10.8-2.1-10.8-2.1zM313.2 216.3c-2.3 3-8 2.9-10.3 2.7-.3.5-.4 1-.4 1.6 0 2.7 3.3 4.8 7.4 4.8s7.4-2.1 7.4-4.8c0-1.9-1.7-3.5-4.1-4.3zM286.1 217zM313.3 216.2h-.1c-.1.1 0 .1.1 0-.1 0-.1 0 0 0z" />
                </g>
                <ellipse fill="#afb0b8" cx="300.5" cy="190.6" rx="11.1" ry="8.8" />
                <path fill="#93959E" d="M267.1 153.6h2.4V226h-2.4z" />
                <ellipse transform="matrix(.9 .436 -.436 .9 103.474 -100.119)" fill="#9B835C" cx="269.8" cy="175.3" rx="3" ry="1.4" />
                <path fill="#d80027" d="M235.7 143.7h33.8V166h-33.8z" />
                <path fill="#ffda44" d="M252.3 147.1l2.2 4.5 5 .7-3.6 3.5.9 5-4.5-2.4-4.4 2.4.8-5-3.5-3.5 4.9-.7z" />
            </g>
            <g id="stars" opacity=".31" fill="#D2D3D4">
                <circle cx="71" cy="74.4" r="6" />
                <circle cx="503" cy="175.4" r="6" />
                <circle opacity=".49" cx="461" cy="38.4" r="6" />
                <circle cx="108" cy="455.4" r="6" />
                <circle cx="65" cy="579.4" r="6" />
                <circle cx="531" cy="455.4" r="6" />
                <circle opacity=".44" cx="461" cy="607.4" r="6" />
                <circle opacity=".44" cx="136" cy="225.4" r="6" />
            </g>
            <g id="cow">
                <path class="legl" fill="#B9B9BA" d="M275.1 90.6l-15.2 6.5s-3.7 3 0 2.8c3.7-.2 17.9-2.8 17.9-2.8l-2.7-6.5z" />
                <path fill="#D2D3D4" d="M267.9 46.7s13.1-3.7 15.3 5.9c0 0 5 17.5 0 22.5 0 0-10.9 5.9-18.1 0 0 0-3.4-1.9-3.1-8.7s1.5-19 5.9-19.7z" />
                <path fill="#93959E" d="M281.7 49.8s7.1 1.6 9.3 0c2.2-1.6 0 3.7 0 3.7s-5 4.7-7.2 2.8c-2.2-1.8-2.1-6.5-2.1-6.5z" />
                <path fill="#D2D3D4" d="M266.7 50.3s-7.1 1.6-9.3 0c-2.2-1.6 0 3.7 0 3.7s5 4.7 7.2 2.8c2.1-1.8 2.1-6.5 2.1-6.5z" />
                <path fill="#93959E" d="M273.1 46s3 19.5 12.2 16.7c0 0 .4-18.5-12.2-16.7z" />
                <circle fill="#93959E" cx="276.9" cy="64.1" r="1.2" />
                <circle fill="#93959E" cx="269.9" cy="64.2" r="1.1" />
                <path class="legl" fill="#D2D3D4" d="M276.3 95.3l-16.5 7s-4 3.3 0 3c4-.2 19.4-3 19.4-3l-2.9-7z" />
                <path class="legr" fill="#B9B9BA" d="M331.4 89.2l15.2 6.5s3.7 3 0 2.8c-3.7-.2-17.9-2.8-17.9-2.8l2.7-6.5z" />
                <path class="legr" fill="#D2D3D4" d="M330.2 93.9l16.5 7s4 3.3 0 3-19.4-3-19.4-3l2.9-7z" />
                <path fill="#D2D3D4" d="M273.1 81.2s-5.1-23.8 45.7-19.4c0 0 17.3 4.2 16.1 22.4S330 101 330 101l-53.1 1.2s-1-2.2-1.9-5.4c-1.5-4.3-2.9-10.6-1.9-15.6z" />
                <path fill="#D6AA51" d="M267.9 49.9c-.9.3-1.9-.2-2.2-1.1l-1.2-3.6c-.3-.9.2-1.9 1.1-2.2.9-.3 1.9.2 2.2 1.1l1.2 3.6c.3.9-.2 1.9-1.1 2.2zM278.8 49.6c-.9-.3-1.4-1.3-1.1-2.2l1.2-3.6c.3-.9 1.3-1.4 2.2-1.1.9.3 1.4 1.3 1.1 2.2l-1.2 3.6c-.3.9-1.3 1.4-2.2 1.1z" />
                <path fill="#E0715D" d="M262 70.1s13.7-4.1 23.3 0c0 0 .9 7-9.6 8.1 0 0-12.7 2.3-13.7-8.1z" />
                <path fill="#D6AA51" d="M276.3 74.8c-.3 0-.6-.3-.6-.6v-2.6c0-.3.3-.6.6-.6s.6.3.6.6v2.6c0 .3-.3.6-.6.6zM270.5 75c-.3 0-.6-.3-.6-.6v-2.6c0-.3.3-.6.6-.6s.6.3.6.6v2.6c0 .3-.3.6-.6.6z" />
                <path fill="#93959E" d="M293.9 62.6s-1.8 9.1 6.4 7.5c8.2-1.6 8.6 3.6 8.6 3.6s8.9 1.2 6.1-3.3c-2.8-4.4-3.8-9-3.8-9s-14.6-1.9-17.3 1.2zM273.4 85.1s3.4-7.7 5.8-1.3c2.3 6.4 9.7 6.3 10.2 6s9.7 5.5-.1 6c-9.8.5-14.9 0-14.9 0s-2.2-9.5-1-10.7zM333.7 75s-16.9 7.6-10 9.1c7.1 1.5 5 6.6 5 6.6s4.5 3.4 5.8-1.4c1.6-5.9-.2-12.9-.8-14.3zM310.3 90.6s.7-13.5 4.9-7.2 1.5 14.1 5.6 11.8c4.2-2.3 0 6.1 0 6.1l-14.1.3c.1 0-6.3-8.9 3.6-11zM290.6 79.1s1.2-4.5 3.9-1.5c2.7 2.9 4.3 2.8 4.9 2.8s3.8 6.5-1 5.2-7.7-1.1-7.9-.7c-.1.3-6.2-.4.1-5.8zM330.5 69.3l18.5-2v1.1L331.1 71z" />
                <path fill="#626368" d="M347.5 66.3l4-4.4-1.3 2.9 1.3-.6-.8 2.1 1.9 1-2 1.9 1.5 2-4.9-2z" />
                <ellipse fill="none" stroke="#D6AA51" stroke-miterlimit="10" cx="273.6" cy="42" rx="15.6" ry="6" />
                <circle opacity=".19" fill="#93959E" cx="273.3" cy="57" r="28.7" />
            </g>
        </svg>

    </div>
</div>
@stop