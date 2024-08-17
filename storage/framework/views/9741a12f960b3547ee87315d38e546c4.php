<?php $__env->startSection('content'); ?>
    <section class="page-content start">
        <?php if($errors->any()): ?>
            <div class="alert alert-danger">
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <?php endif; ?>
        <form method="post" action="<?php echo e(route('Info.update',['id'=>$myData->id])); ?>" class="update center">
            <?php echo csrf_field(); ?>
            <?php echo method_field('Put'); ?>
            <div class="input center">
                <h1>name</h1>
                <input value="<?php echo e($myData->name); ?>" type="text" name="name" placeholder="username">
            </div>
            <div class="input center">
                <h1>email</h1>
                <input value="<?php echo e($myData->email); ?>" type="text" name="email" placeholder="user@example.com">
            </div>
            <div class="input center">
                <h1>country</h1>
                <input value="<?php echo e($myData->country); ?>" type="text" name="country" placeholder="(egypt,saudi arabia......)">
            </div>
            <div class="input center">
                <h1>city</h1>
                <input value="<?php echo e($myData->city); ?>" type="text" name="city" placeholder="(cairo,riyadh......)">
            </div>
            <div class="input center">
                <h1>educational level</h1>
                <select name="education">
                    <option value="student" <?php if($myData->education == 'student'): echo 'selected'; endif; ?>>student</option>
                    <option value="graduated" <?php if($myData->education == 'graduated'): echo 'selected'; endif; ?>>graduated</option>
                </select>
            </div>
            <div class="input center">
                <h1>marital status</h1>
                <select name="status">
                    <option value="single" <?php if($myData->status == 'single'): echo 'selected'; endif; ?>>single</option>
                    <option value="married" <?php if($myData->status == 'married'): echo 'selected'; endif; ?>>married</option>
                </select>
            </div>
            <!-- <div class="input center">
                <h1>date of birth</h1>
                <input type="date" name="date-birth">
            </div> -->

            <div class="input center">
                <h1>New password</h1>
                <input type="password" name="password" placeholder="password">
                <i class="fa-solid fa-eye" style="color: var(--black-color)"></i>
            </div>
            <div class="input center">
                <h1>confirm new password</h1>
                <input type="password" name="password_confirmation" placeholder="confirm password">
                <i class="fa-solid fa-eye" style="color: var(--black-color)"></i>
            </div>
            <div class="input">
                <button type="submit">Update</button>
            </div>
        </form>
    </section>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
    <script src="<?php echo e(asset('js/show.js')); ?>"></script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xamp\htdocs\FaceLook\resources\views/info.blade.php ENDPATH**/ ?>