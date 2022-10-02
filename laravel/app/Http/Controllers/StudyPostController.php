<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudyPostController extends Controller
{
    private $posts = [
        'Title A',
        'Title B',
        'Title C',
        'Title D',
        'Title E',
    ];

    public function studyIndex() 
    {
        return view('studys/index')
            ->with(['posts' => $this->posts]);
    }

    public function studyShow($id)
    {
        return view('studys.posts.show')
            ->with(['post' => $this->posts[$id]]);
    }
}
