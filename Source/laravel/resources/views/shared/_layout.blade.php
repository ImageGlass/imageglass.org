<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" data-page="xxxxxx">
<head>
    @include("shared._head")
</head>
<body>
    
    @include("shared._body_header")

	<section id="body">
		@yield("_body_content")
	</section>

	@include("shared._body_footer")

    <h1 hidden>
        ImageGlass is a lightweight, versatile image viewing application that is designed to take the place of Photo Viewer in Windows 10, 8, 7 and Vista, especially those installations that may have trouble displaying PNG and GIF files in Photo Viewer.
    </h1>

    @include("shared._foot")
</body>
</html>