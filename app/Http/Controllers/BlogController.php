<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::latest()->paginate(10);
        return view('blog.index', compact('blogs'));
    }
    public function search()
    {
       $search_text = $_GET['query'];
       $blogs =Blog::where('title','LIKE','%'.$search_text.'%')->get();
       return view('blog.search',compact('blogs'));
    }
    public function trashedBlogs()
    {
        $blogs =Blog::onlyTrashed()->latest()->paginate(4);
        return view('blog.trash', compact('blogs'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'date'=>'required',
            'detail'=>'required'
        ]);

        $blogs = Blog::create($request->all());
         return redirect()->route('blogs.index')
         ->with('success','blog added successfully') ;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        return view('blog.show', compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        return view('blog.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        $request->validate([
            'title'=>'required',
            'date'=>'required',
            'detail'=>'required'
           ]);
    
        $blog->update($request->all());
         return redirect()->route('blogs.index')
         ->with('success','blog updated successfully') ;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        $blog->delete();
        return redirect()->route('blogs.index')
        ->with('success','blog deleted successfully');
    }

    
    public function softDelete( $id)
    {
        $blog = Blog::find($id)->delete();
        return redirect()->route('blogs.index')
        ->with('success','blog deleted successfully') ;
    }

    public function  deleteForEver( $id)
    {
        $blog = Blog::onlyTrashed()->where('id' , $id)->forceDelete();
        return redirect()->route('blog.trash')
        ->with('success','blog permenantly deleted successfully') ;
    }

    public function backFromSoftDelete( $id)
    {
        $blog = Blog::onlyTrashed()->where('id' , $id)->first()->restore() ;
        return redirect()->route('blogs.index')
        ->with('success','blog brought back successfully') ;
    }
}
