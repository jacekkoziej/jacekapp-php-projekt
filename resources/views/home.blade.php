@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Panel</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <a href="/posts/create" class="btn btn-dark">Dodaj wpis</a>

                        <h4 style="margin-top: 15px">Twoje wpisy na blogu</h4>
                            @if(count($posts)>0)
                        <table class="table table-striped">
                            <tr>
                                <th>Tytuł</th>
                                <th></th>
                                <th></th>
                            </tr>
                            @foreach($posts as $post)
                                <tr>
                                    <td>{{$post->title}}</td>
                                    <td><a href="/posts/{{$post->id}}/edit" class="btn btn-dark">Edytuj</a></td>
                                    <td>
                                        {!! Form::open(['action'=>['PostController@destroy', $post->id], 'method'=> 'POST', 'class'=>'float-right' ]) !!}
                                        {{Form::hidden('_method', 'DELETE')}}
                                        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                        @else
                            <p>Nie masz żadnych wątków.</p>
                            @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
