@extends('layouts.template')

@section('index-content')

  <h2>Posts Lists</h2>
  <a href="{{route('posts.create')}}">Create Post</a>
  <br/>
  @foreach ($posts as $post)    
  <br/>
  <div class="card">
          <div class="card-body">
            <div>
              <a href="{{route('posts.edit', $post)}}">
                  <button type="button" class="btn btn-outline-warning">Edit</button> 
              </a>
            </div>
          <!--img class="card-img-top" src="https://f4.bcbits.com/img/a0278585314_10.jpg" alt="Card image cap"-->
            <h6> {{$post->title}} </h6>
            @foreach ($post->articles as $article)
              <p>
                  {{$article->title}}
              </p>    
            @endforeach
            
          </div>
  </div>

@endforeach

<br/>
@endsection

