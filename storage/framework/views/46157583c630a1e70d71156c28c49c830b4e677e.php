
<?php $__env->startSection('content'); ?>
<div class="card">
    <div class="card-body">
        <table class="table table-bordered table-striped">
        <button type="button"  class="btn btn-primary" style="float:right"><a href="<?php echo e(url('add')); ?>" class="text-light text-decoration-none">Add Product</a></button>
      
            <thead>
                <tr>
                    <td>Id</td>
                    <td>Name</td>
                    <td>Description</td>
                    <td>Price</td>
                    <td>Image</td>
                    <td>Action</td>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                     <td><?php echo e($item->id); ?></td>
                    <td><?php echo e($item->name); ?></td>
                    <td><?php echo e($item->description); ?></td>
                    <td><?php echo e($item->price); ?></td>
                    <td>
                        <img src="<?php echo e(asset('assets/uploads/products/'.$item->image)); ?>" width="40px" height="40px" alt="image"/>
                    </td>
                    <td>
                    <button type="button"  class="btn btn-primary"><a href="<?php echo e(url('edit_product/'.$item->id)); ?>" class="text-light text-decoration-none">Edit</a></button>
                    <button type="button"  class="btn btn-danger"><a href="<?php echo e(url('delete_product/'.$item->id)); ?>" class="text-light text-decoration-none">Delete</a></button>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
        <div class="col text-center">
        <button type="button"  class="btn btn-primary"><a href="<?php echo e(url('/')); ?>" class="text-light text-decoration-none">Home</a></button>
    </div>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\product_demo\resources\views/productlist.blade.php ENDPATH**/ ?>