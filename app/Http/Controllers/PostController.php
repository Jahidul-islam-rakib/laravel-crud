<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;


class PostController extends Controller
{
    public function create()
    {
        return view('create');
    }

    public function ourFileStore(Request $request){
 //       $imagePath = $request->file('image')->store('images', 'public');
        $validated = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'required|mimes:jpeg,png,jpg',

        ]);

        $post = new post;

        $post->name= $request->name;
        $post->description = $request->description;
        $post->image = $request->image;

        $post->save();

        //return redirect()->back();
        return redirect()->route('home')->with('success','your post has been added successfully');
    }
}
