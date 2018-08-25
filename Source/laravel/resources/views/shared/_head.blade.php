<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

{{--  Site Icon  --}}
<link rel="shortcut icon" href="{{ url('images/iglogo512.png') }}" />
<link rel="icon" href="{{ url('images/iglogo16.png') }}" type="image/png"/>
<link rel="canonical" href="{{ url('documentation') }}" />

{{--  For Search Indexing  --}}
<meta name="robots" content="index, follow">
<meta name="author" content="{{ @$_author }}">
<meta name="Search Engines" content="www.google.com, www.google.com.vn, www.yahoo.com, www.bing.com">
<meta name="revisit-after" content="1 hour">

{{--  Google Site  --}}
<meta name="google-site-verification" content="lwIlMXm2pAq31HiJyaVJH-BXTwIqPP2rFv4L6P4DTXU" />

{{--  Site info  --}}
<title>{{ $_title }}</title>
<meta name="description" content="{{ @$_description }}">
<meta name="keywords" content="{{ @$_keywords }}">


{{--  Open Graph Article  --}}
<meta property="og:type" content="article">
<meta property="og:title" content="{{ @$_title }}">
<meta property="og:url" content="{{ urldecode(Request::url()) }}">
<meta property="og:image" content="{{ @$_thumbnail }}">
<meta property="og:image:alt" content="{{ @$_title }}" />
<meta property="og:site_name" content="{{ @$_sitename }}" />
<meta property="og:description" content="{{ @$_description }}" />
<meta property="article:tag" content="{{ @$_keywords }}" />
<meta property="article:author" content="{{ @$_author }}">

{{--  Facebook info  --}}
<meta property="fb:admins" content="100000190054499" />
<meta property="fb:app_id" content="435065586551768"/>

{{--  iOS icon  --}}
<meta name="apple-mobile-web-app-title" content="ImageGlass" />
<meta name="application-name" content="ImageGlass" />

{{--  Laravel CSRF Token  --}}
<meta name="csrf-token" content="{{ csrf_token() }}">
<script>window.Laravel = { csrfToken: '{{ csrf_token() }}' }</script>

{{--  Base CSS  --}}
<link rel="stylesheet" href="{{ asset('css/main.css') }}">


{{--  Other header stuffs  --}}
{{ @$_header }}
