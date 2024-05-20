<?php

namespace App\Model;

use App\Core\App;

class BaseModel
{

    protected \mysqli | bool $conn;
    public function __construct()
    {
        App::db();
    }
}
