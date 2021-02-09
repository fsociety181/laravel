@extends('layouts.app')

@section('title')
    Мой первый блок на Laravel
@endsection

@section('content')
    <h1 class="text-center mt-3 mb-5">My Laravel</h1>

    <div class="container">
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
    </div>
    @include('inc.article')
    <div class="container text-center mt-4">
        {{ $data->links('inc.paginate') }}
    </div>
@endsection




