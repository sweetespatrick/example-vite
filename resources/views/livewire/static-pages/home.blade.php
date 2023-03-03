@extends('layouts.default')
@section('title','my homepage')
@section('content')
  <div class="bg-blue-200 p-2  m-3 ">
    <h1 class="text-3xl mb-4 first-line:font-bold underline"> Hello Laravel</h1>

    <p class="mb-5">
        你现在所看到的是<a href="#">Laravel入门课程</a>的示例项目。

    </p>

    <p class="mb-7">
        一切，从这里开始。

    </p>

    <p>
        <button class="border-1 hover:rounded-lg w-24 bg-indigo-400 rounded-full" onclick="window.open('https://www.baidu.com')" >现在注册</button>
    </p>
  </div>

@stop
