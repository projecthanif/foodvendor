<?php

function get_all_food($conn) {
    $food = [];
    $query = $conn->query("SELECT * FROM food_items WHERE is_available = 'true'");

    if (mysqli_num_rows($query) > 0) {
        while($item = $query->fetch_assoc()) {
            $food[] = $item;
        }
    }
    return $food;
}

function get_food_by_type($conn, $type) {
    $food = [];
    $query = $conn->query("SELECT * FROM food_items WHERE category = '$type'");

    if (mysqli_num_rows($query) > 0) {
        while($item = $query->fetch_assoc()) {
            $food[] = $item;
        }
    }
    return $food;
}
