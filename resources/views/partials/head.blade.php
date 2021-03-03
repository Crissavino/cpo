<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, height=device-height,  initial-scale=1.0, user-scalable=no,user-scalable=0"/>
@if($noIndex)
<meta name="robots" content="noindex,nofollow" />
@else
<meta name="robots" content="index, archive">
@endif
<meta property="og:type" content="website">
<meta property="og:title" content="Contrador de palabras online">
<meta property="og:url" content="https://contadordepalabrasonline.com/">
<meta property="og:site_name" content="Contador de palabras online">
<meta property="og:image" content="https://contadordepalabrasonline.com/favicon.png">
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:image:alt" content="Contador de palabras online">
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="shortcut icon" href="{{asset('favicon.ico')}}">

<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
<link href="css/styles.css" rel="stylesheet">
<link href="css/googleTemplate.css" rel="stylesheet">

<!-- Fonts -->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Lobster&family=Oswald&display=swap" rel="stylesheet">
<link rel="dns-prefetch" href="//fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Crimson+Text:ital,wght@0,400;0,600;0,700;1,400;1,600;1,700&display=swap"
      rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Arvo:wght@400;700&family=Source+Sans+Pro:wght@300;400&display=swap" rel="stylesheet">

<!-- Adsense -->
<script
    data-ad-client="ca-pub-5043015646750420"
    async
    src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js">
</script>
<script>
    (adsbygoogle = window.adsbygoogle || []).push({
        google_ad_client: "ca-pub-5043015646750420",
        enable_page_level_ads: true
    });
</script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-PFCMF7GED1"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-PFCMF7GED1');
</script>
