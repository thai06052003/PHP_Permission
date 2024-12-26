@extends('layouts.app')
@section('content')
    <h1>Thêm sản phẩm</h1>
    <form action="" method="POST">
        <div class="mb-3">
            <label for="">Tên</label>
            <input type="text" name="name" class="form-control" placeholder="Tên..." required>
        </div>
        <div class="mb-3">
            <label for="">Gia</label>
            <input type="text" name="price" class="form-control" placeholder="Giá..." required>
        </div>
        <button class="btn btn-primary">Thêm mới</button>
    </form>
@endsection
