@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-outline-dark" style="margin: 3px">Wróć</a>
    <h1>{{$post->title}}</h1>
    <div>
        {{$post->body}}
    </div>
    <hr>
    <small>Dodano {{$post->created_at}}</small>
@endsection

