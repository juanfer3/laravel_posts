@extends('layouts.template')

@section('index-content')
    <br/>

    <h2>Create Posts</h2>
    <a href="{{route('posts.index')}}">List Posts</a>
    <form method="POST" action="{{route('posts.store')}}">
        @include('posts/_form')
        @push('articles')
        @include('posts/partials/_article', ['article' => null])                  
    @endpush
    </form>


    
    


    <script>

        $(document).ready(function(){
            $('.add_more_articles').click(function(e){
                e.preventDefault();
                $(".add_articles").append('<p>agregar campo</p>')
            })            

        })

    </script>
@endsection
