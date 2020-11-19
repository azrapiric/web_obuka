<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class NewsController extends Controller
{

    public function create(){
        return view('news.create');
    }

    public function store(Request $request){
        $path = $this->uploadImage($request);
        Post::create([
            'title' => $request->title,
            'content' => $request->content,
            'image' => $path,
            'user_id' => 1

        ]);

    }


     private function uploadImage(Request $request) {
        if(!$request->hasFile('image')) {
            return response()->json(['upload_file_not_found'], 400);
        }

        $file = $request->file('image');
        if(!$file->isValid()) {
            return response()->json(['invalid_file_upload'], 400);
        }
		
        $path = '/uploads/'.$file->getClientOriginalName();


        $file->move($path, $file->getClientOriginalName());
        return $path;
    }

}
