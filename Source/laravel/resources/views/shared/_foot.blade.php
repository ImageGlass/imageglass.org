{{--  Global site tag (gtag.js) - Google Analytics  --}}
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-34325591-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag("js", new Date());

  gtag("config", "UA-34325591-1");
</script>

{{-- UXSniff Script --}}
<script>
  (function(u,x,s,n,i,f){
      u.ux=u.ux||function(){(u.ux.q=u.ux.q||[]).push(arguments)};
      u._uxSettings={uxid:'150402573-1',uxv:'U'};
      i=x.getElementsByTagName('head')[0];
      f=x.createElement('script');f.async=1;
      f.src=s+n+u._uxSettings.uxv+'A-'+u._uxSettings.uxid;
      i.appendChild(f);
  })(window,document,'https://s3-ap-southeast-1.amazonaws.com/uxsniff/uxsnf_track','.js?uxid=');
</script>


{{--  Main javascript  --}}
<script src="{{ asset('js/bundle.js') }}"></script>

{{--  Other footer stuffs  --}}
{{ @$_footer }}