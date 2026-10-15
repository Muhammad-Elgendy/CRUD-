<?php


try {
    $connect = mysqli_connect("localhost", "root", "", "users_db");
} catch (Exception $e) {
    echo $e->getMessage();
}
