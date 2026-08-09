@extends('layouts.app')

@section('title', $blog->title)

@section('content')
    <div class="mb-6">
        <a href="{{ route('blogs.index') }}" class="text-sm text-slate-400 hover:text-emerald-400 transition">
            &larr; Back to blogs
        </a>
    </div>

    <article class="rounded-2xl border border-slate-800 bg-slate-900 p-6 md:p-10">
        <h1 class="text-3xl md:text-4xl font-bold">{{ $blog->title }}</h1>
        <p class="mt-3 text-sm text-slate-500">
            Published {{ $blog->created_at->format('M d, Y') }}
            @if ($blog->updated_at->ne($blog->created_at))
                · Updated {{ $blog->updated_at->format('M d, Y') }}
            @endif
        </p>

        <div class="mt-8 text-slate-300 leading-8 whitespace-pre-wrap">{{ $blog->content }}</div>

        <div class="mt-10 pt-6 border-t border-slate-800 flex flex-wrap gap-3">
            <a href="{{ route('blogs.edit', $blog) }}"
               class="px-6 py-3 rounded-xl bg-emerald-500 hover:bg-emerald-600 font-semibold transition">
                Edit
            </a>
            <form action="{{ route('blogs.destroy', $blog) }}" method="POST"
                  onsubmit="return confirm('Delete this blog?')">
                @csrf
                @method('DELETE')
                <button type="submit"
                        class="px-6 py-3 rounded-xl border border-red-500/40 text-red-300 hover:bg-red-500/10 transition">
                    Delete
                </button>
            </form>
        </div>
    </article>
@endsection
