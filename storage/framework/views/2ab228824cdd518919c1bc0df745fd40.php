<?php $__env->startSection('content'); ?>
    <h1>Manajemen User</h1>
    <!-- Add 'Add User' button -->
    <a href="<?php echo e(route('user-management.create')); ?>">Tambah User</a>

    <!-- User Table -->
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Username</th>
                <th>Nama</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($loop->iteration); ?></td>
                    <td><?php echo e($user->username); ?></td>
                    <td><?php echo e($user->name); ?></td>
                    <td>
                        <a href="<?php echo e(route('user-management.edit', $user)); ?>">Edit</a>
                        <form action="<?php echo e(route('user-management.destroy', $user->id)); ?>" method="POST" style="display: inline;">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/adamhaykalfirdaus/APPS/resources/views/user_management/index.blade.php ENDPATH**/ ?>