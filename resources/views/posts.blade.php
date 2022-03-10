<x-layout>
    @include('_posts-header')

    <main class="max-w-6xl mx-auto mt-20 space-y-8">
        @if($posts->count())
          <x-posts-grid :posts="$posts"/>
        @else
            <p class="text-center">Sorry, not posts found.</p>
        @endif
    </main>


</x-layout>
