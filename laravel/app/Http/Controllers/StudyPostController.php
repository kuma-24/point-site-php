<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StudyPost;
use App\Http\Requests\PostRequest;
class StudyPostController extends Controller
{
    public function studyIndex() 
    {
        $posts = StudyPost::latest()->get();

        return view('studys/index')
            ->with(['posts' => $posts]);
    }

    public function studyShow(StudyPost $post)
    {
        return view('studys.posts.show')
            ->with(['post' => $post]);
    }

    public function studyCreate()
    {
        return view('studys.posts.create');
    }

    public function studyStore(PostRequest $request)
    {
        $post = new StudyPost();
        $post->title = $request->title;
        $post->body = $request->body;
        $post->save();

        return redirect()
            ->route('posts.index');
    }

    public function studyEdit(StudyPost $post)
    {
        return view('studys.posts.edit')
        ->with(['post' => $post]);
    }

    public function studyUpdeta(PostRequest $request, StudyPost $post)
    {
        $post->title = $request->title;
        $post->body = $request->body;
        $post->save();

        return redirect()
            ->route('posts.show', $post);
    }

    public function studyDestroy(StudyPost $post)
    {
        $post->delete();

        return redirect()
            ->route('posts.index');
    }
}
