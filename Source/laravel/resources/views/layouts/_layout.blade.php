<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" data-page="{{ @$_page }}">
<head>
    @include("shared._head")
</head>
<body>
    
    @include("shared._body_header")

	<section id="body">
        @include("shared._blog-post-new")

		@yield("_body_content")
	</section>

	@include("shared._body_footer")

    <h1 hidden>
        {{ @$_h1 }}
    </h1>

    @include("shared._foot")
</body>
</html>