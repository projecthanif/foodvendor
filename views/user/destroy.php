<?php

session_start();

unset($_SESSION["name"], $_SESSION["type"], $_SESSION["id"]);

session_destroy();
sleep(3);
header("Location: ../index.php");
