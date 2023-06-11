<?php if (isset($component)) { $__componentOriginalfd747279b1684fb97e0f389c7bfc1c6bab0902e3 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\FrontGuestLayout::class, []); ?>
<?php $component->withName('front-guest-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700,900&display=swap" rel="stylesheet">

    <main class="bg-white font-montserrat">
        <header class="h-24 sm:h-32 flex items-center">
            <div class="container mx-auto px-6 sm:px-12 flex items-center justify-between">
                <div class="text-black font-black text-2xl flex items-center">
                    <span class="w-6 h-6 rounded-full bg-blue-500 mr-4"></span> dashboard for interview
                </div>
                <div class="flex items-center">
                    <nav class="text-black text-lg hidden lg:flex items-center">

                        <?php if(Route::has('admin.login')): ?>
                                <a href="<?php echo e(route('admin.login')); ?>" class="py-2 px-6 flex hover:text-blue-500">Admin</a>

                        <?php endif; ?>

                        <?php if(Route::has('login')): ?>
                            <?php if(auth()->guard('front')->check()): ?>
                                <a href="<?php echo e(url('/dashboard')); ?>" class="py-2 px-6 flex hover:text-blue-500">Dashboard</a>
                            <?php else: ?>
                                <a href="<?php echo e(route('login')); ?>" class="py-2 px-6 flex hover:text-blue-500">Log in</a>
                                <?php if(Route::has('register')): ?>
                                    <a href="<?php echo e(route('register')); ?>" class="ml-4 py-2 px-6 flex hover:text-blue-500">Register</a>
                                <?php endif; ?>
                            <?php endif; ?>
                        <?php endif; ?>
                    </nav>
                    <button class="lg:hidden flex flex-col">
                        <span class="w-6 h-px bg-gray-900 mb-1"></span>
                        <span class="w-6 h-px bg-gray-900 mb-1"></span>
                        <span class="w-6 h-px bg-gray-900 mb-1"></span>
                    </button>
                </div>
            </div>
        </header>
        <div class="container mx-auto px-6 sm:px-12 flex flex-col-reverse sm:flex-row items-center">
            <div class="sm:w-2/5 flex flex-col items-start mt-8 sm:mt-0">
                <h1 class="text-4xl lg:text-6xl leading-none mb-4"><strong class="font-black">HS DASH</strong> cat</h1>
                <img src="images/cat.jpg" alt="">               
            </div>
            
            </div>
        </div>
    </main>







 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalfd747279b1684fb97e0f389c7bfc1c6bab0902e3)): ?>
<?php $component = $__componentOriginalfd747279b1684fb97e0f389c7bfc1c6bab0902e3; ?>
<?php unset($__componentOriginalfd747279b1684fb97e0f389c7bfc1c6bab0902e3); ?>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\interview\laravel-starter\resources\views/welcome.blade.php ENDPATH**/ ?>