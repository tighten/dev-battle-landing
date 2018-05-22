@extends('layouts.master')

@section('content')
<div class="py-6">
    <h2 class="text-3xl md:text-4xl font-normal text-grey-dark pb-2">
        Battle 2: React Native vs. NativeScript
    </h2>

    <p class="text-2xl md:text-3xl font-light text-grey-dark pb-6 mb-8">
        May 25, 2018 &middot; 11<span class="text-lg uppercase"> am</span> - 3<span class="text-lg uppercase"> pm</span> Eastern
    </p>

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

        <div class="shadow-md p-3 my-8">
            <div class="responsive-iframe">
                <iframe
                    scrolling="yes"
                    id="tightenco"
                    src="https://www.twitch.tv/tightenco/chat">
                </iframe>
            </div>
        </div>
    </div>
</div>
@endsection
