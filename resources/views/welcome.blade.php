<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Tighten Co. Dev Battle - React vs. Vue</title>
    <meta name="description" content="Two Tighten developers; one hour; one challenge">
    <meta name="author" content="Tighten Co.">

    <meta name="viewport" content="width=device-width">

    <link rel="stylesheet" href="/css/app.css">

    <link href="https://fonts.googleapis.com/css?family=Bitter" rel="stylesheet">

    <meta property="og:locale" content="en_US">
    <meta property="og:title" content="Tighten Co. Dev Battle - React vs. Vue">
    <meta property="og:description" content="Two Tighten developers; one hour; one challenge">
    <meta property="og:url" content="http://battle.tighten.co/">
    <meta property="og:site_name" content="Tighten Co.">
    <meta property="og:image" content="http://battle.tighten.co/tighten-twitch-dev-battle-og.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
</head>
<body>
<div class="wrapper">
    <div class="internal internal--header">
        <h1><img src="tighten-twitch-dev-battle-logo.png" alt="Tighten Co. Dev Battle" class="logo"></h1>
    </div>

    <div class="internal internal--body">
        <h2>Battle 1: Vue vs. React</h2>
        <p class="meta">May 17 7:30pm CDT (now past)</p>

        <div class="vote">
            <!-- <h3>Cast your vote!</h3> -->
            <h3>Final vote</h3>
            <div class="vote__buttons">
                <div>
                    <svg version="1.1" id="Layer_2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="600px" height="600px" viewBox="0 0 600 600" enable-background="new 0 0 600 600" xml:space="preserve"><circle fill="#00D8FF" cx="299.529" cy="299.628" r="50.167"></circle>
                        <path fill="none" stroke="#00D8FF" stroke-width="24" stroke-miterlimit="10" d="M299.529,197.628 c67.356,0,129.928,9.665,177.107,25.907c56.844,19.569,91.794,49.233,91.794,76.093c0,27.991-37.041,59.503-98.083,79.728 c-46.151,15.291-106.879,23.272-170.818,23.272c-65.554,0-127.63-7.492-174.29-23.441c-59.046-20.182-94.611-52.103-94.611-79.559 c0-26.642,33.37-56.076,89.415-75.616C167.398,207.503,231.515,197.628,299.529,197.628z"></path>
                        <path fill="none" stroke="#00D8FF" stroke-width="24" stroke-miterlimit="10" d="M210.736,248.922 c33.649-58.348,73.281-107.724,110.92-140.48c45.35-39.466,88.507-54.923,111.775-41.505 c24.248,13.983,33.042,61.814,20.067,124.796c-9.81,47.618-33.234,104.212-65.176,159.601 c-32.749,56.788-70.25,106.819-107.377,139.272c-46.981,41.068-92.4,55.929-116.185,42.213 c-23.079-13.31-31.906-56.921-20.834-115.233C153.281,368.316,176.758,307.841,210.736,248.922z"></path>
                        <path fill="none" stroke="#00D8FF" stroke-width="24" stroke-miterlimit="10" d="M210.821,351.482 c-33.746-58.292-56.731-117.287-66.312-166.255c-11.544-58.999-3.382-104.109,19.864-117.566 c24.224-14.024,70.055,2.244,118.14,44.94c36.356,32.28,73.688,80.837,105.723,136.173c32.844,56.733,57.461,114.209,67.036,162.582 c12.117,61.213,2.309,107.984-21.453,121.74c-23.057,13.348-65.249-0.784-110.239-39.499 C285.567,460.886,244.898,410.344,210.821,351.482z"></path>
                    </svg>
                    <a href="#"
                        onclick="event.preventDefault(); return;
                                 /* document.getElementById('vote-react-form').submit(); */">
                        {{ $tally->react }}
                    </a>
                </div>
                <div>
                    <svg width="256px" height="221px" viewBox="0 0 256 221" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="xMidYMid">
                        <g>
                            <path d="M204.8,0 L256,0 L128,220.8 L0,0 L50.56,0 L97.92,0 L128,51.2 L157.44,0 L204.8,0 Z" fill="#41B883"></path>
                            <path d="M0,0 L128,220.8 L256,0 L204.8,0 L128,132.48 L50.56,0 L0,0 Z" fill="#41B883"></path>
                            <path d="M50.56,0 L128,133.12 L204.8,0 L157.44,0 L128,51.2 L97.92,0 L50.56,0 Z" fill="#35495E"></path>
                        </g>
                    </svg>

                    <a href="#"
                        onclick="event.preventDefault(); return;
                                 /* document.getElementById('vote-vue-form').submit(); */">
                        {{ $tally->vue }}
                    </a>
                </div>

                <form id="vote-react-form" action="/api/vote" method="POST" style="display: none;">
                    {{ csrf_field() }}
                    <input name="framework" value="react">
                </form>
                <form id="vote-vue-form" action="/api/vote" method="POST" style="display: none;">
                    {{ csrf_field() }}
                    <input name="framework" value="vue">
                </form>
            </div>
        </div>

        <br><br>
        <h2>YouTube embed coming soon!</h2>

                <!--
        <div class="iframes">
            <div class="responsive-iframe">
                <iframe
                    src="http://player.twitch.tv/?channel=tightenco"
                    height="450"
                    width="800"
                    frameborder="0"
                    scrolling="no"
                    allowfullscreen="true">
                </iframe>
            </div>

            <div class="responsive-iframe">
                <iframe frameborder="0"
                    scrolling="yes"
                    id="tightenco"
                    src="https://www.twitch.tv/tightenco/chat"
                    height="450"
                    width="800">
                </iframe>
                </div>
        </div>
    </div>
                -->

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
