<x-layout>
  {{--  <x-slot name="content">
        @foreach ($posts as $post)
            <article>
                <a href="/posts/{{ $post->slug }}">
                    <h1>{!! $post->title !!}</h1>
                </a>
                <p>
                    By <a href="/authors/{{$post->author->user_name}}">
                        {{ $post->author->name }}
                    </a> in
                    <a href="categories/{{ $post->category->slug }}">
                        {{ $post->category->name }}
                    </a>
                </p>
                <div>{{ $post->excerpt }}</div>
            </article>
        @endforeach
    </x-slot>--}}


    @include('_posts-header')

    <main class="max-w-6xl mx-auto mt-20 space-y-8">
            <x-featured-post-card />
        <div class="lg:grid lg:grid-cols-2">
            <x-post-card />
            <x-post-card />
        </div>

        <div class="lg:grid lg:grid-cols-3">
            <x-post-card />
            <x-post-card />
            <x-post-card />
        </div>

    </main>


</x-layout>
