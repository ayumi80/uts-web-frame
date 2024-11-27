

<?php $__env->startSection('content'); ?>
<h1>Users</h1>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>Username</th>
            <th>Name</th>
            <th>Email</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($user['username']); ?></td>
            <td><?php echo e($user['name']); ?></td>
            <td><?php echo e($user['email']); ?></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\inventori\resources\views/user/user.blade.php ENDPATH**/ ?>