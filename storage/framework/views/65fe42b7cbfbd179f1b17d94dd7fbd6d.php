<?php $__env->startSection('content'); ?>
    <section class="page-content start">
        <div class="info center">
            <!-- user img & name -->
            <div class="user center">
                <div class="img">
                    <img src="<?php echo e(Storage::url($user->photo)); ?>" alt="">
                    <button><i class="fa-solid fa-eye"></i> </button>
                </div>
                <h1><?php echo e($user->name); ?></h1>
            </div>
            <!-- user details -->
            <div class="details start  ">
                <div class="detail center">
                    <h1>country : </h1>
                    <h3><?php echo e($user->country); ?></h3>
                </div>
                <div class="detail center">
                    <h1>city : </h1>
                    <h3><?php echo e($user->city); ?></h3>
                </div>
                <div class="detail center">
                    <h1>date of birth : </h1>
                    <h3><?php echo e($user->date_of_birth); ?></h3>
                </div>
                <div class="detail center">
                    <h1>marital status : </h1>
                    <h3><?php echo e($user->status); ?></h3>
                </div>
                <div class="detail center">
                    <h1>educational level : </h1>
                    <h3><?php echo e($user->education); ?></h3>
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
                        <img src="<?php echo e(Storage::url($user->photo)); ?>" alt="">
                        <h1><?php echo e($user->name); ?></h1>
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
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <!-- show photo -->
        <div class="hidden-img center">
            <img src="<?php echo e(Storage::url($user->photo)); ?>" alt="">
            <button><i class="fa-solid fa-circle-xmark"></i></button>
        </div>
    </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xamp\htdocs\FaceLook\resources\views/user-profile.blade.php ENDPATH**/ ?>