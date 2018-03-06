<?php

namespace App\Http\Controllers;



use App\Notifications\AddPost;
use App\Post;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Redirect;
use StreamLab\StreamLabProvider\Facades\StreamLabFacades;





class Postcontroller extends Controller
{
    public function index() {
    	$posts = Post::get();
    	return view('post.allposts', compact('posts'));
    }


    public function create(){
    	return view('post.create');
    }

     public function store(Request $request){
    	$post = new Post();
    	$post ->title = $request->title;
    	$post ->body = $request->body;
    	$post ->view = 0;


    	if ($post->save()) {
    		$user = User::all();
    		Notification::send($user, new AddPost($post));

    	}
    	return redirect('post');

    }





}
