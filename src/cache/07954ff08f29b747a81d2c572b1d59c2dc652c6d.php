<?php $__env->startSection('content'); ?>
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
                <?php $__currentLoopData = $modules; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $module): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($module->title); ?></td>
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
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
        <button class="btn btn-primary">Thêm mới</button>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>