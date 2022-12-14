<?php $__env->startSection('title', 'Log in'); ?>

<?php $__env->startSection('content'); ?>
    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        <?php if(Route::has('login')): ?>
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                <?php if(auth()->guard()->check()): ?>
                    <a href="<?php echo e(url('/home')); ?>" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                <?php else: ?>
                    <a href="<?php echo e(route('login')); ?>" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                    <?php if(Route::has('register')): ?>
                        <a href="<?php echo e(route('register')); ?>" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                    <?php endif; ?>
                <?php endif; ?>
            </div>
        <?php endif; ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Edgar\Desktop\api-with-react-and-laravel\my-api\resources\views/welcome.blade.php ENDPATH**/ ?>