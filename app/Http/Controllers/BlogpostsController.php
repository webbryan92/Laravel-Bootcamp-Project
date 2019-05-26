<?php

namespace App\Http\Controllers;

use App\Blogpost;
use App\Services\Slug;
use Illuminate\Http\Request;

class BlogpostsController extends Controller
{
    public function index()

    {
        $blogposts = Blogpost::all();

        //order a query by created_at, get the collection,
        //get first of each category
        $featured = Blogpost::query()
                        ->orderBy('created_at', 'DESC' )
                        ->get()
                        ->unique('category');

        return view('blogposts/index', [
            'blogposts' => $blogposts,
            'featured' => $featured
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

    public function show(Blogpost $blogpost)
    {
        return view('blogposts/blogpost', [
            'blogpost' => $blogpost
        ]);
    }

    public function create()

    {
        return view('blogposts/newblog');
    }

    public function edit($id)

    {
        $blogpost = Blogpost::find($id);

        return view('blogposts.edit', [
            'blogpost' => $blogpost
        ]);

    }

    public function update(Blogpost $blogpost, Request $request)

    {
        $blogpost->fill($request->all())
            ->save();

        return redirect()->route('blogposts.blogpost', $blogpost);
    }

    public function destroy($id)

    {
        Blogpost::find($id)->delete();

        return redirect('/blogposts');
    }

    public function postCreate(Request $request)
    {
        $slug = new Slug();
        $blogpost = new Blogpost();
        $blogpost->slug = $slug->createSlug($request->title);
        $blogpost->fill(
            $request->except('_token')
        )->save();

        return redirect('/blogposts')
            ->with('success', 'New blogpost created!');
    }
}
