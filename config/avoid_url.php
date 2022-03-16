<?php
function avoid_url($url)
{
    $avoid_list = [
        'functions' . DIRECTORY_SEPARATOR,
        'login.php',
        'signup.php',
        'submit_review.php'
    ];
    foreach ($avoid_list as $avoid_url) {
        if (str_contains($url, $avoid_url))
            return "/websites/bluenoeats.github.io/index.php";
    }
    return $url;
}
