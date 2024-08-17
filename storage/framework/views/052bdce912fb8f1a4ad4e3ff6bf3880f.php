











































































    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo e(asset('css/sign-up.css')); ?>">
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
        <form method="post" class="center" action="<?php echo e(route('register')); ?>">
            <?php echo csrf_field(); ?>
            <div class="input center">
                <h1>name</h1>
                <input type="text" value="<?php echo e(old('name')); ?>" name="name" placeholder="username">
            </div>
            <div class="input center">
                <h1>email</h1>
                <input type="text" value="<?php echo e(old('email')); ?>" name="email" placeholder="user@example.com">
            </div>
            <div class="input center">
                <h1>country</h1>
                <input type="text" value="<?php echo e(old('country')); ?>" name="country" placeholder="(egypt,saudi arabia......)">
            </div>
            <div class="input center">
                <h1>City</h1>
                <input type="text" value="<?php echo e(old('city')); ?>" name="city" placeholder="(cairo,riyadh......)">
            </div>
            <div class="input center">
                <h1>educational level</h1>
                <select name="education">
                    <option value="student">student</option>
                    <option value="graduated">graduated</option>
                </select>
            </div>
            <div class="input center">
                <h1>Gender</h1>
                <select name="gender">
                    <option value="male">male</option>
                    <option value="female">female</option>
                </select>
            </div>
            <div class="input center">
                <h1>marital status</h1>
                <select name="status">
                    <option value="single">single</option>
                    <option value="married">married</option>
                </select>
            </div>
            <div class="input center">
                <h1>date of birth</h1>
                <input type="date" name="date_of_birth">
            </div>

            <div class="input center">
                <h1>password</h1>
                <input type="password" name="password" placeholder="password">
                <i class="fa-solid fa-eye"></i>
            </div>
            <div class="input center">
                <h1>confirm password</h1>
                <input type="password" name="password_confirmation" placeholder="confirm password">
                <i class="fa-solid fa-eye"></i>
            </div>

            <button type="submit">Create</button>
        </form>
        <a href="<?php echo e(route('login')); ?>">Log In</a>
    </div>
</div>
<script src="<?php echo e(asset('js/show.js')); ?>"></script>
</body>
</html>
<?php /**PATH E:\xamp\htdocs\FaceLook\resources\views/auth/register.blade.php ENDPATH**/ ?>