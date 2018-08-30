<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use App\User;
use Auth;


class PostController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $current_user_id=Auth::user()->id;
      $posts=Post::where('created_by',$current_user_id)->get();
      return view('post.postIndex')->with(['posts'=>$posts]);
    }

    public function indexAllpost()
    {
        $current_user_id=Auth::user()->id;
        $posts=Post::where('created_by','<>',$current_user_id)->get();
        return view('post.postAllIndex')->with(['posts'=>$posts]);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('post.createPost');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $current_user_id=Auth::user()->id;
      $post= new Post($request->all());
      $post['created_by']=Auth::user()->id;
      $post->save();
      $posts=Post::where('created_by',$current_user_id)->get();
      $request->session()->flash('status', 'Post is create successfully!');
      return view('post.postIndex')->with(['posts'=>$posts]);
      }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $post=Post::find($id);
      return view('post.createPost')->with(['post'=>$post]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $current_user_id=Auth::user()->id;
        $post=Post::find($id);
        $post->update($request->all());
        $posts=Post::where('created_by',$current_user_id)->get();
        return view('post.postIndex')->with(['posts'=>$posts]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
