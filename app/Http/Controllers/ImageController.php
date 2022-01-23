<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Image;
use App\Models\User;

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

        $user = auth()->user();
        $image->user_id = $user->id;

        $image->save();

        return redirect('/home')->with('msg', 'Imagem enviada com sucesso!');
    }

    public function show($id){
        $image = Image::findOrFail($id);

        $imageOwner = User::where('id', $image->user_id)->first()->toArray();

        return view ('images.show', ['image' => $image, 'imageOwner' => $imageOwner]);
    }

    public function dashboard() {

        $user = auth()->user();

        $images = $user->images;

        return view ('images.dashboard', ['images' => $images]);
    }
}
