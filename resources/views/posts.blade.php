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
        @if($posts->count())
          <x-posts-grid :posts="$posts"/>
        @else
            <p class="text-center">Sorry, not posts found.</p>
        @endif
    </main>


</x-layout>
