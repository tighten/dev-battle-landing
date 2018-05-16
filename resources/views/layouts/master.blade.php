<!DOCTYPE html>
<html>
<head>
    @php $description = "Four brains. Two screens. One native app."; @endphp
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Tighten Co. Dev Battle</title>
    <meta name="description" content="{{ $description }}">
    <meta name="author" content="Tighten Co.">

    <meta name="viewport" content="width=device-width">

    <link rel="stylesheet" href="/css/app.css">

    <link href="https://fonts.googleapis.com/css?family=Bitter" rel="stylesheet">

    <meta property="og:locale" content="en_US">
    <meta property="og:title" content="Tighten Co. Dev Battle">
    <meta property="og:description" content="{{ $description }}">
    <meta property="og:url" content="{{ config('app.url') }}">
    <meta property="og:site_name" content="Tighten Co.">
    <meta property="og:image" content="http://battle.tighten.co/tighten-twitch-dev-battle-og.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
</head>
<body>
<div class="wrapper">
    <div class="internal internal--header">
        <a href="/"><h1><img src="/tighten-twitch-dev-battle-logo.png" alt="Tighten Co. Dev Battle" class="logo"></h1></a>

        <br>
        <a href="/">Battle 2: React Native vs. NativeScript</a> | <a href="/archives/1">Battle 1: Vue vs. React</a>
    </div>

    <div class="internal internal--body">
        @yield('content')
    </div>

    <div class="internal internal--footer">
        Put on by the fine folks at <a href="https://tighten.co/">Tighten Co.</a>
    </div>
</div>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-53203205-4', 'auto');
  ga('send', 'pageview');
</script>
</body>
</html>
