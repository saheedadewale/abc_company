@extends('layout.app')

@section('content')
    <h3>Reading: {{$posts->title}} </h3> <a href="/posts" class="btn btn-secondary btn-sm">Back</a>

           <div class="card">
                <div class="card-body">
                 <a href=""> <h5 class="card-title">{{$posts->title}}</h5></a>
                  <p class="card-text">{{$posts->body}}</p>
                  <p class="card-text"><small class="text-muted">Posted on {{$posts->created_at}}</small></p>
                </div>
                {{-- <img src="..." class="card-img-top" alt="Post Image"> --}}
              </div>
@endsection





