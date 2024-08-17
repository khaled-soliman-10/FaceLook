







































































<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo e(asset('css/login.css')); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <title>FaceLook</title>
</head>
<body>
<div class="main center">
    <div class="box center">
        <div class="title center">
            <i class="fa-solid fa-l center"></i>
            <h1>FaceLook</h1>
        </div>
        <?php if($errors->any()): ?>
            <div class="alert alert-danger">
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <?php endif; ?>
        <form method="post" class="center" action="<?php echo e(route('login')); ?>">
            <?php echo csrf_field(); ?>
            <div class="input center">
                <h1>Email</h1>
                <input type="text" value="<?php echo e(old('email')); ?>" name="email" placeholder="user@example.com">
            </div>
            <div class="input center">
                <h1>Password</h1>
                <input type="password" name="password" placeholder="password">
                <i class="fa-solid fa-eye"></i>
            </div>
            <div class="input center">
                <label for="check">Remember me</label>
                    <input type="checkbox" name="remember" id="check">
            </div>
            <button type="submit">Sign In</button>
            <?php if(Route::has('password.request')): ?>
                <a class="btn btn-link" href="<?php echo e(route('password.request')); ?>">
                    <?php echo e(__('Forgot Your Password?')); ?>

                </a>
            <?php endif; ?>

        </form>
        <a href="<?php echo e(route('register')); ?>">Create Account</a>
    </div>
</div>
<script src="<?php echo e(asset('js/show.js')); ?>"></script>
</body>
</html>
<?php /**PATH E:\xamp\htdocs\FaceLook\resources\views/auth/login.blade.php ENDPATH**/ ?>