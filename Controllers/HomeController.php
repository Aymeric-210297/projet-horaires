<?php

get('/', function () {
    echo "home";
});

get('/test1', function () {
    include_once __DIR__ . "/../Views/test1.php";
});

get('/test2', function () {
    include_once __DIR__ . "/../Views/test2.php";
});