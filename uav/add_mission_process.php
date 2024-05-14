<?php
include 'db.php';


$mission_name = $_POST['mission_name'];
$geographic_area = $_POST['geographic_area'];
$status = $_POST['status'];
$assigned_operator = $_POST['assigned_operator'];


$sql = "INSERT INTO missions (mission_name, geographic_area, status, assigned_operator) 
        VALUES ('$mission_name', '$geographic_area', '$status', '$assigned_operator')";

if ($conn->query($sql) === TRUE) {
    echo "New mission added successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
?>
