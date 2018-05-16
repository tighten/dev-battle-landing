@extends('layouts.master')

@section('content')
<h2>Battle 1: React Native vs. NativeScript</h2>
        <p class="meta">May 25 2018, 11am-3pm Eastern</p>

        <br><br>
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
