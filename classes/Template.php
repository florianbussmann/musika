<?php

class Template {
    public static function render($template, $data)
    {
        // registered passed variables as local variables
        extract($data);

        // load passed template and store contents for usage in layout
        ob_start();
        include(BASEDIR . '/templates/' . $template .'.php');
        $content_for_layout = ob_get_clean();

        // load and show layout
        include(BASEDIR . '/templates/layout.php');
    }
}
