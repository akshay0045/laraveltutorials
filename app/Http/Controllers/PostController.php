<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Http\Requests\StoreBlogPost;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function posts()
    {
        //return $request->method();
        //return $request->fullUrl();
        //return $request->query('name');
        //check get post method of request
        /* if ($request->isMethod('GET')) {
            return "Retuest is accepted";
        }
        else {
            return "Request is not accepted";
        }
        //check path of url
        if ($request->is('posts')) {
            return "Retuest is accepted";
        }
        else {
            return "Request is not accepted";
        }
        echo "This is index post controller"; */

        $posts = new Post;
        $data = $posts->data();
        return view('posts.index', compact('data'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$request->flash();
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBlogPost $request)
    {
        //return $request->all();
        // echo $request->input('title');
        // echo $request->input('comments');
        //return $request->path();
        //return $request->url();
        //return $request->input('check.0');
        // return $request->check[0];
        // return $request->only('title', 'check');
        //return $request->except(['check', '_token']);
        //has and filled filled also checked value is not empty or empty
        //$request->file('photo')->store('images', 'public');
        //$data = ["name" => "akshay shah", "Age" => 40];
        //return response($data, 200)->header("content-type", "application/json");
        //return response('<h2>Hello word</h2>', 200)->header("content-type", "text/html");
        /* $request->validate([
            "title" => "required",
            "comments" => "required",
            "check" => "required",
            "photo" => "required"
        ]); */
        //$request->validated();
        if ($request->hasFile('photp')) {
            $request->file('photo')->storeAs('images', 'logo.jpg', 'public');
        }

        /* if ($request->has(['title', 'comments'])) {
         return $request->except(['check', '_token']);
         }
         else {
         return "input not available";
         } */
        //$data = $request->all();
        //return view('posts.show', compact('data'));
        //return back()->withInput();
        return back()->with("message", "This form has been submitted successfully");

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $posts = new Post;
        $data = $posts->data()[$id-1];
        return view('posts.show', compact('data'));
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
    public function update(StoreBlogPost $request, $id)
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

    public function filters()
    {
        echo "This is filter function";
    }
}
