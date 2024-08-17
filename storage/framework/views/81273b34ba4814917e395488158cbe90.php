<?php $__env->startSection('content'); ?>
        <!-- my daetails and posts -->
        <section class="page-content start">
            <div class="info center">
                <!-- user img & name -->
                <div class="user center">
                    <div class="img">
                        <img src="<?php echo e(Storage::url(Auth::user()->photo)); ?>" alt="">
                        <button><i class="fa-solid fa-eye"></i> </button>
                    </div>
                    <h1><?php echo e(Auth::user()->name); ?></h1>
                </div>
                <!-- user details -->
                <div class="details start  ">
                    <div class="detail center">
                        <h1>country : </h1>
                        <h3><?php echo e(Auth::user()->country); ?></h3>
                    </div>
                    <div class="detail center">
                        <h1>city : </h1>
                        <h3><?php echo e(Auth::user()->city); ?></h3>
                    </div>
                    <div class="detail center">
                        <h1>date of birth : </h1>
                        <h3><?php echo e(Auth::user()->date_of_birth); ?></h3>
                    </div>
                    <div class="detail center">
                        <h1>marital status : </h1>
                        <h3><?php echo e(Auth::user()->status); ?></h3>
                    </div>
                    <div class="detail center">
                        <h1>educational level : </h1>
                        <h3><?php echo e(Auth::user()->education); ?></h3>
                    </div>
                </div>
            </div>
            <!-- user posts -->
            <div class="my-posts center">
                <!-- post div -->
                <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="post center">
                        <div class="head center">
                            <div class="user start">
                                <img src="<?php echo e(Storage::url($post->user_photo)); ?>" alt="">
                                <h1><?php echo e($post->user_name); ?></h1>
                            </div>
                            <div class="date"><p><?php echo e($post->created_at); ?></p></div>
                        </div>
                        <div class="content center">
                            <!-- photo or text -->
                            <p>
                                <?php echo e($post->title); ?>

                            </p>
                            <?php if($post->photo == ''): ?>
                                <img src="" alt="">
                            <?php else: ?>
                                <img src="<?php echo e(Storage::url($post->photo)); ?>" alt="">
                            <?php endif; ?>
                        </div>
                        <form method="post" action="<?php echo e(route('addPost.delete',['id'=>$post->id])); ?>">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('delete'); ?>
                            <button type="submit" name="delete">Delete</button>
                        </form>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <!-- show photo -->
            <div class="hidden-img center">
                <img src="<?php echo e(Storage::url(Auth::user()->photo)); ?>" alt="">
                <button><i class="fa-solid fa-circle-xmark"></i></button>
            </div>
        </section>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xamp\htdocs\FaceLook\resources\views/my-profile.blade.php ENDPATH**/ ?>