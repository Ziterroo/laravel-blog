@extends('admin.layouts.layout')

@section('content')
    <div class="card card-primary m-4">
        <div class="card-header">
            <h3 class="card-title">Добавление статьи</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="title">Название статьи</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                           placeholder="Название категории" name="title" value="{{ old('title') }}">
                </div>
                <div class="form-group">
                    <label for="description">Описание статьи</label>
                    <textarea class="form-control @error('description') is-invalid @enderror" rows="3"
                              placeholder="Описание статьи" id="description"
                              name="description"></textarea>
                </div>
                <div class="form-group">
                    <label for="content">Текст статьи</label>
                    <textarea class="form-control @error('content') is-invalid @enderror" rows="3"
                              placeholder="Текст статьи" id="content" name="content"></textarea>
                </div>
                <div class="form-group">
                    <label for="category_id">Выберите категорию</label>
                    <select class="form-control" id="category_id" name="category_id">
                        @foreach($categories as $id => $title)
                            <option value="{{ $id }}">{{ $title }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="tags">Теги</label>
                    <select class="select2" multiple="multiple" data-placeholder="Выбор тегов" id="tags" name="tags[]"
                            style="width: 100%;">
                        <option>Без тега</option>
                        @foreach($tags as $id => $tag)
                            <option value="{{ $id }}">{{ $tag}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="thumbnail">Изображение</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="thumbnail" name="thumbnail">
                            <label class="custom-file-label" for="thumbnail">Choose file</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Создать категорию</button>
            </div>
        </form>
    </div>
@endsection
