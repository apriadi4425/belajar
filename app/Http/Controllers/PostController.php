<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{
    public function index(){
        return Post::paginate(10);
    }
    public function get_data_by_id(Post $post){
        return $post;
    }
    public function insert(Request $request){

        $validator = Validator::make($request->all(), [
           'title' => 'required|min:5',
            'content' => 'required|min:10|max:100'
        ]);
        if ($validator->fails()) {
            return response()->json(['status'=> 'error','data'=>$validator->errors()],400);
        }else{
            Post::create($request->all());
        }

    }
}
