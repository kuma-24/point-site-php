<?php

namespace App\Http\Controllers;

use App\Models\StudyPost;
use App\Models\StudyComment;
use Illuminate\Http\Request;

class StudyCommentController extends Controller
{
    public function studyStore(Request $request, StudyPost $post)
    {
        $request->validate([
            'body' => 'required',
        ]);

        $comment = new StudyComment();
        $comment->study_post_id = $post->id;
        $comment->body = $request->body;
        $comment->save();

        return redirect()
            ->route('posts.show', $post);
    }

    public function studyDestroy(StudyComment $comment)
    {
        $comment->delete();

        return redirect()
            ->route('posts.show', $comment->post);
    }
}
