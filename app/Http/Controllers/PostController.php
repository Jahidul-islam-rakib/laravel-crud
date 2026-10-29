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

        //upload image
        $request->image=null;
        if (isset($request->image))
            {
                $imageName=time().'.'.$request->image->extension();
                $request->image->move(public_path('images'),$imageName);
            }

        //add new post
        $post = new post;

        $post->name= $request->name;
        $post->description = $request->description;
        $post->image = $imageName;

        $post->save();

        //return redirect()->back();
        return redirect()->route('home')->with('success','your post has been added successfully');
    }

    public function editData($id)
    {
        //dd($id);
        return view('edit');
    }
}
