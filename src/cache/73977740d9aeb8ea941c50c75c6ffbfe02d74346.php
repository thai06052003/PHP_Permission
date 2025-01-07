<?php $__env->startSection('content'); ?>
    <h1>Quản lý bài viết</h1>
    <a href="<?php echo e(url('posts.add')); ?>" class="my-2 btn btn-success">Thêm bài viết</a>
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
            <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($key + 1); ?></td>
                    <td><?php echo e($post->title); ?></td>
                    <td><?php echo e($post->content); ?></td>
                    <td><a href="<?php echo e(url('posts.edit', ['id' => $post->id])); ?>" class="btn btn-warning btn-sm">Sửa</a></td>
                    <td>
                        <form onsubmit="return confirm('Bạn có chắc chắn?')" action="<?php echo e(url('posts.delete', ['id' => $post->id])); ?>" method="POST">
                            <button class="btn btn-danger btn-sm">Xóa</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>