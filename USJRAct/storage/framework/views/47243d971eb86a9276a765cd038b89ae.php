

<?php $__env->startSection('content'); ?>
    <h1><?php echo e($student->studfirstname); ?> <?php echo e($student->studlastname); ?></h1>
    <p>College: <?php echo e($student->college->collfullname); ?></p>
    <p>Program: <?php echo e($student->program->progfullname); ?></p>
    <p>Year: <?php echo e($student->studyear); ?></p>
    <a href="<?php echo e(url('/show/students/all')); ?>">Back to list</a>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Programming\WebSummer\USJRAct\resources\views/students/show.blade.php ENDPATH**/ ?>