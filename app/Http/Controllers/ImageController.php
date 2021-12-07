<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Image;

class ImageController extends Controller
{
    public function index() {
        $images = Image::all();
        return view('home', ['images' => $images]);
    }

    public function create(){
        return view('images.create');
    }

    public function store(Request $request){
        $image = new Image;

        $image->title = $request->title;

        //Image Upload
        if($request->hasFile('image') && $request->file('image')->isValid()) {
            $requestImage = $request->image;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName(). strtotime("now")) . "." . $extension;

            $requestImage->move(public_path('img/images'), $imageName);

            $image->image = $imageName;
        }


        $image->save();

        return redirect('/home')->with('msg', 'Imagem enviada com sucesso!');
    }
}
