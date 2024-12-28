<?php $__env->startSection('content'); ?>
    <h1>Cập nhật sản phẩm</h1>
    <form action="" method="POST">
        <div class="mb-3">
            <label for="">Tên</label>
            <input type="text" name="name" class="form-control" placeholder="Tên..." value="<?php echo e($product->name); ?>" required>
        </div>
        <div class="mb-3">
            <label for="">Giá</label>
            <input type="text" name="price" class="form-control" placeholder="Giá..." value="<?php echo e($product->price ? number_format($product->price) : 0); ?>" required>
        </div>
        <button class="btn btn-primary">Cạp nhật</button>
    </form>
<?php $__env->stopSection(); ?>
.
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>