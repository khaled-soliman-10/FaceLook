<?php $__env->startSection('content'); ?>
    <!-- img -->
    <section class="page-content start">
        <h1>select new profile picture</h1>
        <div class="img center">
            <img src="<?php echo e(Storage::url($img->photo)); ?>" alt="">
            <?php if($errors->any()): ?>
                <div class="alert alert-danger">
                    <ul>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            <?php endif; ?>
            <form method="post" action="<?php echo e(route('Img.update',['id'=>$img->id])); ?>" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <?php echo method_field('Put'); ?>
                <div>
                    <input type="file" name="photo" id="img">
                    <label class="center" for="img"><i class="fa-solid fa-upload"></i>select img</label>
                </div>

                <button type="submit" name="update-img">update</button>

            </form>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('styles'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('css/img.css')); ?>">
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xamp\htdocs\FaceLook\resources\views/img.blade.php ENDPATH**/ ?>