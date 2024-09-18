<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Technix</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="css/style.css">
    
</head>
<body>

<!-- Navbar -->
 <?php 
 require "component/nav.php"
 ?>

<!-- Hero Section -->
<div class="hero">
    <div class="container">
        <h1>Welcome to Technix</h1>
        <p>Your Trusted Technology Partner</p>
        <a href="jobs.php" class="btn btn-primary btn-lg mt-3">Explore Careers</a>
    </div>
</div>

<!-- Content Section 1 -->
<div class="content-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <img src="https://via.placeholder.com/600x400" alt="Service Image">
            </div>
            <div class="col-lg-6">
                <h2>Our Services</h2>
                <p>At Technix, we offer a wide range of technology solutions including software development, IT consulting, and more. We are committed to delivering innovative and reliable services to our clients.</p>
                <a href="#" class="btn btn-outline-primary">Learn More</a>
            </div>
        </div>
    </div>
</div>

<!-- Content Section 2 -->
<div class="content-section bg-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 order-lg-2">
                <img src="https://via.placeholder.com/600x400" alt="Project Image">
            </div>
            <div class="col-lg-6 order-lg-1">
                <h2>Our Projects</h2>
                <p>We have successfully delivered projects for various industries, including healthcare, education, and finance. Our team is dedicated to meeting the unique needs of each client and ensuring their success.</p>
                <a href="#" class="btn btn-outline-primary">View Projects</a>
            </div>
        </div>
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
