<!--layoutsフォルダの中のlayoutファイルを継承してくるという意味-->
@extends('layouts.layouts')

<!--layoutsファイルの@yiel('title')の部分をSimple Boardというタイトルにする-->
@section('title', 'Simple Board')


<!--@yield('content')の内容を変更する-->
@section('content')

    @if(session('message'))
        {{ session('message')}}
    @endif

<h1>Posts</h1>

@foreach($posts as $post)
    <a herf="/posts/{{ $post->id }}">{{ $post->title }}</a>
    <a herf="/posts/{{ $post->id }}/edit">Edit</a>

    <form action="/posts/{{$post->id}}"method="POST" onsubmit="if(confirm('Delete?Are you sure?')){return}else{return false};">
        <input type="hidden" name="_method" value="DELETE">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <button type="submit">Delete</button>
        
    </form>
@endforeach


<a href="/posts/create">New Post</a>

@endsection