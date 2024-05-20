<?php

function view(string $viewPath)
{
    $viewPath = VIEW_PATH . str_replace(".", "/", $viewPath) . ".php";

    if (file_exists($viewPath)) {
        include_once  $viewPath;
    } else {
        dd($viewPath);
    }
}
