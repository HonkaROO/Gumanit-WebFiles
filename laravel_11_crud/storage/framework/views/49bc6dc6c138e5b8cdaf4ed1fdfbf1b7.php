
<?php $__env->startSection('content'); ?>
<div class="row justify-content-center mt-3">
 <div class="col-md-8">
 <div class="card">
 <div class="card-header">
 <div class="float-start">
 Product Information
 </div>
 <div class="float-end">
 <a href="<?php echo e(route('products.index')); ?>" class="btn
btn-primary btn-sm">&larr; Back</a>
 </div>
 </div>
 <div class="card-body">
 <div class="row">
 <label for="code" class="col-md-4 col-formlabel text-md-end text-start"><strong>Code:</strong></label>
 <div class="col-md-6" style="line-height:
35px;">
 <?php echo e($product->code); ?>

 </div>
 </div>
 <div class="row">
 <label for="name" class="col-md-4 col-formlabel text-md-end text-start"><strong>Name:</strong></label>
 <div class="col-md-6" style="line-height:
35px;">
 <?php echo e($product->name); ?>

 </div>
 </div>
 <div class="row">
 <label for="quantity" class="col-md-4 colform-label text-md-end text-start"><strong>Quantity:</strong></label>
 <div class="col-md-6" style="line-height:
35px;">
 <?php echo e($product->quantity); ?>

 </div>
 </div>
 <div class="row">
 <label for="price" class="col-md-4 col-formlabel text-md-end text-start"><strong>Price:</strong></label>
 <div class="col-md-6" style="line-height:
35px;">
 <?php echo e($product->price); ?>

 </div>
 </div>
 <div class="row">
 <label for="description" class="col-md-4 colform-label text-md-end textstart"><strong>Description:</strong></label>
 <div class="col-md-6" style="line-height:
35px;">
 <?php echo e($product->description); ?>

 </div>
 </div>

 </div>
 </div>
 </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Programming\WebSummer\laravel_11_crud\resources\views/products/show.blade.php ENDPATH**/ ?>