@extends('layouts.app')

@section('content')
<h1>Wątki</h1>
    @if(count($posts)>1)
        @foreach($posts as $posts)
            <div class="card p-3 mt-3 mb-3">
                <h3><a href="/posts/{{$posts->id}}">{{$posts->title}}</a></h3>
                <small>Dodano {{$posts->created_at}}</small>
            </div>
        @endforeach
    @else
    <p>Brak wątków do wyświetlenia</p>
    @endif
@endsection

