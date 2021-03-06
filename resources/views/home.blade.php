@extends('layouts.app')

@section('content')
<br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="/posts/create" class="btn btn-dark">CreatePost</a>
                    <h1>Your Blog Post</h1>
                    @if (count($posts)>0)
                          <table class="table table-striped">
                          <th>Title</th>
                          <th></th>
                          <th></th>
                        @foreach ($posts as $post)

                        <tr>
                            <td>
        <img style="width:150px; height:100px"  src="storage/cover_images/{{$post->cover_image}}"></td>
                            <td>{{$post->title}}</td>
                            <td><a href="/posts/{{$post->id}}/edit" class="btn btn-secondary">Edit</a></td>
                            <td>
                            {!! Form::open(['action' => ['App\Http\Controllers\PostsController@destroy', $post->id], 'method'=>'POST', 'class'=>'pull-right']) !!}

                            {!! Form::hidden('_method', 'DELETE') !!}
                            {!! Form::submit('Delete', ['class'=>'btn btn-danger pull-right']) !!}

                            {!! Form::close() !!}
                            
                            </td>
                        </tr>
                        
                        @endforeach
                        </table>
                        @else
                        <p>You have no posts</p>
                         @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
