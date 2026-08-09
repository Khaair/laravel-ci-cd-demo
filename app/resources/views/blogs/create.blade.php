@extends('layouts.app')

@section('title', 'Create Blog')

@section('content')
    <div class="mb-8">
        <h1 class="text-3xl font-bold">Create Blog</h1>
        <p class="mt-2 text-slate-400">Add a new blog post.</p>
    </div>

    <form action="{{ route('blogs.store') }}" method="POST"
          class="rounded-2xl border border-slate-800 bg-slate-900 p-6 md:p-8 space-y-6">
        @csrf

        <div>
            <label for="title" class="block text-sm font-medium text-slate-300 mb-2">Title</label>
            <input type="text" name="title" id="title" value="{{ old('title') }}" required
                   class="w-full rounded-xl border border-slate-700 bg-slate-950 px-4 py-3 text-white placeholder-slate-500 focus:outline-none focus:border-emerald-500 transition"
                   placeholder="Blog title">
        </div>

        <div>
            <label for="content" class="block text-sm font-medium text-slate-300 mb-2">Content</label>
            <textarea name="content" id="content" rows="10" required
                      class="w-full rounded-xl border border-slate-700 bg-slate-950 px-4 py-3 text-white placeholder-slate-500 focus:outline-none focus:border-emerald-500 transition"
                      placeholder="Write your blog content...">{{ old('content') }}</textarea>
        </div>

        <div class="flex flex-col sm:flex-row gap-3">
            <button type="submit"
                    class="px-6 py-3 rounded-xl bg-emerald-500 hover:bg-emerald-600 font-semibold transition">
                Create Blog
            </button>
            <a href="{{ route('blogs.index') }}"
               class="px-6 py-3 rounded-xl border border-slate-700 hover:border-emerald-500 hover:text-emerald-400 text-center transition">
                Cancel
            </a>
        </div>
    </form>
@endsection
