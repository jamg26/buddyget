<?php
include '../../db.php';
$id = $_POST['id'];

$sql = "update planner set status='done' where id=$id";
    if ($conn->query($sql) === TRUE) {
        header('location: /pages/mother/planner.php?updated=true');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        //header('location: ../pages/course.php?updated=false');
    }
    $conn->close();
?>