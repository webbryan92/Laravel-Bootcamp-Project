<?php

namespace App\Http\Controllers;

use App\Blogpost;
use Illuminate\Http\Request;

class BlogpostsController extends Controller
{
    public function index()

    {
        $blogposts = Blogpost::all();

        return view('blogposts/index', [
            'blogposts' => $blogposts
        ]);
    }

    public function blogGeneral()

    {
        $blogposts = Blogpost::all()->where('category', 'General');

        return view('blogposts/index', [
            'blogposts' => $blogposts
        ]);
    }

    public function blogGunpla()

    {
        $blogposts = Blogpost::all()->where('category', 'Gunpla');

        return view('blogposts/index', [
            'blogposts' => $blogposts
        ]);
    }

    public function blogGames()

    {
        $blogposts = Blogpost::all()->where('category', 'Games');

        return view('blogposts/index', [
            'blogposts' => $blogposts
        ]);
    }

    public function blogpost(Blogpost $blogpost)
    {
        return view('blogposts/blogpost', [
            'blogpost' => $blogpost
        ]);
    }

    public function create()

    {
        return view('blogposts/newblog');
    }

    public function postCreate(Request $request)
    {
        $blogpost = new Blogpost();
        $blogpost->slug = "placeholder";
        $blogpost->fill(
            $request->except('_token')
        )->save();

        return redirect('/blogposts')
            ->with('success', 'New blogpost created!');
    }
}
