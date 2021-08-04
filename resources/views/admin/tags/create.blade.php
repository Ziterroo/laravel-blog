@extends('admin.layouts.layout')


@section('content')
    <div class="card card-primary m-4">
        <div class="card-header">
            <h3 class="card-title">Добавление тега</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{ route('tags.store') }}" method="post">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="title">Название тега</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                           placeholder="Название тега" name="title">
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Создать тег</button>
            </div>
        </form>
    </div>
@endsection

