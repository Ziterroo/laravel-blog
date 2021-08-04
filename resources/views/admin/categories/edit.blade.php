@extends('admin.layouts.layout')


@section('content')
    <div class="card card-primary m-4">
        <div class="card-header">
            <h3 class="card-title">Редактирование категории</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{ route('categories.update', ['category' => $category->id]) }}" method="post">
            @csrf
            @method('PATCH')
            <div class="card-body">
                <div class="form-group">
                    <label for="title">Категория "{{ $category->title }}"</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="title"
                           name="title" value="{{ $category->title }}">
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Редактировать категорию</button>
            </div>
        </form>
    </div>
@endsection

