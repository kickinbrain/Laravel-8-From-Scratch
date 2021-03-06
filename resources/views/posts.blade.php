<x-layout>
    @include("_posts-header")
    <main class="max-w-6xl mx-auto mt-20 space-y-8">
            <x-post-featured-card />
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

    
   {{-- <x-slot name="content">
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
                    By <a href="/authors/{{ $post->author->user_name }}">
                        {{ $post->author->name }}
                    </a>
                </p>

                <div>
                    {{ $post->excerpt }}
                    <a href="/posts/{{ $post->slug }}">Read more</a>
                </div>
            </article>
        @endforeach
    </x-slot>--}}
</x-layout>
