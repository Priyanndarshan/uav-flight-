<?php
include 'db.php';

// Check if the mission ID is provided in the URL
if(isset($_GET['id'])) {
    // Sanitize the input to prevent SQL injection
    $mission_id = mysqli_real_escape_string($conn, $_GET['id']);

    // Fetch the mission details from the database
    $sql = "SELECT * FROM missions WHERE id = $mission_id";
    $result = $conn->query($sql);

    // Check if the mission exists
    if ($result->num_rows > 0) {
        // Output data of the mission
        $row = $result->fetch_assoc();
        echo "Mission Name: " . $row["mission_name"]. "<br>";
        echo "Geographic Area: " . $row["geographic_area"]. "<br>";
        echo "Status: " . $row["status"]. "<br>";
        // Add more details as needed
    } else {
        echo "Mission not found";
    }
} else {
    echo "Mission ID not provided";
}

// Close the database connection
$conn->close();
?>
