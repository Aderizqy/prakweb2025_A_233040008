<x-layout title="{{ $post->title }}">

    <h1>{{ $post->title }}</h1>

    <p>By {{ $post->author->name }}</p>
    <p>Category: {{ $post->category->name }}</p>

    <article>
        {!! nl2br(e($post->body)) !!}
    </article>

    <a href="{{ route('posts.index') }}">← Back to Posts</a>

</x-layout>
