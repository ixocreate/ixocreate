<?php
\chdir(\dirname(__DIR__));

(function () {
    require_once 'vendor/autoload.php';
    $httpApplication = new \Ixocreate\Application\Http\HttpApplication("bootstrap");
    $httpApplication->run();
})();
