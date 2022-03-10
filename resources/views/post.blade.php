<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
            <article class="max-w-4xl lg:grid lg:grid-cols-12 mx-auto pt-10 gap-x-10">
                <div class="col-span-4">
                    <img src="/images/illustration-1.png" alt="Image for blog page" class="rounded-xl max-w-100">
                    <p class="mt-2 block text-center text-gray-400 text-sm">
                        Published
                        <time>
                            {{ $post->created_at->diffForHumans() }}
                        </time>
                    </p>
                    <div class="flex items-center justify-center mt-6 text-sm">
                        <img src="/images/lary-avatar.svg" alt="Lary avatar">
                        <div class="ml-3 text-left">
                            <h5 class="font-bold">
                                {{ $post->author->name }}
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="col-span-8 lg:-mt-10 mt-10">
                    <div class="lg:flex justify-between mb-7">
                        <a href="/" class="mb-2 lg:mb-0 text-lg duration-300 transition-colors hover:text-blue-500 inline-flex items-center relative">
                            <svg class="mr-2" width="19" height="19"
                                 viewBox="0.83 1 20.15 20.15"><g fill="none" fill-rule="evenodd"><path
                                        stroke="#000" stroke-opacity=".012" stroke-width=".5" d="M21 1v20.16H.84V1z"></path><path
                                        class="fill-current  "
                                        d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z"></path></g></svg>
                            Back to Posts
                        </a>
                        <x-category-button :category="$post->category" />
                    </div>
                    <h2 class="font-bold text-4xl mb-4">
                        {{ $post->title }}
                    </h2>
                    <div class="space-y-4 text-lg">
                        {{ $post->body }}
                    </div>
                </div>
            </article>
        </main>
    </section>
</x-layout>
