@extends('layouts.template')

@section('index-content')
    
    <h2>Edit Post {{$post->title}} </h2>
    <a href="{{route('posts.index')}}">List Posts</a>
    <form action="{{route('posts.update', $post)}}" method="POST">
        {{method_field('PUT')}}
        @include('posts/_form', ['articles' => $post->articles])
    </form>
@endsection