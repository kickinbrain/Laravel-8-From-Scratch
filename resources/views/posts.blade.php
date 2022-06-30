<x-layout>
    <x-slot name="content">
        @foreach ($posts as $post)
            <article>
                <h1>
                    {{ $post->title }}
                </h1>

                <p>
                    <a href="/categories/{{ $post->category->slug }}">
                        {{ $post->category->name }}
                    </a>
                </p>
                <p>
                    By <a href="">
                        {{ $post->author->name }}
                    </a>
                </p>

                <div>
                    {{ $post->excerpt }}
                    <a href="/posts/{{ $post->slug }}">Read more</a>
                </div>
            </article>
        @endforeach
    </x-slot>
</x-layout>
