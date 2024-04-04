<?php

namespace App\Http\Controllers;

use App\Models\Comment;

class CommentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store($studentid)
    {
        $newcomment = new Comment;
        $newcomment->student_id = $studentid;
        $newcomment->content = request()->comment;
        $newcomment->save();
        return back();
    }
}
