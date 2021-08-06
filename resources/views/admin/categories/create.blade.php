@extends('admin.layouts.layout')


@section('content')
    <div class="card card-primary m-4">
        <div class="card-header">
            <h3 class="card-title">Добавление категории</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{ route('categories.store') }}" method="post">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="title">Название категории</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                           placeholder="Название категории" name="title">
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Создать категорию</button>
            </div>
        </form>
    </div>
@endsection

