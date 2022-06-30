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
                By <a href="#">{{ $post->user->name }}</a><br>
                <a href="/categories/{{ $post->category->slug }}">
                    {{ $post->category->name }}
                </a>
            </p>
        </article>

        <a href="/">Go back</a>
    </x-slot>
</x-layout>
