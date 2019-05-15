<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogpostsController extends Controller
{
    public function index()

    {

        $blogposts = \App\Blogpost::all();

        return view('blogposts.index', compact('blogposts'));
    }

    public function create()

    {
        return view('blogposts/newblog');
    }

    public function postCreate(Request $request)
    {
        $blogpost = new Blogpost();
        $blogpost->fill(
            $request->except('_token')
        )->save();

        return redirect('/register')
            ->with('success', 'New blogpost created!');
    }
}
