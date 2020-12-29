<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Tag;
use App\Portfolio;
use Illuminate\Http\Request;
use App\Models\Category_portfolio;


class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $images=Image::all();
       return view("admin.portfolio.index",compact("images"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cats=Tag::where("tag_pipe",md5("portfolio_category"))->get();

        return view("admin.portfolio.create",compact("cats"));
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
            "alt_image"=>"required",
            "image"=>"required",
            "tag_id"=>"required"

        ]);
        if ($request->file('image')->isValid()) {
            $fileName = time() . '.' . $request->image->extension();

            $request->image->move(public_path('uploads/images/portfolio'), $fileName);
            $tag = Tag::find($request->get("tag_id"));
            $alt = $request->get("alt_image");
            $image = new Image();
            $image->image = $fileName;
            $image->alt = $alt;
            $image->save();
            $tag->images()->attach($image->id);
        }
        return  back()->with('success',"نمونه کار  با موفقیت ثبت شد");;

//        $this->validate($request, [
//
//            'filename' => 'required',
//            'filename.*' => 'mimes:doc,pdf,docx,zip'
//
//        ]);
//
//
//        if($request->hasfile('filename'))
//        {
//
//            foreach($request->file('filename') as $file)
//            {
//                $name=$file->getClientOriginalName();
//                $file->move(public_path().'/files/', $name);
//                $data[] = $name;
//            }
//        }
//
//        $file= new File();
//        $file->filename=json_encode($data);
//
//
//        $file->save();
    //    $image_names=[];
//
//
//        if($request->files->has('image')){
//            foreach($request->files->get('images') as $file)
//            {
//
//                $name=$request->couple_name.time().".".$file->getClientOriginalName();
//
//                $file->move(public_path("uploads/portfolios/images"), $name);
//                array_push($image_names,$name);
//            }
//        }
//
//        if($request->files->has('movies')) {
//            foreach($request->files->get('movies') as $movie)
//            {
//
//                $name=$request->couple_name.$movie->getClientOriginalName();
//                $movie->move(public_path("uploads/portfolios/movies"), $name);
//                array_push($movie_names,$name);
//            }
//        }
//        $cat_id=(int)$request->category_portfolio_id;
//        Portfolio::create([
//            "couple_name"=>$request->couple_name,
//            "images"=>json_encode($image_names,JSON_PRETTY_PRINT),
//            "movies"=>json_encode($movie_names,JSON_PRETTY_PRINT),
//            "description"=>$request->description,
//            "category_portfolio_id"=>$cat_id
//
//        ]);
      //  $movie_names=[];



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function show(Portfolio $portfolio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function edit(Portfolio $portfolio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Portfolio $portfolio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Portfolio $portfolio)
    {
        //
    }
}
