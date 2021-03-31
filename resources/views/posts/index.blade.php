@extends('layouts.app')
@section('content')
<h1>Posts</h1>
@if (count($posts) > 0)
    @foreach ($posts as $post)
        <div class="well">
        <div class="row">
        <div class="col-md-4 col-sm-4">
        <img style="width:100%" src="storage/cover_images/{{$post->cover_image}}">
        </div>

        <div class="col-md-8 col-sm-8">
         <li class="list-group-item">
                <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
               <h5>  {{$post->body}}</h5> <br><small>at time {{$post->created_at}}</small>
        </div>
        
        </div>
           
            </li>
        </div>
    @endforeach
        {{$posts->links()}}
  @else
  <p>No Posts found</p>  
@endif
@endsection