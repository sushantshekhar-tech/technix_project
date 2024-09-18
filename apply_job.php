<?php

include 'essentials/db.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $resume = htmlspecialchars($_POST['resume']);
    $jobRole = htmlspecialchars($_POST['jobRole']);


    $sql = "INSERT INTO job_applications (name, email, resume, job_role, application_date) VALUES (?, ?, ?, ?, NOW())";
    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("ssss", $name, $email, $resume, $jobRole);
        $stmt->execute();
        $stmt->close();
    }


    $conn->close();
}
?>
