<?php

function dd(...$var)
{
    echo "<pre>";
    var_dump($var);
    echo "</pre>";
}

function ddd(...$var)
{
    dd(...$var);
    exit;
}
