@extends('layouts.app')

@section('content')
    <div class="w-4/5 m-auto text-left">
        <div class="py-15">
            <h1 class="text-6xl">
                {{ $post->title }}
            </h1>
        </div>
    </div>

    <div class="w-4/5 m-auto pt-20">
        <span class="text-gray-500">
            By <span class="text-gray-800 font-bold italic">
                {{ $post->user->name }}
            </span>
            , Created on {{ date('jS M Y', strtotime($post->updated_at)) }}
        </span>

        <div class="text-l text-gray-700 pt-8 pb-10 leading-8 font-light">
            @markdown
                {{ $post->description }}
            @endmarkdown
        </div>
    </div>
@endsection
