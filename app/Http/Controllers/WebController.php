<?php

namespace App\Http\Controllers;


use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WebController extends Controller
{

    public function home(){
        // $posts = DB::connection('mysql_other')->table('news')->get();
        // return view('template.home')->with('posts', $posts);
        


        return view('template.home');
    }

    public function nosotros(){
        return view('template.nosotros');
    }

    public function eventos(){


        return view('template.eventos');
    }

    public function lugares(){
        return view('template.lugares');
    }

    public function mundo(){
        return view('template.mundo');
    }

    public function ferias(){
        return view('template.ferias');
    }
}
