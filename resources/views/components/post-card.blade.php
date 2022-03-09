@props(['post'])
<article
   {{ $attributes->merge(['class' => 'transition-colors duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl']) }}
>
    <div class="p-4">
        <div>
            {{--TODO--}}
            <img src="/images/illustration-1.png" alt="Blog Post Illustration" class="rounded-xl">
        </div>
        <div class="flex-1 mt-8 flex flex-col justify-between">
            <header>
                <div>
                    <a href="/categories/{{ $post->category->slug }}" class="px-3 py-1 border rounded-full border-blue-300 text-blue-300 text-xs uppercase font-semibold">
                        {{ $post->category->name }}
                    </a>
                </div>

                <div class="mt-4">
                    <h1 class="text-3xl">
                        <a href="/posts/{{ $post->slug }}">
                            {{ $post->title }}
                        </a>
                    </h1>
                    <span class="mt-2 block mb-2 text-gray-400 text-xs">
                                <time>
                                    {{ $post->created_at->diffForHumans() }}
                                </time>
                            </span>
                </div>
            </header>

            <div class="text-sm mt-4">
                <p>
                    {{ $post->excerpt }}
                </p>
            </div>

            <footer class="flex justify-between items-center mt-8">
                <div class="flex items-center text-sm">
                    <img src="/images/lary-avatar.svg" alt="Lary avatar">
                    <div class="ml-3">
                        <h5 class="font-bold">
                            {{ $post->author->name }}
                        </h5>
                        <h6>Mascot at Laracasts</h6>
                    </div>
                </div>
                <div>
                    <a href="/posts/{{ $post->slug }}" class="text-xs font-semibold bg-gray-300 rounded-full hidden lg:block py-2 px-4">Read more</a>
                </div>
            </footer>
        </div>
    </div>
</article>
