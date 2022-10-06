<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StudyPost;

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
}
