{{--  Global site tag (gtag.js) - Google Analytics  --}}
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-34325591-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag("js", new Date());

  gtag("config", "UA-34325591-1");
</script>


{{--  Main javascript  --}}
<script src="{{ asset('js/bundle.js') }}"></script>

{{--  Other footer stuffs  --}}
{{ @$_footer }}