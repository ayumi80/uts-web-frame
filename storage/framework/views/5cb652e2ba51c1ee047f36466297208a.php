<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory Management</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
        <div class="container">
            <a class="navbar-brand" href="<?php echo e(route('home')); ?>">Inventory</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item"><a class="nav-link" href="<?php echo e(route('users')); ?>">Users</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo e(route('categories')); ?>">Categories</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo e(route('items')); ?>">Items</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo e(route('reports')); ?>">Reports</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container mt-4 ">
        <?php echo $__env->yieldContent('content'); ?>
    </div>
    
</body>
</html>
<?php /**PATH C:\xampp\htdocs\inventori\resources\views/layouts/app.blade.php ENDPATH**/ ?>