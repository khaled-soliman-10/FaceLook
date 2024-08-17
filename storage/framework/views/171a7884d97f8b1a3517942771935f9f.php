<?php $__env->startSection('content'); ?>
    <section class="page-content start">
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
                    <div class="forms center">
                        <form method="post" action="<?php echo e(route('addPost.forceDelete',['id'=>$post->id])); ?>">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('delete'); ?>
                            <button type="submit" name="delete">Delete</button>
                        </form>
                        <form method="post" action="<?php echo e(route('addPost.restore',['id'=>$post->id])); ?>">
                            <?php echo csrf_field(); ?>
                            <button type="submit" name="delete">Restore</button>
                        </form>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('styles'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('css/trash.css')); ?>">
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xamp\htdocs\FaceLook\resources\views/trashed.blade.php ENDPATH**/ ?>