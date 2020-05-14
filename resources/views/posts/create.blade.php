@extends('layouts.app')

@section('content')
    {!! Form::open(['action'=> 'PostController@store', 'POST']) !!}
        <div class="form-group">
            <h1>Stwórz wpis</h1>
            {{Form::label('title', 'Tytuł')}}
            {{Form::text('title', '', ['class'=> 'form-control','placeholder'=>'Tytuł'])}}
        </div>
    <div class="form-group">
        {{Form::label('body', 'Treść')}}
        {{Form::textarea('body', '', ['id'=>'article-ckeditor', 'class'=> 'form-control','placeholder'=>'Tutaj wpisz tekst...'])}}
    </div>
    {{Form::submit('Submit', ['class'=>'brn btn-primary'])}}
    {!! Form::close() !!}
@endsection


