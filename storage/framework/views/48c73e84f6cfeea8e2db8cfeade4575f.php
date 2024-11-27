

<?php $__env->startSection('content'); ?>
<h1>Items</h1>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>Code</th>
            <th>Name</th>
            <th>Category</th>
            <th>Price</th>
            <th>Stock</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($item['code']); ?></td>
            <td><?php echo e($item['name']); ?></td>
            <td><?php echo e($item['category']); ?></td>
            <td><?php echo e(number_format($item['price'], 0, ',', '.')); ?></td>
            <td><?php echo e($item['stock']); ?></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\inventori\resources\views/items/items.blade.php ENDPATH**/ ?>