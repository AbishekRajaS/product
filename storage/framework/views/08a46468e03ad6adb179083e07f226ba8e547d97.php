

<?php $__env->startSection('content'); ?>
<div class="container">
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h5><?php echo e($product->name); ?></h5>
                <form action="<?php echo e(url('add_review')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <input type="hidden" name="product_id" value="<?php echo e($product->id); ?>">
                    <textarea class="form-control" name="review" rows="5" placeholder="Write a review!!"></textarea>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
    </div>
    </div>


</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\product_demo\resources\views/review.blade.php ENDPATH**/ ?>