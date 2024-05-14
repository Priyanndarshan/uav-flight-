<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        .card {
            margin-bottom: 20px;
        }
        .navbar-custom {
            background-color: #343A40 !important;
        }
        .navbar-custom .navbar-brand,
        .navbar-custom .navbar-nav .nav-link {
            color: #ffffff !important;
        }
        .navbar-custom .navbar-brand:hover,
        .navbar-custom .navbar-nav .nav-link:hover {
            color: #ffffff !important;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light navbar-custom">
  <a class="navbar-brand" href="#">Your UAV Flight Management</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="add_mission.php">Add Mission</a>
      </li>
    </ul>
  </div>
</nav>

  <div class="py-5">
    <div class="container">
      <div class="row">
        <?php
        include 'db.php'; // Include the database connection file

        // Fetch data from the missions table
        $sql = "SELECT * FROM missions";
        $result = $conn->query($sql);

        // Check if there are any rows returned
        if ($result->num_rows > 0) {
            // Output data of each row
            while($row = $result->fetch_assoc()) {
                echo '<div class="col-md-4">';
                echo '<div class="card p-3">';
                echo '<div class="card-block">';
                echo '<h4 class="card-title">' . htmlspecialchars($row["mission_name"]) . '</h4>';
                echo '<h6 class="card-subtitle text-muted">Geographic Area: ' . htmlspecialchars($row["geographic_area"]) . '</h6>';
                echo '<p class="card-text p-y-1">Status: ' . $row["status"] . '</p>';
                echo '<p class="card-text p-y-1">Assigned Operator: ' . htmlspecialchars($row["assigned_operator"]) . '</p>';
                echo '<a href="view_mission.php ?id=' . $row["id"] . '" class="card-link">View Details</a>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
            }
        } else {
            echo "<p>No missions found</p>";
        }

        // Close the database connection
        $conn->close();
        ?>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
