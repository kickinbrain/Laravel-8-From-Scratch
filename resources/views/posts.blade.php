<x-layout>
    <x-slot name="content">
        @foreach ($posts as $post)
            <article>
                <h1>
                    {{ $post->title }}
                </h1>

                <div>
                    {{ $post->excerpt }}
                    <a href="posts/{{ $post->id }}">Read more</a>
                </div>
            </article>
        @endforeach
    </x-slot>
</x-layout>
