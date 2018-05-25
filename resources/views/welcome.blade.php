@extends('layouts.master')

@section('content')
<div class="py-6">
    <h2 class="text-3xl md:text-4xl font-normal text-grey-dark pb-2">
        Battle 2: React Native vs. NativeScript
    </h2>

    <p class="text-2xl md:text-3xl font-light text-grey-dark pb-6 mb-8">
        May 25, 2018 &middot; 11<span class="text-lg uppercase"> am</span> - 3<span class="text-lg uppercase"> pm</span> Eastern
    </p>

    <p class="text-lg md:text-xl font-normal text-grey-dark pb-6 mb-8">
        Read more about it on the <a href="https://tighten.co/blog/tighten-dev-battle-2-native">Tighten blog</a>
    </p>

    <div class="border-t border-b pt-8">
        <p class="text-sm uppercase tracking-wide text-grey mb-6">
            Repositories
        </p>

        <p class="text-lg md:text-xl font-normal text-grey-dark my-4">
            Pickr <a href="https://github.com/tightenco/pickr-api">API</a> and <a href="https://github.com/tightenco/pickr-api/tree/master/mockups">app mockups</a>
        </p>

        <p class="text-lg md:text-xl font-normal text-grey-dark my-4">
            <a href="https://github.com/tightenco/pickr-reactnative">React Native code</a>
        </p>

        <p class="text-lg md:text-xl font-normal text-grey-dark my-4">
            <a href="https://github.com/tightenco/pickr-nativescript">NativeScript code</a>
        </p>
    </div>

    <div class="max-w-xl mx-auto">
        <div class="shadow-md p-3 my-8">
            <div class="responsive-iframe">
                <iframe
                    src="https://player.twitch.tv/?channel=tightenco"
                    scrolling="no"
                    allowfullscreen="true">
                </iframe>
            </div>
        </div>

        @if (\Carbon\Carbon::now()->gt(\Carbon\Carbon::create(2018, 5, 25, 8, 0, 0, 'America/New_York')))
            <div class="shadow-md p-3 my-8">
                <div class="responsive-iframe">
                    <iframe
                        scrolling="yes"
                        id="tightenco"
                        src="https://www.twitch.tv/tightenco/chat">
                    </iframe>
                </div>
            </div>
        @endif
    </div>
</div>
@endsection
