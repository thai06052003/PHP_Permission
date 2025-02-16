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
                                <?php $__currentLoopData = $module->actions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $action): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="col-3">
                                        <label for="">
                                            <input type="checkbox" name="permissions[]" id="" value="<?php echo e($module->name.'.'.$action->name); ?>">
                                            <?php echo e($action->title); ?>

                                        </label>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
        <button class="btn btn-primary">Lưu thay đổi</button>
        <a href="<?php echo e(url('permissions.index')); ?>" class="btn btn-secondary">Quay lại</a>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>