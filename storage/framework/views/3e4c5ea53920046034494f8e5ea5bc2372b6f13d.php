
<?php $__env->startSection('content'); ?>
<div class="card">
<div class="card-body">
    <form  action="<?php echo e(url('add_product')); ?>" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <div class="col-md-3 mb-s">
            <label for="">Name</label>
            <input type="text" class="form-control" name="name"> 
        </div>
        <div class="col-md-3 mb-s">
            <label for="">Description</label>
            <input type="text" class="form-control" name="description"> 
        </div>
        <div class="col-md-3 mb-s">
            <label for="">Price</label>
            <input type="text" class="form-control" name="price"> 
        </div>
        <div class="col-md-3 mb-s">
            <label for="">Image</label>
            <input type="file" class="form-control" name="image"> 
        </div>
        <br>
        <br>

        <div class="col-md-6 mb-s text-center">
            <button type="submit" class="btn btn-primary"> Submit</button>
        </div>
    </form> 
</div>
</div>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\product_demo\product_demo\resources\views/product.blade.php ENDPATH**/ ?>