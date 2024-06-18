

<?php $__env->startSection('content'); ?>
    <h1><?php echo e($college->collfullname); ?></h1>
    <h2>Departments</h2>
    <ul>
        <?php $__currentLoopData = $college->departments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $department): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($department->deptfullname); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
    <h2>Programs</h2>
    <ul>
        <?php $__currentLoopData = $college->programs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $program): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($program->progfullname); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
    <a href="<?php echo e(url('/show/colleges')); ?>">Back to list</a>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Programming\WebSummer\USJRAct\resources\views/colleges/show.blade.php ENDPATH**/ ?>