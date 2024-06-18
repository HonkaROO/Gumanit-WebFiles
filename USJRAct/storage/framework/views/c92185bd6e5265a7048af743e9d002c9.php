<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Application</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
</head>
<body>
    <nav>
        <!-- Add your navigation bar here -->
    </nav>
    <div class="container">
        <?php echo $__env->yieldContent('content'); ?>
    </div>
    <script src="<?php echo e(asset('js/app.js')); ?>"></script>
</body>
</html>
<?php /**PATH D:\Programming\WebSummer\USJRAct\resources\views/layouts/app.blade.php ENDPATH**/ ?>