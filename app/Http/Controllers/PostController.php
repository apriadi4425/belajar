<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function index(){
        return Post::paginate(10);
    }
    public function get_data_by_id(Post $post){
        return $post;
    }
}
