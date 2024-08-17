<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FaceLook</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
    <?php echo $__env->yieldPushContent('styles'); ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
</head>
<body>

<!-- header start -->
<header>
    <div class="h-content start">
        <div class="title center">
            <a href="<?php echo e(route('main.index')); ?>" class="center">
                <i class="fa-solid fa-l center"></i>
                <h1>FaceLook</h1>
                <!-- FaceLook -->
            </a>
        </div>
        <div class="search center">
            <form action="<?php echo e(route('search.index')); ?>" method="get" class="center">
                <?php echo csrf_field(); ?>
                <input type="text" name="name" placeholder="Search for users">
                <button type="submit" name="search"><i class="fa-solid fa-magnifying-glass"></i></button>
            </form>
        </div>
        <h1><?php echo e(Auth::user()->name); ?></h1>
    </div>
</header>

<!-- page start -->
<section class="main-page start">
    <!-- aside -->
    <aside class="center">
        <div class="links start">
            <ul class="start">
                <li><a href="<?php echo e(route('MyProfile.index')); ?>"><i class="fa-solid fa-user"></i> My Profile</a></li>
                <li>
                    <div class="settings start">
                        <h1 class="start"><i class="fa-solid fa-gears"></i> settings</h1>
                        <ul class="start">
                            <li><a href="<?php echo e(route('Info.index',['id'=>auth()->id()])); ?>"><i class="fa-regular fa-address-card"></i> personal details</a></li>
                            <li><a href="<?php echo e(route('Img.index',['id'=>auth()->id()])); ?>"><i class="fa-solid fa-camera-retro"></i> profile picture</a></li>
                            <li><a href="<?php echo e(route('addPost.index')); ?>"><i class="fa-solid fa-trash"></i> trashed posts</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
            <div class="mode start">
                <button class="start">Mode <i class="fa-solid fa-angle-right"></i></button>
                <ul class="start">
                    <li><button class="dark start"><i class="fa-solid fa-moon"></i> Dark</button></li>
                    <li><button class="light start"><i class="fa-solid fa-sun"></i> Light</button></li>
                </ul>
            </div>
        </div>
        <div class="out start">
            <form method="post" action="<?php echo e(route('logout')); ?>">
                <?php echo csrf_field(); ?>
                <button type="submit" name="out">Log out</button>
            </form>
        </div>
    </aside>

<?php echo $__env->yieldContent('content'); ?>

</section>
<script src="<?php echo e(asset('js/main.js')); ?>"></script>
<?php echo $__env->yieldPushContent('scripts'); ?>
</body>
</html>
<?php /**PATH E:\xamp\htdocs\FaceLook\resources\views/layouts/base.blade.php ENDPATH**/ ?>