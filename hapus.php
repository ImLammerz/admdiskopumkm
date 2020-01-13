<?php
// include database connection file
include("config.php");

// Get id from URL to delete that user
$id = $_GET['id'];

// Delete user row from table based on given id
    $sql = "DELETE FROM Rsakit WHERE id=$id";
    $query = mysqli_query($db, $sql);

// After delete redirect to Home, so that latest user list will be displayed.
header("Location:index.php");
?>