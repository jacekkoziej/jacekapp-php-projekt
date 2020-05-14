@extends('layouts.app')

@section('content')
    {!! Form::open(['action'=> ['PostController@update', $posts->id], 'POST']) !!}
    <div class="form-group">
        <h1>Edytuj wpis</h1>
        {{Form::label('title', 'Tytuł')}}
        {{Form::text('title', $posts->title, ['class'=> 'form-control','placeholder'=>'Tytuł'])}}
    </div>
    <div class="form-group">
        {{Form::label('body', 'Treść')}}
        {{Form::textarea('body',$posts->body , ['id'=>'article-ckeditor', 'class'=> 'form-control','placeholder'=>'Tutaj wpisz tekst...'])}}
    </div>
    {{Form::hidden('_method','PUT')}}
    {{Form::submit('Submit', ['class'=>'brn btn-primary'])}}
    {!! Form::close() !!}
@endsection


