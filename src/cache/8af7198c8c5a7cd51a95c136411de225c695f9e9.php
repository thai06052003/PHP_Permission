<?php $__env->startSection('content'); ?>
    <h1>Quản lý người dùng</h1>
    <a href="<?php echo e(url('users.add')); ?>" class="my-2 btn btn-success">Thêm người dùng</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th width="5%">STT</th>
                <th>Tên</th>
                <th>Email</th>
                <th width="12%">Trạng thái</th>
                <th width="5%">Sửa</th>
                <th width="5%">Xóa</th>
            </tr>
        </thead>

        <tbody>
            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($key + 1); ?></td>
                    <td><?php echo e($user->name); ?></td>
                    <td><?php echo e($user->email); ?></td>
                    <td><?php echo $user->status == 1 ? '<span class="badge bg-success">Đã kích hoạt</span>' : '<span class="badge bg-danger">Chưa kích hoạt</span>'; ?></td>
                    <td><a href="<?php echo e(url('users.edit', ['id' => $user->id])); ?>" class="btn btn-warning btn-sm">Sửa</a></td>
                    <td>
                        <form onsubmit="return confirm('Bạn có chắc chắn?')" action="<?php echo e(url('users.delete', ['id' => $user->id])); ?>" method="POST">
                            <button class="btn btn-danger btn-sm">Xóa</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>