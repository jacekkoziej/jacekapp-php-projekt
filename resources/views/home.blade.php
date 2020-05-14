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

                    <h6 style="margin-top: 15px">Twoje wpisy na blogu</h6>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
