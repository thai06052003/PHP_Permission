@extends('layouts.app')
@section('content')
    <h1>Thêm bài viết</h1>
    <form action="" method="POST">
        <div class="mb-3">
            <label for="">Tiêu đề</label>
            <input type="text" name="title" class="form-control" placeholder="Tiêu đề..." required>
        </div>
        <div class="mb-3">
            <label for="">Nội dung</label>
            <textarea type="text" name="content" class="form-control" placeholder="Nội dung..." required></textarea>
        </div>
        <button class="btn btn-primary">Thêm mới</button>
    </form>
@endsection
