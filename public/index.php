<?php

session_start();

require_once __DIR__ . "/../Config/dotenv.php";
(new DotEnv(__DIR__ . "/../.env"))->load();

require_once __DIR__ . "/../Config/database.php";

include_once __DIR__ . "/../router.php";

include_once __DIR__ . "/../Controllers/HomeController.php";

any('/404', function () {
    echo "404";
});