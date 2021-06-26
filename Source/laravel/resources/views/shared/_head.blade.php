<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="canonical" href="{{ url('docs') }}" />

{{--  Site Icon  --}}
<link rel="shortcut icon" href="{{ url('img/iglogo.svg') }}" type="image/svg+xml" />
<link rel="apple-touch-icon" sizes="180x180" href="{{ url('img/icons/apple-touch-icon.png') }}">
<link rel="icon" type="image/png" sizes="32x32" href="{{ url('img/icons/favicon-32x32.png') }}">
<link rel="icon" type="image/png" sizes="16x16" href="{{ url('img/icons/favicon-16x16.png') }}">
<link rel="manifest" href="{{ url('img/icons/site.webmanifest') }}">
<link rel="mask-icon" href="{{ url('img/icons/safari-pinned-tab.svg') }}" color="#0776db">
<meta name="msapplication-TileColor" content="#353535">
<meta name="theme-color" content="#27292a">

{{--  For Search Indexing  --}}
<meta name="robots" content="index, follow">
<meta name="author" content="{{ @$_author }}">
<meta name="Search Engines" content="www.google.com, www.google.com.vn, www.yahoo.com, www.bing.com">
<meta name="revisit-after" content="1 hour">

{{--  Google Site  --}}
<meta name="google-site-verification" content="lwIlMXm2pAq31HiJyaVJH-BXTwIqPP2rFv4L6P4DTXU" />

{{--  Perf optimization  --}}
<link rel="preconnect" href="https://srv.carbonads.net">
<link rel="preconnect" href="https://www.google-analytics.com">

{{--  Site info  --}}
<title>{{ @$_title }}</title>
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

{{-- StackCommerce ads 
<script async src="https://securepubads.g.doubleclick.net/tag/js/gpt.js"></script>
<script>
  window.googletag = window.googletag || {cmd: []};
  googletag.cmd.push(function() {
    googletag.defineSlot('/7346874/Hellobar-adunits/7481', [1, 1], 'div-gpt-ad-1578609097069-0').addService(googletag.pubads());
    googletag.pubads().enableSingleRequest();
    googletag.enableServices();
  });
</script>
--}}

{{-- buysellads/carbon ads --}}
<script src="//m.servedby-buysellads.com/monetization.js" type="text/javascript"></script>


{{--  Other header stuffs  --}}
{{ @$_header }}
