<?php

session_start();

include_once __DIR__ . "/../router.php";

include_once __DIR__ . "/../Controllers/HomeController.php";

any('/404', function () {
    echo "404";
});