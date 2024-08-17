<?php $__env->startSection('content'); ?>
    <!-- posts -->
    <section class="page-content start">
        <a href="<?php echo e(route('addPost.create')); ?>" class="center">
            add post
        </a>
        <div class="posts start">
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
                    <div class="content" style="display: flex;flex-direction: column;gap: 20px">
                        <!-- photo or text -->
                        <p class="center">
                            <?php echo e($post->title); ?>

                        </p>
                        <?php if($post->photo == ''): ?>
                            <img src="" alt="">
                        <?php else: ?>
                            <img src="<?php echo e(Storage::url($post->photo)); ?>" alt="post">
                        <?php endif; ?>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xamp\htdocs\FaceLook\resources\views/index.blade.php ENDPATH**/ ?>