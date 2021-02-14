<header class="border-b-2 border-fuchsia-600">
    <div class="container">
    <div class="flex">

        <a class="brand" href="<?php echo e(home_url('/')); ?>"><?php echo e(get_bloginfo('name', 'display')); ?></a>

        <nav class="hidden lg:block">
            <?php if(has_nav_menu('primary_navigation')): ?>
                <?php echo wp_nav_menu([
                    'theme_location' => 'primary_navigation',
                    'menu_class' => 'flex',
                    'walker' => new \App\NavWalker()
                ]); ?>

            <?php endif; ?>
        </nav>

    </div>
    </div>
</header>
