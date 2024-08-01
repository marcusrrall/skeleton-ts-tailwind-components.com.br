<?php

namespace Components;

class Header
{
    public static function render($props = [])
    {
        $title = isset($props['title']) ? $props['title'] : 'Meu Tema';
?>
        <header class="bg-blue-500 p-4">
            <div class="container mx-auto">
                <h1><?php echo esc_html($title); ?></h1>
                <nav>
                    <?php wp_nav_menu(array('theme_location' => 'primary', 'menu_class' => 'flex space-x-4')); ?>
                </nav>
            </div>
        </header>
<?php
    }
}
