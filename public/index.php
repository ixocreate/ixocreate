<?php
\chdir(\dirname(__DIR__));

(function() {
    require_once 'vendor/autoload.php';
    $httpApplication = new \KiwiSuite\ApplicationHttp\HttpApplication("bootstrap");
    $httpApplication->run();
})();
