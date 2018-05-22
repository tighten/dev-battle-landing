<!DOCTYPE html>
<html>
<head>
    @php $description = "Four brains. Two screens. One native app."; @endphp
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Tighten Dev Battle</title>
    <meta name="description" content="{{ $description }}">
    <meta name="author" content="Tighten">

    <meta name="viewport" content="width=device-width">

    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i" rel="stylesheet">

    <meta property="og:locale" content="en_US">
    <meta property="og:title" content="Tighten Dev Battle">
    <meta property="og:description" content="{{ $description }}">
    <meta property="og:url" content="{{ config('app.url') }}">
    <meta property="og:site_name" content="Tighten">
    <meta property="og:image" content="http://battle.tighten.co/images/tighten-dev-battle-2-logo-og.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
</head>

<body class="bg-orange-lightest-pale">
<div class="container max-w-3xl shadow mx-auto">
    <div class="w-full bg-orange-light pt-4">
        <a href="/">
            <img class="logo" src="/images/tighten-dev-battle-2-logo.png" alt="Tighten Dev Battle">
        </a>
    </div>

    <div class="bg-white px-4 sm:px-8 py-6">
        <div class="flex flex-col justify-center leading-normal sm:flex-row text-base md:text-xl font-light sm:my-6">
            <a href="/archives/1">
                <span class="font-semibold">Battle 1:</span> Vue.js vs. React
            </a>

            <span class="text-grey-light hidden sm:block mx-6">|</span>

            <a href="/">
                <span class="font-semibold">Battle 2:</span> React Native vs. NativeScript
            </a>

            <div class="border-b mt-6 sm:hidden"></div>
        </div>

        @yield('content')

        <div class="border-t pt-8 m-8">
            <p class="text-base text-grey pt-6">
                Put on by the fine folks at <a href="https://tighten.co/">Tighten</a>
            </p>
        </div>
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
