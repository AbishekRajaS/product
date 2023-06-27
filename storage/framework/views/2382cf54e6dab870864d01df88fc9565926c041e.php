

<?php $__env->startSection('content'); ?>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="<?php echo e(url('/add_rating')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <input type="hidden" name="product_id" value="<?php echo e($products->id); ?>">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel"><?php echo e($products->name); ?></h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="rating-css">
                        <div class="star-icon">
                            <input type="radio" value="1" name="product_rating" checked id="rating1">
                            <label for="rating1" class="fa fa-star"></label>
                            <input type="radio" value="2" name="product_rating" id="rating2">
                            <label for="rating2" class="fa fa-star"></label>
                            <input type="radio" value="3" name="product_rating" id="rating3">
                            <label for="rating3" class="fa fa-star"></label>
                            <input type="radio" value="4" name="product_rating" id="rating4">
                            <label for="rating4" class="fa fa-star"></label>
                            <input type="radio" value="5" name="product_rating" id="rating5">
                            <label for="rating5" class="fa fa-star"></label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="container">
    <div class="card-shadow">
        <div class="card-body">
            <div class="row">
                <div class="col-md-4 border-right">
                    <img src="<?php echo e(asset('assets/uploads/products/'.$products->image)); ?>" width="300px" height="300px" alt="image" />
                </div>

                <div class="col-md-8">
                    <h1 class="mb-0">
                        <?php echo e($products->name); ?>

                    </h1>
                    <hr>
                    <h3> <label class="me-3">Price: <?php echo e($products->price); ?></s></label></h3>
                    <div class="rating">
                        <?php for($i=1;$i<=number_format($avg_rate);$i++): ?> <i class="fa fa-star checked"></i>
                            <?php endfor; ?>
                            <?php for($j=number_format($avg_rate)+1;$j<=5;$j++): ?> <i class="fa fa-star "></i>
                                <?php endfor; ?>

                                <br>
                                <span>
                                    <?php if($ratings->count()>0): ?>
                                    <?php echo e($ratings->count()); ?> Ratings
                                    <?php else: ?>
                                    No Rating
                                    <?php endif; ?>
                                </span>
                    </div>
                    <h4>
                        <p class="mt-3"><?php echo e($products->description); ?></p>
                    </h4>
                    <div class="row">
                        <div class="col-md-4">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Rate This Product
                            </button>
                            <a href="<?php echo e(url('add_review/'.$products->id)); ?>" class="btn btn-link">
                                Write a Review
                            </a>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-8">
                            <h1>Reviews</h1>
                            <?php $__currentLoopData = $reviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <i class="fa-solid fa-list"><?php echo e($item->review); ?></i><br>
                            
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>

</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\product_demo\product_demo\resources\views/view.blade.php ENDPATH**/ ?>