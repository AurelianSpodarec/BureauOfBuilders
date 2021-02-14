<footer class="border-t-2 border-fuchsia-600">
    <div class="container">

        <?php if(has_nav_menu('footer_navigation')): ?>
        <?php echo wp_nav_menu([
            'theme_location' => 'footer_navigation',
            'menu_class' => 'flex',
            'walker' => new \App\FooterWalker()
        ]); ?>

        <?php endif; ?>

    </div>
</footer>
