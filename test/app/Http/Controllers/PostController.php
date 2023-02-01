<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    //
    public function index(){
        $posts = DB::table('test')->get();
        return view('index',compact('posts'));
    }
    public function create(){
        return view('posts');
    }

    public function insert(Request $request){

        DB::table('test')->insert([
            'title'=>$request->title,
             'body'=>$request->body,
        ]);
        return redirect()->route('posts');
    }

    public function edit($id){
        $post = DB::table('test')->where('id',$id)->first();
        return view('edit',compact('post'));
    }

    public function update(Request $request,$id){
        DB::table('test')->where('id',$id)->update([
           'title'=>$request->title,
            'body'=>$request->body,
        ]);
        return redirect()->route('posts');
    }

    public function delete($id){

        DB::table('test')->where('id',$id)->delete();
        return redirect()->route('posts');
    }

    public function deleteAll(){
        DB::table('test')->delete();
        return redirect()->route('posts');

    }

    public function deleteAlltruncate(){
        DB::table('test')->truncate();
        return redirect()->route('posts');

    }
}
