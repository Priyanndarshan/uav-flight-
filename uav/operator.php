<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operator Dashboard</title>
    <!-- Bootstrap CSS link -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        /* Custom styles go here */
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Operator Dashboard</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Logout</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container mt-4">
        <h2 class="mb-4">Current Operations</h2>
        <div class="card">
            <div class="card-body">
                <!-- Display list of ongoing operations here -->
                <ul class="list-group">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Operation 1
                        <a href="#" class="btn btn-primary btn-sm">View Details</a>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Operation 2
                        <a href="#" class="btn btn-primary btn-sm">View Details</a>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Operation 3
                        <a href="#" class="btn btn-primary btn-sm">View Details</a>
                    </li>
                    <!-- Add more operations dynamically from backend -->
                </ul>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS link -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
