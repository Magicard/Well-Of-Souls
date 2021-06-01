<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function imageUpload(Request $request)
    {
        if ($request->file('img') == null) {
            $path = "";
        }else{
            $path = $request->file('image')->store('images');
        }

        //$path = $request->file('image')->store('images');
        return $path;
    }
}
