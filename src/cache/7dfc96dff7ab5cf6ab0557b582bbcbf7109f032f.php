<?php $__env->startSection('content'); ?>
    <h1>Thêm sản phẩm</h1>
    <form action="" method="POST">
        <div class="mb-3">
            <label for="">Tên</label>
            <input type="text" name="name" class="form-control" placeholder="Tên..." required>
        </div>
        <button class="btn btn-primary">Thêm mới</button>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>