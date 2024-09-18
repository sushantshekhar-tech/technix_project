<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Technix</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="css/style.css">
    
</head>
<body>


 <?php 
 require "component/nav.php"
 ?>


<div class="hero" style="background:url(assets/brand.png);">
    <div class="container">
        <!-- <h1>Welcome to Technix</h1>
        <p>Your Trusted Technology Partner</p> -->
        <a href="jobs.php" class="btn btn-primary btn-lg mt-3">Explore Careers</a>
    </div>
</div>

<div class="content-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <img src="assets/proj.png" alt="Service Image" style="border: 2px solid black; border-radius:20px;">
            </div>
            <div class="col-lg-6">
                <h2>Our Services</h2>
                <p>At Technix, we offer a wide range of technology solutions including software development, IT consulting, and more. We are committed to delivering innovative and reliable services to our clients.</p>
                <a href="#" class="btn btn-outline-primary">Learn More</a>
            </div>
        </div>
    </div>
</div>


<div class="content-section bg-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 order-lg-2">
                <img src="assets/proj-1.png" alt="Project Image" style="border: 2px solid black; border-radius:20px;">
            </div>
            <div class="col-lg-6 order-lg-1">
                <h2>Our Projects</h2>
                <p>We have successfully delivered projects for various industries, including healthcare, education, and finance. Our team is dedicated to meeting the unique needs of each client and ensuring their success.</p>
                <a href="#" class="btn btn-outline-primary">View Projects</a>
            </div>
        </div>
    </div>
</div>


<footer class="text-center">
<?php 
 require "component/footer.php"
 ?>
</footer>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
