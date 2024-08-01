<?php

namespace Components;

class Footer
{
    public static function render($props = [])
    {
        $year = isset($props['year']) ? $props['year'] : date('Y');
?>
        <footer class="bg-gray-800 text-white p-4">
            <p>&copy; <?php echo esc_html($year); ?> Meu Tema. Todos os direitos reservados.</p>
        </footer>
<?php
    }
}
