<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

use Illuminate\Support\Facades\Validator;

class PostsController extends Controller
{
public function index(){
	return view('posts.index');
}
public function create()
{
	return view('posts.create');
}
public function edit($id)
{
	return view('posts.edit');
}

public function store(Request $request)
{
	$validator = Validator::make($request->all(), [
            'title' => 'required',
            'description' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('posts/create')
                        ->withErrors($validator)
                        ->withInput();
        }
	$post = new Post;
	$post->title = $request->title;
	$post->description = $request->description;
	$post->save();

}



}