@extends('admin.layouts.layout')


@section('content')
    <div class="card card-primary m-4">
        <div class="card-header">
            <h3 class="card-title">Редактирование тега</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{ route('tags.update', ['tag' => $tag->id]) }}" method="post">
            @csrf
            @method('PATCH')
            <div class="card-body">
                <div class="form-group">
                    <label for="title">Категория "{{ $tag->title }}"</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                           name="title" value="{{ $tag->title }}">
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Редактировать тег</button>
            </div>
        </form>
    </div>
@endsection

