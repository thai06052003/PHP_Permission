@extends('layouts.app')
@section('content')
    <h1>Cập nhật bài viết</h1>
    <form action="" method="POST">
        <div class="mb-3">
            <label for="">Tiêu đề</label>
            <input type="text" name="title" class="form-control" placeholder="Tiêu đề..." value="{{$post->title}}" required>
        </div>
        <div class="mb-3">
            <label for="">Nội dung</label>
            <textarea name="content" class="form-control" placeholder="Nội dung..." required>{{$post->content}}</textarea>
        </div>
        <button class="btn btn-primary">Cạp nhật</button>
    </form>
@endsection
.