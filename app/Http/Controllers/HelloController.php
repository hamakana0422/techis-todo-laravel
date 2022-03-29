<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller{

public function index()

{
    $data = ['one','two','three','four','five','six'];
    return view('hello.index',['data'=>$data]);
}

}



// public function index()
// {
//     return view('hello.index',['msg'=>'']);

// }
// public function post(Request $request)
// {
//     return view('hello.index',['msg'=>$request->msg]);

// }



// public function index()
// {
//     $data = ['msg'=>'お名前を入力してください。'];
//     return view('hello.index',$data);
// }
// public function post(Request $request)
// {
//     $msg = $request->msg;
//     $data = ['msg'=> 'こんにちは！'. $msg . 'さん！'];
//     return view('Hello.index',$data);
// }


// global $head, $style, $body, $end;
// $haad = '<html><head>';
// $style = <<<EOF
// <style>
// body {font-size:16pt; color:#999;}
// h1 {font-size:100pt; text-align:right; color:#eee;
//     margin: -40px 0px -50px -0px;}
// </style>
// EOF;
// $body = '</head><body>';
// $end = '</body></html>';

// function tag($tag,$text){
//     return "<{$tag}>" . $text . "</{$tag}>";

// }

// class HelloController extends Controller
// {

//     public function index(){
//         global $head, $style, $body, $end;

//         $html = $head . tag('title','Hello/Index') . $style . $body . tag('h1','Index') . tag('p','This is Index page') . '<a href="/hello/other">go to other page</a>' . $end;
//         return $html; 
//     }


//     public function other(){
//         global $head, $style, $body, $end;

//         $html = $head . tag('title','Hello/Other') . $style . $body . tag('h1','Other') . tag('p','This is Other page') . $end;
//         return $html;
//     }
         
         
//}
