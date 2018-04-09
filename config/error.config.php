<?php

return [
    // Correlates to the ErrorHandler in Production-Mode
    'template_404'   => 'error::404',
    'template_error' => 'error::error',
    // Correlates to the WhoopsErrorHandler, only in Develop-Mode
    'json_exceptions' => [
        'display'    => true,
        'show_trace' => true,
        'ajax_only'  => true,
    ],
    'editor' => 'phpstorm',
];