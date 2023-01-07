<?php

function current_time()
{
    return date('Y');
}

function die_page($data)
{
    echo "<pre style='color: #9c4100; background: #fff; z-index: 999; position: relative; padding: 10px; margin: 10px; border-radius: 5px; border-left: 3px solid #c56705;'>";
    die($data);
    echo "</pre>";
}

function site_url(string $uri = '')
{
    return BASE_URL . $uri;
}

function action(string $uri = ''): string
{
    return site_url('process/' . $uri . '.php');
}

function redirect(string $url)
{
    header("Location:" . $url);
    die;
}

function page_title(): string
{
    $title = basename($_SERVER['SCRIPT_FILENAME'], '.php');
    if ($title == 'index')
        return ucwords(SITE_TITLE);
    return ucwords($title .  " " . "generator");
}

function display_error($msg)
{
    echo "<pre style='color: #9c4100; background: #fff; z-index: 999; position: relative; padding: 10px; margin: 10px; border-radius: 5px; border-left: 3px solid #c56705;'>";
    echo $msg;
    echo "</pre>";
}

function input_validation(mixed $data): string
{
    $data = stripslashes(trim($data));
    $data = strip_tags($data);
    $data = html_entity_decode(htmlentities($data));
    return e($data);
}

function e(string $value = ''): string
{
    return htmlspecialchars($value ?? '', ENT_QUOTES, 'UTF-8');
}
