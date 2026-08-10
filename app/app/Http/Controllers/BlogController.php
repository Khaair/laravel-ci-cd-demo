<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class BlogController extends Controller
{
    /**
     * Display a listing of the blogs.
     */
    public function index(): View
    {
        $blogs = Blog::latest()->paginate(10);

        return view('blogs.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new blog.
     */
    public function create(): View
    {
        return view('blogs.create');
    }

    /**
     * Store a newly created blog in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'content' => ['required', 'string'],
        ]);

        Blog::create($validated);

        return redirect()
            ->route('blogs.index')
            ->with('success', 'Blog created successfully.');
    }

    /**
     * Display the specified blog.
     */
    public function show(Blog $blog): View
    {
        return view('blogs.show', compact('blog'));
    }

    /**
     * Show the form for editing the specified blog.
     */
    public function edit(Blog $blog): View
    {
        return view('blogs.edit', compact('blog'));
    }

    /**
     * Update the specified blog in storage.
     */
    public function update(Request $request, Blog $blog): RedirectResponse
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'content' => ['required', 'string'],
        ]);

        $blog->update($validated);

        return redirect()
            ->route('blogs.index')
            ->with('success', 'Blog updated successfully.');
    }

    /**
     * Remove the specified blog from storage.
     */
    public function destroy(Blog $blog): RedirectResponse
    {
        $blog->delete();

        return redirect()
            ->route('blogs.index')
            ->with('success', 'Blog deleted successfully.');
    }
}


//final 02

//final 03