@extends('layouts.master')

@section('content')
<div class="py-6">
    <h2 class="text-3xl md:text-4xl font-normal text-grey-dark pb-2">
        Battle 1: Vue.js vs. React
    </h2>

    <p class="text-2xl md:text-3xl font-light text-grey-dark pb-2 mb-8">
        May 17, 2017 &middot; 7:30<span class="text-lg uppercase"> pm</span> Central (now past)
    </p>

    <p class="text-lg md:text-xl font-normal text-grey-dark pb-6 mb-8">
        Read the retrospective on the <a href="https://tighten.co/blog/tighten-first-dev-battle-a-retrospective">Tighten blog</a>
    </p>

    <div class="max-w-xl mx-auto pb-8">
        <div class="shadow-md p-3 my-8">
            <div class="responsive-iframe">
                <iframe
                    src="https://www.youtube.com/embed/aLmHpm_Fjsg?rel=0"
                    allow="autoplay;encrypted-media"
                    scrolling="no"
                    allowfullscreen="true">
                </iframe>
            </div>
        </div>
    </div>
</div>
@endsection
