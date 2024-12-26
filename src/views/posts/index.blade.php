@extends('layouts.app')
@section('content')
    <h1>Quản lý bài viết</h1>
    <a href="{{url('posts.add')}}" class="my-2 btn btn-success">Thêm bài viết</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th width="5%">STT</th>
                <th>Tiêu đề</th>
                <th>Nội dung</th>
                <th width="5%">Sửa</th>
                <th width="5%">Xóa</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($posts as $key => $post)
                <tr>
                    <td>{{$key + 1}}</td>
                    <td>{{$post->title}}</td>
                    <td>{{$post->content}}</td>
                    <td><a href="{{url('posts.edit', ['id' => $post->id])}}" class="btn btn-warning btn-sm">Sửa</a></td>
                    <td>
                        <form onsubmit="return confirm('Bạn có chắc chắn?')" action="{{url('posts.delete', ['id' => $post->id])}}" method="POST">
                            <button class="btn btn-danger btn-sm">Xóa</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
