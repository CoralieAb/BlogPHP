<?php

namespace App\Controllers;

class BlogController extends Controller
{
    
    public function homepage()
    {
        return $this->view('homepage');
    }

    public function show(int $id)
    {
        return $this->view('blog/show', compact('id'));
    }
}