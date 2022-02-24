<x-layout>
    <x-slot name="content">
        @foreach ($posts as $post)
            <article>
                <a href="/posts/{{ $post->slug }}">
                    <h1>{{ $post->title }}</h1>
                </a>
                <div>{{ $post->expert }}</div>
            </article>
        @endforeach
    </x-slot>
</x-layout>
