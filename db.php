<?php
try {
    $conn = mysqli_connect("localhost", "root", "", "dicoding-222410102021");
} catch (\Throwable $th) {
    echo "There is something wrong with the database connection. " . mysqli_connect_error();
}
?>