<?php
\chdir(\dirname(__DIR__));

(function () {
    require_once 'vendor/autoload.php';
    $httpApplication = new \Ixocreate\ApplicationHttp\HttpApplication("bootstrap");
    $httpApplication->run();
})();
