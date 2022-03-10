@props(['category'])

<div>
    <a href="/categories/{{ $category->slug }}" class="px-3 py-1 border rounded-full border-blue-300 text-blue-300 text-xs uppercase font-semibold">
        {{ $category->name }}
    </a>
</div>
