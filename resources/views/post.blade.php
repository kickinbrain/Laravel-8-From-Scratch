<x-layout>
    <x-slot name="content">
        <article>
            <h1>
                {!! $post->title !!}
            </h1>
            <p>
                {!! $post->body !!}
            </p>
                <p>
                    By <a href="/authors/{{ $post->author->user_name }}">
                        {{ $post->author->name }}
                    </a>
                </p>
                <a href="/categories/{{ $post->category->slug }}">
                    {{ $post->category->name }}
                </a>
        </article>

        <a href="/">Go back</a>
    </x-slot>
</x-layout>
