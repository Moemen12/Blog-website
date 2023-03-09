<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Post;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        return view('blog.index')->with('posts',Post::get());
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        $request->validate([
            'title' => 'required|min:15|max:70',
            'description' => 'required|min:500|max:1000',
            'image' => 'required|mimes:jpg,png,jpeg|max:5048',
        ]);

        $slug = Str::slug($request->title,'-');
        $newImageName= uniqid(). '-'. $slug.'.'.$request->image->extension();
        $request->image->move(public_path('images'),$newImageName);
        
      
       Post::create([
                  'title'=>$request->input('title'),
                  'description'=>$request->input('description'),
                  'slug'=>$slug,
                  'image_path'=> $newImageName,
                  'user_id'=> auth()->user()->id
       ]);

       


       return redirect('/blog');
    } 
    
    
  
    /**
     * Display the specified resource.
     */
    public function show($slug)
    {
        $post = Post::where('slug', $slug)->first();

        if (!$post) {
            abort(404);
        }
     
        return view('blog.show')->with('post',$post);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($slug)
    {
        return view('blog.edit')->with('post',Post::where('slug',$slug)->first());
       
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $slug){

        $request->validate([ 
            'title' => 'required|min:15|max:70',
            'description' => 'required|min:500|max:1000',
         
       ]);

       $post = Post::where('slug', $slug);

       if(!($request->image==null)){
        $request->validate([
            'image' => 'required|mimes:jpg,png,jpeg|max:5048'
        ]);
        $newImageName = uniqid() . '-' . Str::slug($request->input('title')) . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $newImageName);
        $post->update([
            'title'=>strip_tags($request->input('title')),
            'description'=>strip_tags($request->input('description')),
            'image_path' => $newImageName,
            'slug' => Str::slug($request->input('title')),
            'user_id' => auth()->user()->id
        ]);
       }
       else{
        $post->update([
            'title'=>strip_tags($request->input('title')),
            'description'=>strip_tags($request->input('description')),
            'slug' => Str::slug($request->input('title')),
            'user_id' => auth()->user()->id
        ]);
       }


return redirect('/blog/' . Str::slug($request->input('title')))->with('message', 'The Post has been modified successfully');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($slug)
    {
        Post::where('slug',$slug)->delete();

        return redirect('/blog/')->with('message','The Post has been deleted successfully');
    }
}
