@extends('layouts.app')

@section('content')
    <h1 class="absolute-center">Welcome to Services</h1>
    <h2>{{$title}}</h2>
    @if (count($services) > 0)
<ul class="list-group">
    @foreach ( $services as $service)
        <li class="list-group-item">{{$service}}</li>
        
    @endforeach
        </ul>
    @endif
@endsection