<?php
include '../../db.php';
$id = $_POST['id'];
$product = $_POST['product'];
$price = $_POST['price'];
$note = $_POST['note'];

$sql = "update planner set product='$product', price='$price', note='$note' where id=$id";
    if ($conn->query($sql) === TRUE) {
        header('location: /pages/mother/planner.php?updated=true');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        //header('location: ../pages/course.php?updated=false');
    }
    $conn->close();
?>