<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->get(); // Atau ->orderBy('id', 'desc')->get();
        return view('homepage', compact('posts'));
    }
}

