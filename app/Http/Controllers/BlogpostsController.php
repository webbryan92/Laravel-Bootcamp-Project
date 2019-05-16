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

    public function blogpost(Blogpost $blogpost)
    {
        $blogpost->first_name = 'Bob';
        dd($blogpost);
        return view('blogposts/blogpost', compact('blogpost'));
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
