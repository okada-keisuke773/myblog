<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Works;

class WorkController extends Controller
{
    public function index(Request $request){
        $cond_name = $request->cond_name;

        if ($cond_name != '') {
            $posts = Works::where('name', $cond_name).orderBy('updated_at', 'desc')->get();
        }else{
            $posts = Works::all()->sortByDesc('updated_at');
        }
         if (count($posts) > 0) {
            $headline = $posts->shift();
        } else {
            $headline = null;
        }
        return view('work.index', ['headline' => $headline, 'posts' => $posts, 'cond_name' => $cond_name]);
    }
}
