<?php

namespace App\Http\Controllers;

use App\Models\blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::orderBy("created_at","desc")->paginate(10);
        // dd($blogs);
        return view("blog.index", ["blogs"=> $blogs]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("blog.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $data = $request->validate([
            "title"=> "required|string",
            "description"=>"required|string"
        ]);

        //echo "Form submitted successfully!";

        $data['user_id'] = 1;
        blog::create($data);

        return to_route('blog.index')->with('success','Blog created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(blog $blog)
    {
        return view("blog.show", ["blog"=> $blog]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(blog $blog)
    {
        return view("blog.edit", ["blog"=> $blog]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, blog $blog)
    {
        $data = $request->validate([
            "title"=> "required|string",
            "description"=> "required|string"
        ]);

        $blog->update($data);

        return to_route("blog.show", $blog)->with("success","Blog updated successfully!");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(blog $blog)
    {
        $blog->delete();

        return to_route("blog.index")->with("success","Blog Deleted successfully!");
    }
}
