@extends("layouts._layout")
@section("_body_content")

@include("modules.release.release-highlight")
@include("modules.release.release-download")
@include("modules.release.release-screenshots")

<section class="bg-box-highlight text-center" id="donation">
    <div class="bg-box-highlight-content">
        <div class="container">
            @include("shared._donation")
        </div>
    </div>
</section>

@include("modules.release.release-changelog")

@stop