<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $posts = Post::all();
        $doctors = Doctor::all();
        return view('home', [
            'posts' => $posts,
            'doctors' => $doctors
        ]);
    }

    public function blogs()
    {
        $posts = Post::orderBy('title', 'desc')->get();
        return view('pages.blogs', [
            'posts' => $posts
        ]);
    }

    public function about()
    {
        return view('pages.about');
    }

    public function doctors()
    {
        $doctors = Doctor::orderByDesc('created_at')->paginate(20);
        return view('pages.doctors', ['doctors' => $doctors]);
    }



}
