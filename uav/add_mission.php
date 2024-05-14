<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Mission</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2 class="my-4">Add New Mission</h2>
        <form action="add_mission_process.php" method="POST">
            <div class="form-group">
                <label for="mission_name">Mission Name:</label>
                <input type="text" class="form-control" id="mission_name" name="mission_name" required>
            </div>
            <div class="form-group">
                <label for="geographic_area">Geographic Area:</label>
                <input type="text" class="form-control" id="geographic_area" name="geographic_area">
            </div>
            <div class="form-group">
                <label for="status">Status:</label>
                <select class="form-control" id="status" name="status">
                    <option value="ongoing">Ongoing</option>
                    <option value="completed">Completed</option>
                    <option value="cancelled">Cancelled</option>
                    <option value="pending" selected>Pending</option>
                </select>
            </div>
            <div class="form-group">
                <label for="assigned_operator">Assigned Operator:</label>
                <input type="text" class="form-control" id="assigned_operator" name="assigned_operator">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>
