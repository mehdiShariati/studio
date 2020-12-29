<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function show(Image $image)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function edit(Image $image)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Image $image)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function destroy(Image $image)
    {
        //
    }
    public function postUploadDescImg(\Illuminate\Support\Facades\Request $request)
    {

        if (!$_FILES) return '{"error":1}';
        // files storage folder
        $dir = base_path('public/uploads/img_in_body/');

        if (!is_dir($dir)) {
            @mkdir($dir);
        }
        if (isset($_FILES['upload'])) {
            $_FILES['file'] = $_FILES['upload'];
        }
        $_FILES['file']['type'] = strtolower($_FILES['file']['type']);

        // $allowedExts = array('gif', 'jpeg', 'jpg', 'png', 'GIF', 'JPEG', 'JPG', 'PNG');
        // $extension = end(explode('.', $_FILES['file']['name']));
        // && in_array($extension, $allowedExts)
        if (($_FILES['file']['type'] == 'image/png'
            || $_FILES['file']['type'] == 'image/jpg'
            || $_FILES['file']['type'] == 'image/gif'
            || $_FILES['file']['type'] == 'image/jpeg'
            || $_FILES['file']['type'] == 'image/pjpeg')) {
            // setting file's mysterious name
            $fileName = md5(date('YmdHis')) . '.jpg';
            $file = $dir . '/' . md5(date('YmdHis')) . '.jpg';

            // copying
            move_uploaded_file($_FILES['file']['tmp_name'], $file);

            // displaying file
            $array = array(
                'filelink' => asset('uploads/img_in_body/' . $fileName)
            );

//            $array = array(
//                'filelink' => asset('assets/desc_img/'.$fileName),
//                'id'=>date('ymdHis')
//            );
            if(isset($_FILES['upload'])){
                $array = array(
                    "fileName"=>$fileName,
                    "uploaded"=>true,
                    'url' => asset('uploads/img_in_body/' . $fileName)
                );
            }
            return stripslashes(json_encode($array));
        }


    }

}
