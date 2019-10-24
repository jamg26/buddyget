<?php
include_once('../../db.php');
date_default_timezone_set('Asia/Manila');
$product = $_POST['product'];
$price = $_POST['price'];
$note = $_POST['note'];
$name = $_POST['name'];
$date = date('m/d/Y h:i:s a', time());

$sql = "insert into planner (product, price, date, name, note) values('$product', $price, '$date', '$name', '$note')";
    if ($conn->query($sql) === TRUE) {
        header('location: /pages/mother/planner.php?added=true');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        //header('location: ../pages/room.php?added=false');
    }
    $conn->close();
?>
