@extends('layouts.app')
@section('content')
    <h1>Quản lý sản phẩm</h1>
    <a href="{{url('products.add')}}" class="my-2 btn btn-success">Thêm sản phẩm</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th width="5%">STT</th>
                <th>Tên</th>
                <th>Giá</th>
                <th width="5%">Sửa</th>
                <th width="5%">Xóa</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($products as $key => $product)
                <tr>
                    <td>{{$key + 1}}</td>
                    <td>{{$product->name}}</td>
                    <td>{{$product->price ? number_format($product->price) : 0}}</td>
                    <td><a href="{{url('products.edit', ['id' => $product->id])}}" class="btn btn-warning btn-sm">Sửa</a></td>
                    <td>
                        <form onsubmit="return confirm('Bạn có chắc chắn?')" action="{{url('products.delete', ['id' => $product->id])}}" method="POST">
                            <button class="btn btn-danger btn-sm">Xóa</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
