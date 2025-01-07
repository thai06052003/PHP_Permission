@extends('layouts.app')
@section('content')
    <h1>Thêm vai trò</h1>
    <form action="" method="POST">
        <div class="mb-3">
            <label for="">Tên vai trò</label>
            <input type="text" name="name" class="form-control" placeholder="Tên vai trò..." required>
        </div>
        <p>Danh sách quyền</p>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th width="20%">Chức năng</th>
                    <th>Quyền</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($modules as $module)
                    <tr>
                        <td>{{ $module->title }}</td>
                        <td>
                            <div class="row">
                                <div class="col-3">
                                    <label for="">
                                        <input type="checkbox" name="permissions[]" id="">
                                        Xem
                                    </label>
                                </div>
                                <div class="col-3">
                                    <label for="">
                                        <input type="checkbox" name="permissions[]" id="">
                                        Thêm
                                    </label>
                                </div>
                                <div class="col-3">
                                    <label for="">
                                        <input type="checkbox" name="permissions[]" id="">
                                        Cập nhật
                                    </label>
                                </div>
                                <div class="col-3">
                                    <label for="">
                                        <input type="checkbox" name="permissions[]" id="">
                                        Xóa
                                    </label>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <button class="btn btn-primary">Thêm mới</button>
    </form>
@endsection
