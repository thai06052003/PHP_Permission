<?php $__env->startSection('content'); ?>
    <h1>Cập nhật người dùng</h1>
    <form action="" method="POST">
        <div class="mb-3">
            <label for="">Tên</label>
            <input type="text" name="name" class="form-control" placeholder="Tên..." value="<?php echo e($user->name); ?>" required>
        </div>
        <div class="mb-3">
            <label for="">Email</label>
            <input type="email" name="email" class="form-control" placeholder="Email..." value="<?php echo e($user->email); ?>" required>
        </div>
        <div class="mb-3">
            <label for="">Mật khẩu</label>
            <input type="password" name="password" class="form-control" placeholder="Mật khẩu...">
        </div>
        <div class="mb-3">
            <label for="">Trạng thái</label>
            <select name="status" class="form-select">
                <option value="0" <?php echo e($user->status == 0 ? 'selected' : ''); ?>>Chưa kích hoạt</option>
                <option value="1" <?php echo e($user->status == 1 ? 'selected' : ''); ?>>Kích hoạt</option>
            </select>
        </div>
        <button class="btn btn-primary">Cập nhật</button>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>