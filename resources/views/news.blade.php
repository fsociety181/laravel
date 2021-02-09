@extends('layouts.app')

    @section('title') Новости @endsection

@section('content')

    <h1 class="text-center mb-4">Новости</h1>

    @include('inc.main_article')

        <div class="container text-center mb-5">
            {{ $main->links('inc.paginate') }}
        </div>

    @if($errors->any())
        <div class="container">
            <div class="alert alert-danger">
                <ul class="pt-3">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endif

<div class="p-3 news">
    <div class="container ">
        <form action="{{ route('create_article') }}" method="post" enctype = "multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="theme_article">Заголовок</label>
                <input type="text"  class="form-control" placeholder="Введите заголовок новости" name="theme_article" id="theme_arcticle">
            </div>
            <div class="form-group">
                <label for="text">Текст </label>
                <textarea type="text"  name="text" id="text" class="form-control" placeholder="Введите текст" ></textarea>
            </div>
            <div class="form-group">
                <label for="image">Загрузить картинку </label>
                <input type="file"  name="image" id="image" placeholder="Введите тему" >
            </div>
            <div class="form-group ">
                <button class="btn btn-success" type="submit">Опубликовать</button>
            </div>
        </form>
    </div>
</div>
@endsection



