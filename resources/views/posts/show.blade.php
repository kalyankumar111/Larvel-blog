@extends('layouts.app')
@section('content')
<h1>Show posts</h1>
<a href="/posts" class="btn btn-secondary">Go Back</a>
 <img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}">
       

<li class="list-group-item">
<h3>{{$post->title}}</h3>
<div class="container-fluid">
{{$post->body}}
</div>
<hr>
<small>written on {{$post->created_at}}</small>
<hr>
@if (!Auth::guest())
    
@if (Auth::user()->id==$post->user_id)
    


<a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a> 

{!! Form::open(['action' => ['App\Http\Controllers\PostsController@destroy', $post->id], 'method'=>'POST', 'class'=>'pull-right']) !!}

{!! Form::hidden('_method', 'DELETE') !!}
{!! Form::submit('Delete', ['class'=>'btn btn-danger']) !!}

{!! Form::close() !!}

</li>
@endif
@endif
@endsection