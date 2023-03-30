<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View

    public function index()
    {
        $posts = Post::orderBy('created_at','DESC')->get();
        return view('admin.posts.index',[
            'posts'=>$posts
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View

    public function create()
    {
        $categories = Category::orderBy('created_at','desc')->get();
        return view('admin.posts.create',[
            'categories'=>$categories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response

    public function store(Request $request)
    {
        $post = new Post();
        $post->title=$request->title;
        $post->img= $request->img;
        $post->text=$request->text;
        $post->category_id=$request->category_id;
        $post->save();
        return redirect()->back()->withSuccess('Post has been successfully created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response

    public function show(Post $post)
    {
        //
    }


     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View

    public function edit(Post $post)
    {
        $categories = Category::orderBy('created_at','desc')->get();
        return view('admin.posts.edit',[
            'categories'=>$categories,
            'post'=>$post
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response

    public function update(Request $request, Post $post)
    {
        $post->title=$request->title;
        $post->img= $request->img;
        $post->text=$request->text;
        $post->category_id=$request->category_id;
        $post->save();
        return redirect()->back()->withSuccess('Post has been successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->back()->withSuccess('Post has been successfully Deleted');
    }*/
    public function index()
    {
       // $posts = Post::all();
        $posts = Post::orderBy('title', 'desc')->get();
        return view('admin.posts.index')->with('posts', $posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        $categories = Category::orderBy('created_at','desc')->get();
        return view('admin.posts.create',[
            'categories'=>$categories
        ]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'text' => 'required',
            'img' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'category_id' => 'required'
        ]);

        if($request->hasFile('img')) {
            $image = $request->file('img');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('img'), $imageName);
            $validatedData['img'] = $imageName;
        }

        $post = Post::create($validatedData);

        return redirect()->route('post.index', ['post' => $post->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        return view('user.posts.show')->with('post', $post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $post = Post::find($id);
        If(auth()->user()->id !==$post->user_id){
            return redirect('/posts') -> with('error', 'Unauthorizod page.');
        }
        return view('admin.posts.edit')->with('post', $post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'title' =>'required',
            'body' =>'required',
            'cover_image'=>'image|nullable|max:1999'
        ]);

        if($request->hasFile('cover_image')){
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();

            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

            $extension = $request->file('cover_image')->getClientOriginalExtension();

            $fileNameToStore = $filename.'_'.time().'_'.$extension;

            $path = $request->file('cover_image')->storeAs('public/cover_image', $fileNameToStore);
        }
        $post =  Post::find($id);
        $post->title=$request->input('title');
        $post->body=$request->input('body');
        if($request->hasfile('cover_image')){
            $post->cover_image = $fileNameToStore;
        }
        $post -> save();
        return redirect ('/posts')->with('success', 'Post updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post =  Post::find($id);
        If(auth()->user()->id !==$post->user_id){
            return redirect('/posts') -> with('error', 'Unauthorizod page.');
        }
        if($post->image_cover != 'noimage.jpg'){
            Storage::delete('public/cover_image/'.$post->cover_image);
        }
        $post->delete();
        return redirect ('/posts')->with('success', 'Post DELETED');
    }
}
/*public function index()
{
    $posts = Post::all();
    return view('posts.index', compact('posts'));
}

public function create()
{
    return view('posts.create');
}

public function store(Request $request)
{
    $validatedData = $request->validate([
        'title' => 'required|max:255',
        'content' => 'required',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $image_name = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/images');
        $image->move($destinationPath, $image_name);
        $validatedData['image'] = $image_name;
    }

    $post = Post::create($validatedData);

    return redirect()->route('posts.show', ['post' => $post->id]);
}

public function show(Post $post)
{
    return view('posts.show', compact('post'));
}

public function edit(Post $post)
{
    return view('posts.edit', compact('post'));
}

public function update(Request $request, Post $post)
{
    $validatedData = $request->validate([
        'title' => 'required|max:255',
        'content' => 'required',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $image_name = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/images');
        $image->move($destinationPath, $image_name);
        $validatedData['image'] = $image_name;
    }

    $post->update($validatedData);

    return redirect()->route('posts.show', ['post' => $post->id]);
}

public function destroy(Post $post)
{
    $post->



*/
