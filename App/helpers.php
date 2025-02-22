<?php

if (! function_exists('config')) {
    function config(string $key)
    {
        return require __DIR__ . "/../config/{$key}.php";
    }
}