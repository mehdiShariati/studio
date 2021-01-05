<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     *
     */
    public function index()
    {
       $tags= Tag::all();
       return view("admin.tag.index",compact("tags"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.tag.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request

     */
    public function store(Request $request)
    {
        $request->validate([
           "title"=>"required|unique:tags",
           "slug"=>"required|unique:tags"
        ]);
        $has_pic=false;
        $title=$request->get("title");
        $slug=$request->get("slug");
        $body=$request->get("body");
        $meta_title=$request->get("meta_title");
        $meta_description=$request->get("meta_description");
        $meta_keywords=$request->get("meta_keywords");

        $temp=explode("|",$title);
        $tag_pipe=md5($temp[0]);
        $tag=new Tag();

            $tag->title=$title;
            $tag->slug=$slug;
            $tag->body=$body;
            $tag->meta_title=$meta_title;
            $tag->meta_description=$meta_description;
            $tag->meta_keywords=$meta_keywords;
            $tag->has_pic=$has_pic;
            $tag->tag_pipe=$tag_pipe;


        if ($request->file('image')->isValid()) {
            $fileName = time().'.'.$request->image->extension();

            $request->image->move(public_path('uploads/images/tag'), $fileName);
            $alt=$request->get("alt_text");
            $tag->image=$fileName;
            $tag->alt_image=$alt;
//            $image=new Image();
//            $image->image=$fileName;
//            $image->alt=$alt;
//            $image->save();
//            $tag->images()->attach($image->id);
        }
        $tag->save();
        return redirect(route("tag.index"));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function show(Tag $tag)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function edit(Tag $tag)
    {
        return view("admin.tag.edit",compact("tag"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tag $tag)
    {
        $request->validate([
            "title"=>"required",
            "slug"=>"required"
        ]);
       ;
        $title=$request->get("title");
        $slug=$request->get("slug");
        $body=$request->get("body");
        $meta_title=$request->get("meta_title");
        $meta_description=$request->get("meta_description");
        $meta_keywords=$request->get("meta_keywords");

        $temp=explode("|",$title);
        $tag_pipe=md5($temp[0]);


        $tag->title=$title;
        $tag->slug=$slug;
        $tag->body=$body;
        $tag->meta_title=$meta_title;
        $tag->meta_description=$meta_description;
        $tag->meta_keywords=$meta_keywords;
        $tag->tag_pipe=$tag_pipe;
        $tag->alt_image=$request->get("alt_text");;

        if ($request->file('image')->isValid()) {
            $fileName = time().'.'.$request->image->extension();

            $request->image->move(public_path('uploads/images/tag'), $fileName);

            $tag->image=$fileName;
            $tag->has_pic=1;
//            $image=new Image();
//            $image->image=$fileName;
//            $image->alt=$alt;
//            $image->save();
//            $tag->images()->attach($image->id);
        }
        $tag->save();
        return redirect(route("tag.index"));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tag $tag)
    {
        $tag->delete();
        return back();
    }
}
