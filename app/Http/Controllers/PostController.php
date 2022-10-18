<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostStoreRequest;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    //  $posts = Post::query()
    //     ->latest('created_at')
    //     ->paginate();
        
         $post_query = Post::query();
         $post_query->with('author');

        if(request('orderBy')=== 'oldest'){
            $post_query->oldest('created_at');

        }else{
             $post_query->latest('created_at');
  
        }
          $posts = $post_query ->paginate();

        return view('features.post.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('features.post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostStoreRequest $request)
    {
        
         $validated_data = $request->validated();

        // $validated_data['slug'] = Str::uniqueSlug(Post::class, $request->title, 'slug');

        // $validated_data['published_at'] = $request->is_published === '0' ? null : now();

        // $validated_data['user_id'] = auth()->id();

        Post::create($validated_data);

        return redirect()
               ->back()
               ->with('Post Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
