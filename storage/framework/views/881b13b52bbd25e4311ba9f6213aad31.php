<?php $__env->startSection('content'); ?>
    <!-- page start -->
    <section class="page-content start">
        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="result start">
                <?php if($user->id == auth()->id()): ?>
                    <a href="<?php echo e(route('MyProfile.index')); ?>" class="user start">
                        <img src="<?php echo e(Storage::url($user->photo)); ?>" alt="">
                        <h1><?php echo e($user->name); ?></h1>
                    </a>
                <?php else: ?>
                    <a href="<?php echo e(route('userProfile',['id'=>$user->id])); ?>" class="user start">
                        <img src="<?php echo e(Storage::url($user->photo)); ?>" alt="">
                        <h1><?php echo e($user->name); ?></h1>
                    </a>
                <?php endif; ?>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xamp\htdocs\FaceLook\resources\views/search.blade.php ENDPATH**/ ?>