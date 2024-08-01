<?php

namespace Helpers;

class Template
{
    public static function renderComponent($component, $props = [])
    {
        if (class_exists($component)) {
            call_user_func([$component, 'render'], $props);
        } else {
            echo "<p>Component $component not found.</p>";
        }
    }
}
