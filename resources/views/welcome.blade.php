@extends('layouts.master')

@section('content')
<h2 class="text-3xl font-normal text-grey-dark mt-8">Battle 2: React Native vs. NativeScript</h2>

<p class="text-3xl font-light text-grey-dark mb-8">May 25 2018, 11am-3pm Eastern</p>

<div class="iframes">
    <div class="responsive-iframe">
        <iframe
            src="https://player.twitch.tv/?channel=tightenco"
            scrolling="no"
            allowfullscreen="true">
        </iframe>
    </div>

    <div class="responsive-iframe">
        <iframe
            scrolling="yes"
            id="tightenco"
            src="https://www.twitch.tv/tightenco/chat">
        </iframe>
        </div>
</div>
@endsection
