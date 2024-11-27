

<?php $__env->startSection('content'); ?>
<h1>Reports</h1>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>Code</th>
            <th>Name</th>
            <th>Category</th>
            <th>Date</th>
            <th>Quantity</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $reports; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $report): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($report['code']); ?></td>
            <td><?php echo e($report['name']); ?></td>
            <td><?php echo e($report['category']); ?></td>
            <td><?php echo e($report['date']); ?></td>
            <td><?php echo e($report['quantity']); ?></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\inventori\resources\views/reports/reports.blade.php ENDPATH**/ ?>