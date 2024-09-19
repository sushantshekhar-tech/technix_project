<?php

include 'essentials/db.php';


if (isset($_GET['role'])) {
    $role = htmlspecialchars($_GET['role']); 


    $sql = "SELECT title, description FROM jobs WHERE role = ?";
    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("s", $role);
        $stmt->execute();
        $stmt->bind_result($job_title, $job_description);
        $stmt->fetch();
        $stmt->close();
    }
} else {
    die("No job role specified.");
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= htmlspecialchars($job_title); ?></title>

 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    
    <style>
        header {
            background-color: #f8f9fa;
            padding: 10px 0;
        }
        footer {
            background-color: #f8f9fa;
            padding: 20px 0;
        }
        .breadcrumb-item a {
            color: #0d6efd;
        }
    </style>
</head>
<body>


<header>
<?php 
 require "component/nav.php"
 ?>
</header>


<div class="container my-5" data-aos="fade-up">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center"><?= htmlspecialchars($job_title); ?></h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php"><i class="bi bi-house-door"></i> Home</a></li>
                    <li class="breadcrumb-item"><a href="career.php"><i class="bi bi-briefcase"></i> Career</a></li>
                    <li class="breadcrumb-item"><a href="current_opportunities.php"><i class="bi bi-people"></i> Current Opportunities</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><i class="bi bi-file-earmark-text"></i> Job Detail</li>
                </ol>
            </nav>
            <div class="mt-4">
                <h4>Job Description</h4>
                <p><?= nl2br(htmlspecialchars($job_description)); ?></p>
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#applyModal"><i class="bi bi-briefcase"></i> Apply Now</button>
                <a href="career" class="btn btn-secondary"><i class="bi bi-arrow-left"></i> Back to Jobs</a>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="applyModal" tabindex="-1" aria-labelledby="applyModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="applyModalLabel">Apply for <?= htmlspecialchars($job_title); ?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="applyForm">
                    <div class="mb-3">
                        <label for="applicantName" class="form-label">Name</label>
                        <input type="text" class="form-control" id="applicantName" required>
                    </div>
                    <div class="mb-3">
                        <label for="applicantEmail" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="applicantEmail" required>
                    </div>
                    <div class="mb-3">
                        <label for="applicantResume" class="form-label">Resume (URL)</label>
                        <input type="url" class="form-control" id="applicantResume" required>
                    </div>
                    <input type="hidden" id="jobRole" value="<?= htmlspecialchars($role); ?>">
                    <button type="submit" class="btn btn-primary">Submit Application</button>
                </form>
                <div id="confirmationMessage" class="mt-3 d-none alert alert-success">Thank you for applying!</div>
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

<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
 
    AOS.init();

    
    document.getElementById('applyForm').addEventListener('submit', function(e) {
        e.preventDefault(); 

      
        var name = document.getElementById('applicantName').value;
        var email = document.getElementById('applicantEmail').value;
        var resume = document.getElementById('applicantResume').value;
        var jobRole = document.getElementById('jobRole').value;

        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'apply_job.php', true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.onload = function() {
            if (xhr.status === 200) {
           
                document.getElementById('confirmationMessage').classList.remove('d-none');
             
                document.getElementById('applyForm').reset();
            }
        };
        xhr.send('name=' + encodeURIComponent(name) + '&email=' + encodeURIComponent(email) + '&resume=' + encodeURIComponent(resume) + '&jobRole=' + encodeURIComponent(jobRole));
    });
</script>
</body>
</html>
