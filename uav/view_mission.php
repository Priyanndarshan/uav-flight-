<!DOCTYPE html>
<html>
<head>
    <title>View Mission</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Additional custom styling */
        .mission-details {
            border: 1px solid #ccc;
            padding: 20px;
            margin-bottom: 20px;
        }
        .mission-details h2 {
            margin-top: 0;
        }
        .mission-details p {
            margin-bottom: 10px;
        }
        .mission-images {
            display: flex;
            flex-wrap: wrap;
            justify-content: center; /* Center images horizontally */
            align-items: flex-start; /* Align images to the top */
        }
        .mission-images img {
            max-width: 100%; /* Ensure images don't exceed container width */
            height: auto; /* Maintain aspect ratio */
            margin: 5px; /* Add space between images */
        }
    </style>
</head>
<body>

<?php
// Sample UAV mission data
$mission = array(
    'title' => 'Wildlife Monitoring with UAVs',
    'description' => 'This mission involves using UAVs to monitor wildlife populations and habitats in remote areas.',
    'launch_date' => '2024-08-15',
    'duration' => '3 months',
    'crew' => array(
        'UAV Operator 1',
        'Wildlife Biologist 1',
        'Data Analyst 1'
    ),
    'images' => array(
        'img1.jpg',
        'img2.jpg',
        'img3.jpg'
    )
);
?>

<div class="container">
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <div class="mission-details">
                <h2><?php echo $mission['title']; ?></h2>
                <p><strong>Description:</strong> <?php echo $mission['description']; ?></p>
                <p><strong>Launch Date:</strong> <?php echo $mission['launch_date']; ?></p>
                <p><strong>Duration:</strong> <?php echo $mission['duration']; ?></p>
                <p><strong>Crew:</strong></p>
                <ul class="list-unstyled">
                    <?php foreach ($mission['crew'] as $crew_member): ?>
                        <li><?php echo $crew_member; ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>

            <div class="mission-images">
                <?php foreach ($mission['images'] as $image): ?>
                    <img src="mission_images/<?php echo $image; ?>" alt="Mission Image" class="img-thumbnail">
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
