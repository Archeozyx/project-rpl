<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ForumPost;
use App\Models\ForumComment;
use Illuminate\Support\Facades\Auth;

class ForumController extends Controller
{
    public function index()
    {
        $posts = ForumPost::with('user', 'comments.user')->latest()->get();
        return view('forum.index', compact('posts'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $post = new ForumPost($request->only(['title', 'content']));
        $post->user_id = Auth::id();

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('forum_images', 'public');
            $post->image_path = $imagePath;
        }

        $post->save();

        return redirect()->route('forum.index');
    }

    public function storeComment(Request $request, ForumPost $post)
    {
        $request->validate([
            'content' => 'required',
        ]);

        $comment = new ForumComment($request->only(['content']));
        $comment->user_id = Auth::id();
        $comment->post_id = $post->id;
        $comment->save();

        return redirect()->route('forum.index');
    }
}
