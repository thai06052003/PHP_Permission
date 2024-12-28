<style>
    * {
        padding: 0px;
        margin: 0px;
    }
    .errors {
        margin-top: 24px;
        padding: 20px;
        border: 1px solid #333;
        display: flex;
        justify-content: center;
        text-align: center;
        flex-direction: column;
    }
</style>
<div class="errors">
    <h1>Đã có lỗi xảy ra</h1>
    <p>Message: <?php echo e($exception->getMessage()); ?></p>
    <p>File: <?php echo e($exception->getFile()); ?> in Line <?php echo e($exception->getLine()); ?> </p>
</div>
