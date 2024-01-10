<?php $__env->startSection('content'); ?>
    <h1>Tambah User</h1>
    <form method="POST" action="<?php echo e(route('user-management.store')); ?>">
        <?php echo csrf_field(); ?>
        <div>
            <label>Nama:</label>
            <input type="text" name="name">
        </div>
        <div>
            <label>Username:</label>
            <input type="text" name="username">
        </div>
        <div>
            <label>Password:</label>
            <input type="password" name="password">
        </div>
        <div>
            <label>Ulangi Password:</label>
            <input type="password" name="password_confirmation">
        </div>
        <button type="submit">Simpan</button>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/adamhaykalfirdaus/APPS/resources/views/user_management/create.blade.php ENDPATH**/ ?>