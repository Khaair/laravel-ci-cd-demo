@extends('layouts.app')

@section('title', 'Blogs')

@section('content')
    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 mb-8">
        <div>
            <h1 class="text-3xl font-bold">Blogs</h1>
            <p class="mt-2 text-slate-400">Create, read, update, and delete blog posts.</p>
        </div>
        <a href="{{ route('blogs.create') }}"
           class="inline-flex justify-center px-6 py-3 rounded-xl bg-emerald-500 hover:bg-emerald-600 font-semibold transition">
            New Blog
        </a>
    </div>

    @forelse ($blogs as $blog)
        <article class="mb-4 rounded-2xl border border-slate-800 bg-slate-900 p-6">
            <div class="flex flex-col md:flex-row md:items-start md:justify-between gap-4">
                <div class="min-w-0">
                    <h2 class="text-xl font-semibold">
                        <a href="{{ route('blogs.show', $blog) }}" class="hover:text-emerald-400 transition">
                            {{ $blog->title }}
                        </a>
                    </h2>
                    <p class="mt-2 text-slate-400 line-clamp-2">{{ $blog->content }}</p>
                    <p class="mt-3 text-sm text-slate-500">{{ $blog->created_at->format('M d, Y') }}</p>
                </div>
                <div class="flex flex-wrap gap-2 shrink-0">
                    <a href="{{ route('blogs.show', $blog) }}"
                       class="px-4 py-2 rounded-lg border border-slate-700 hover:border-emerald-500 hover:text-emerald-400 text-sm transition">
                        View
                    </a>
                    <a href="{{ route('blogs.edit', $blog) }}"
                       class="px-4 py-2 rounded-lg border border-slate-700 hover:border-emerald-500 hover:text-emerald-400 text-sm transition">
                        Edit
                    </a>
                    <form action="{{ route('blogs.destroy', $blog) }}" method="POST"
                          onsubmit="return confirm('Delete this blog?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                                class="px-4 py-2 rounded-lg border border-red-500/40 text-red-300 hover:bg-red-500/10 text-sm transition">
                            Delete
                        </button>
                    </form>
                </div>
            </div>
        </article>
    @empty
        <div class="rounded-2xl border border-dashed border-slate-700 bg-slate-900/50 p-12 text-center">
            <p class="text-slate-400">No blogs yet.</p>
            <a href="{{ route('blogs.create') }}"
               class="inline-block mt-4 text-emerald-400 hover:text-emerald-300 font-semibold transition">
                Create your first blog
            </a>
        </div>
    @endforelse

    <div class="mt-8">
        {{ $blogs->links() }}
    </div>
@endsection
