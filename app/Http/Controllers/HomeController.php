<?php

namespace App\Http\Controllers;

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
        $this->middleware('auth')->only('dashboard');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function dashboard()
    {
        return view('dashboard');
    }
    public function sport()
    {
        $sport = Post::where(['category' == 'sport']);
        return view('cat.sport',compact('sport'));
    }
    public function education()
    {
        $education = Post::where(['category' == 'education']);
        return view('cat.education',compact('education'));
    }
    public function entertainment()
    {
        $entertainment = Post::where(['category' == 'entertainment']);
        return view('cat.entertainment',compact('entertainment'));
    }
    public function health()
    {
        $health = Post::where(['category' == 'health']);
        return view('cat.health',compact('health'));
    }
    public function politics()
    {
        $politics = Post::where(['category' == 'politics']);
        return view('cat.politics',compact('politics'));
    }
    public function technology()
    {
        $technology = Post::where(['category' == 'technology']);
        return view('cat.technology',compact('technology'));
    }
    public function Business()
    {
        $Business = Post::where(['category' == 'Business']);
        return view('cat.Business',compact('Business'));
    }
    public function world()
    {
        $world = Post::where(['category' == 'world']);
        return view('cat.world',compact('world'));
    }

}
