<footer class="border-t-2 border-fuchsia-600">
    <div class="container">

        @if (has_nav_menu('footer_navigation'))
        {!! wp_nav_menu([
            'theme_location' => 'footer_navigation',
            'menu_class' => 'flex',
            'walker' => new \App\FooterWalker()
        ]) !!}
        @endif

    </div>
</footer>
