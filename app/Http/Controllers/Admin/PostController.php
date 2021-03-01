<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;
use App\User;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts=Post::where('user_id',Auth::id())->get();
        return view('admin.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=$request->all();
    
        $request->validate([
            'title' => 'required | max:100',
            'text' => 'required'
            ]);

        $data["slug"]=Str::slug($data["title"]);
        $data["user_id"]=Auth::id();
        $data["pubblication_date"]= date('Y-m-d');
        
        $newPosts= new Post();
        $newPosts->fill($data);
        $newPosts->save();
        return redirect()->route('admin.posts.index')->with('status',"post ".$newPosts->title ." eliminato correttamente");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('admin.posts.show',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('admin.posts.edit',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $request->validate($this->ValidateData);
         $data= $request->all();
         $post->update($data);

        return redirect()
            ->route('admin.posts.index')
            ->with('status', "post'" . $post->title. "' aggiornato correttamente!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $oldPost=$post->id; //memorizzo vecchio id
        $post->delete();
        return redirect()->route('admin.posts.index')->with('status',"post ". $post->id." eliminato correttamente"); //messaggio di conferma mettere codice in vista rifersi a doc.
        /* $post->delete();
        return resource()->route('admin.posts.index'); */
    }
}
