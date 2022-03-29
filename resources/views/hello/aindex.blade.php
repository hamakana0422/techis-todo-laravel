@extends('layouts.helloapp')
@section('title','Index')
@section('menubar')
 @parent
    インデックスページ
@endsection

@section('content')
    <p>ここが本文のコンテントです</p>
    <p>好きな分だけ記述できます</p>
@endsection

@section('footer')
    copyrights 2020 hamada
@endsection










<!-- <html>
    <head>
        <title>Hello/Index</title>
        <style>
        body {font-size:16pt; color:#999;}
        h1 {font-size:100pt; text-align:right; color:#f6f6f6;
            margin: -20px 0px -30px -0px; letter-spacing: -4pt;}
        </style>
    </head> 
    
    <body>
        <h1>Blade/Index</h1>
        <p>&#064;foreachディレクティブの例</p>
        <ol>
        @foreach($data as $item)
        <li>{{$item}}
        @endforeach
        </ol>

    </body>
</html> -->