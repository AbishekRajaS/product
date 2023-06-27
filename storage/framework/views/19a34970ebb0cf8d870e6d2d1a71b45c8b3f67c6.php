


<?php $__env->startSection('content'); ?>

<div class="py-5">
<div class="container">
<div class="row">
    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="col-md-3">
        <div class="card">
            <img src="<?php echo e(asset('assets/uploads/products/'.$product->image)); ?>" alt="image"/>
            <div class="card-body">
                <h5><?php echo e($product->name); ?></h5>
                <small><?php echo e($product->price); ?></small><br>
                <a href="<?php echo e(url('product_view/'.$product->id)); ?>">View</a>
            </div>
    </div>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


</div>
</div>



</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\product_demo\resources\views/index.blade.php ENDPATH**/ ?>