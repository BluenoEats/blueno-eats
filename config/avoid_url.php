<?php
function avoid_url($url, $prev)
{
    if (!isset($prev)) {
        $prev = "/websites/bluenoeats.github.io/index.php";
    }
    $avoid_list = [
        'functions' . DIRECTORY_SEPARATOR,
        'login.php',
        'signup.php',
        'submit_review.php'
    ];
    foreach ($avoid_list as $avoid_url) {
        if (str_contains($url, $avoid_url)) {
            return $prev;
        }
    }
    return $url;
}
