<x-layout>
    <x-slot name="content">
         <article>
            <h1>
                {!! $post->title  !!}
            </h1>
            <div>
                {!! $post->body !!}
            </div>
             <p>
                 By <a href="/authors/{{$post->author->user_name}}">
                     {{ $post->author->name }}
                 </a> in
                 <a href="categories/{{ $post->category->slug }}">
                     {{ $post->category->name }}
                 </a>
             </p>
        </article>
        <a href="/">Go Back</a>
    </x-slot>
</x-layout>
