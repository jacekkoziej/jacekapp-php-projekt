@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-outline-dark" style="margin: 3px">Wróć</a>
    <h1>{{$post->title}}</h1>
    <div>
        {!! $post->body !!}
    </div>
    <hr>
    <small>Dodano {{$post->created_at}}</small>
    <hr>
    <a href="/posts/{{$post->id}}/edit" class="btn btn-dark">Edytuj</a>
    {!! Form::open(['action'=>['PostController@destroy', $post->id], 'method'=> 'POST', 'class'=>'float-right' ]) !!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
    {!! Form::close() !!}
@endsection

