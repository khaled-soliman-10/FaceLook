<?php $__env->startSection('content'); ?>

    <section class="page-content start">
        <form action="<?php echo e(route('addPost.store')); ?>" class="add-post center" method="post" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <textarea class="start" name="title" placeholder="Write here...."></textarea>
            <div class="center">
                <input type="file" name="photo" id="photo">
                <label class="center" for="photo"><i class="fa-solid fa-image"></i>upload image</label>
            </div>
            <button type="submit">Add Post</button>
        </form>
    </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xamp\htdocs\FaceLook\resources\views/add-post.blade.php ENDPATH**/ ?>