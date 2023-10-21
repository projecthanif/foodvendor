<?php

const HOST = 'localhost';
const HOSTNAME = 'root';
const PASSWORD = '';
const DataBaseName = 'foodvendor';

$conn = mysqli_connect(
    HOST,
    HOSTNAME,
    PASSWORD,
    DataBaseName
);

if ($conn->connect_error) {
    trigger_error('ERROR', E_USER_ERROR);
    die('Connection Error');
}
