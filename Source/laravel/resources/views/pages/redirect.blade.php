@extends("layouts._layout_listing")
@section("_page_title")
    Downloading {{ @$download_name }} <span id="loader">...</span> <span class="icon-rocket">🚀</span>
@stop

@section("_page_subtitle")
    Thank you!<br/>
    The download will start shortly, or you can click <a id="directUrl" href="{{ url($redirect_url) }}">here</a> for the direct link.<br/><br/>

    To support ImageGlass project, you may want to <br/>

    👉 <a href="https://crowdin.com/project/imageglass/invite" title="Translate ImageGlass" target="_blank" rel="noopener noreferrer">translate</a> language packs, <br/>
    👉 create <a href="{{ url("/themes") }}" target="_blank">theme packs</a>, <br/>
    👉 or <a href="https://www.paypal.me/d2phap" title="Donate ImageGlass" target="_blank" rel="noopener noreferrer">buy me a beer 🍺</a>.

    <div class="col-lg-10 col-xl-9 col-xxl-8 col-hg-12 mb-0 mt-4">
        <div class="row">
            <div class="col-md-8 col-lg-7 col-xl-6 col-xxl-5 col-hg-3 mb-0">
                @include("shared._ads")
            </div>
        </div>
    </div>
@stop