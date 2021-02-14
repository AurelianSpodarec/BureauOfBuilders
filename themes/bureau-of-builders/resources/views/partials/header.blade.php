<header class="border-b-2 border-fuchsia-600">
    <div class="container">
    <div class="flex">

        <a class="brand" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}</a>

        <nav class="hidden lg:block">
            @if (has_nav_menu('primary_navigation'))
                {!! wp_nav_menu([
                    'theme_location' => 'primary_navigation',
                    'menu_class' => 'flex',
                    'walker' => new \App\NavWalker()
                ]) !!}
            @endif
        </nav>

    </div>
    </div>
</header>
