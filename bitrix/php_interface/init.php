<?php
function dump($array)
{
    echo '<pre>';
    print_r($array);
    echo '</pre>';
}

if (file_exists($_SERVER['DOCUMENT_ROOT'] . '/bitrix/php_interface/include/constants.php')) {
    require_once $_SERVER['DOCUMENT_ROOT'] . '/bitrix/php_interface/include/constants.php';
}

if (file_exists($_SERVER['DOCUMENT_ROOT'] . '/bitrix/php_interface/include/event_handlers.php')) {
    require_once $_SERVER['DOCUMENT_ROOT'] . '/bitrix/php_interface/include/event_handlers.php';
}