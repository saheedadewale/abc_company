@extends('layout.app')

@section('content')
    <h1>Updated Posts </h1>
    @if(count($posts) > 0)
        @foreach($posts as $post)

           <div class="card">
                <div class="card-body">
                 <a href="/posts/{{$post->id}}"> <h5 class="card-title">{{$post->title}}</h5></a>
                  <p class="card-text">{{$post->body}}</p>
                  <p class="card-text"><small class="text-muted">Posted on {{$post->created_at}}</small></p>
                </div>
                {{-- <img src="..." class="card-img-top" alt="Post Image"> --}}
              </div>
              <hr>
        @endforeach
        {{$posts->links()}}
    @else
              <p>No Post found!</p>
    @endif
@endsection





