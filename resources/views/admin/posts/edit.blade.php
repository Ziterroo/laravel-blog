@extends('admin.layouts.layout')

@section('content')
    <div class="card card-primary m-4">
        <div class="card-header">
            <h3 class="card-title">Редактирование статьи "{{ $post->title }}"</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{ route('posts.update', ['post' => $post->id]) }}" method="post" enctype="multipart/form-data">
            @method('PATCH')
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="title">Название статьи</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                           name="title" value="{{ $post->title }}">
                </div>
                <div class="form-group">
                    <label for="description">Описание статьи</label>
                    <textarea class="form-control @error('description') is-invalid @enderror" rows="3"
                              id="description" name="description">{{ $post->description }}</textarea>
                </div>
                <div class="form-group">
                    <label for="content">Текст статьи</label>
                    <textarea class="form-control @error('content') is-invalid @enderror" rows="3"
                              id="content" name="content">{{ $post->content }}</textarea>
                </div>
                <div class="form-group">
                    <label for="category_id">Выберите категорию</label>
                    <select class="form-control" id="category_id" name="category_id">
                        @foreach($categories as $id => $title)
                            <option value="{{ $id }}"
                                    @if($id == $post->category->id) selected @endif>{{ $title }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="tags">Теги</label>
                    <select class="select2" multiple="multiple" data-placeholder="Выбор тегов" id="tags" name="tags[]"
                            style="width: 100%;">
                        <option>Без тега</option>
                        @foreach($tags as $id => $tag)
                            <option value="{{ $id }}"
                                    @if(in_array($id, $post->tags->pluck('id')->all())) selected @endif>{{ $tag}}</option>
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
                <div class=""><img src="{{ $post->getImage() }}" width="200px" class="img-thumbnail" alt=""></div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Редактировать статью</button>
            </div>
        </form>
    </div>
@endsection
