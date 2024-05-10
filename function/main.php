<?php
function urlpath($path) {
    require_once 'env.php';
    return $_ENV['BASEURL'] . $path;
}