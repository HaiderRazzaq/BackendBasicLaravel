<?php

namespace App\Http\Controllers;

class CommentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store()
    {
      return request();
    }
}
