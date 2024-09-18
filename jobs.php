<?php
// Include the database connection
include 'essentials/db.php';

// Fetch the list of jobs from the database
$sql = "SELECT id, title, role, openings, location FROM jobs";
$result = $conn->query($sql);
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Job Listings</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    
    <style>
        /* Styling for the cards */
        .card {
            transition: transform 0.2s ease-in-out;
        }
        .card:hover {
            transform: scale(1.05);
        }
        footer {
            background-color: #f8f9fa;
            padding: 20px;
        }
    </style>
</head>
<body>

<!-- Navbar -->
<?php 
 require "component/nav.php"
 ?>
<!-- Job Listings -->
<div class="container my-5">
    <h2 class="text-center mb-4">Available Jobs</h2>
    <div class="row">
        <?php while($row = $result->fetch_assoc()): ?>
            <div class="col-md-4 mb-3">
                <div class="card shadow">
                    <div class="card-body">
                        <h5 class="card-title"><?= htmlspecialchars($row['title']); ?></h5>
                        <p class="card-text"><i class="bi bi-geo-alt" style="color:red;"></i> <?= htmlspecialchars($row['location']); ?></p>
                        <p class="card-text"><i class="bi bi-briefcase" style="color:red;"></i> <?= htmlspecialchars($row['openings']); ?> openings</p>
                        <a href="job_detail.php?role=<?= urlencode($row['role']); ?>" class="btn btn-primary">View Details</a>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
</div>

<!-- Footer -->
<footer class="text-center">
<?php 
 require "component/footer.php"
 ?>
</footer>

<!-- Bootstrap JS and dependencies -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
