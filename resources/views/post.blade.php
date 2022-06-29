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
                <a href="/categories/{{ $post->category->id }}">
                    {{ $post->category->name }}
                </a>
            </p>
        </article>

        <a href="/">Go back</a>
    </x-slot>
</x-layout>
