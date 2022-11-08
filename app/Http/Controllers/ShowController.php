<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Shop;
use App\Models\Comment;

class ShowController extends Controller
{



    public function comment($post, $f)
    {
        $c = Comment::where('furniture_id', $f)->orderBy('furniture_id')->simplePaginate(5);
        return view('posts.comments', ['post'=> $post, 'c'  => $c, 'f' => $f]);
    }

    public function infoBlock( $post, $f )
    {

    $posts = Shop::where('furniture', $f)->get();
    return view('posts.info_block', ['posts' => $posts, 'f' => $f]);

    }

    public function post( $room )
    {

    $posts = Shop::where( 'tips', $room )->orderBy('furniture')->simplePaginate(5);


    return view('posts.post', ['posts' => $posts]);

    }

    public function search(Request $request)
    {


        $s = $request->s;
        $posts = Shop::where('furniture', 'LIKE', "%{$s}%")->orderBy('furniture')->simplePaginate(5);
        return view('posts.post',['posts' => $posts, 's'=>$s]);
       

    }

    public function push(Request $request, $f)
    {

        $comment = $request->text;
        $name = $request->text2;

        $posts = new Comment;
        $posts->users = $name;
        $posts->furniture_id = $f;
        $posts->comments = $comment;
        $posts->save();
        $c = Comment::where('furniture_id', $f)->orderBy('furniture_id')->simplePaginate(5);
        return view('posts.comments', ['f'=>$f, 'c'=>$c]);

    }




}
