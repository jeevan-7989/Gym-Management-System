<?php
include "config.php";

$msg = "";

if (isset($_POST["submit"])) {

    $coach_id = $_POST["coach_id"];
    $coach_name = $_POST["coach_name"];
    $dob = $_POST["dob"];
    $experience = $_POST["experience"];

    $sql = "INSERT INTO coach 
            (coach_id, coach_name, dob, experience)
            VALUES 
            ('$coach_id', '$coach_name', '$dob', '$experience')";

    if (mysqli_query($connection, $sql)) {
        $msg = "Coach added successfully!";
    } else {
        $msg = "Error: " . mysqli_error($connection);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Coach - Gym Management System</title>
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <!-- Bootstrap -->
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

    <style>
        body {
            background-color: #f4f6f9;
        }
        .container {
            margin-top: 40px;
            max-width: 700px;
        }
        .card {
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
        }
        .navbar-brand img {
            height: 40px;
        }
    </style>
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="index.html">
        <img src="img/DF.png" alt="Logo">
    </a>
    <span class="navbar-text text-white ml-3">
        Gym Management System
    </span>

    <div class="ml-auto">
        <a href="members.php" class="btn btn-outline-light btn-sm mr-2">Members</a>
        <a href="billing.php" class="btn btn-outline-light btn-sm mr-2">Billing</a>
        <a href="admin-login.php" class="btn btn-danger btn-sm">Logout</a>
    </div>
</nav>

<!-- FORM -->
<div class="container">
    <div class="card">
        <h3 class="text-center mb-4">Add Coach</h3>

        <?php if ($msg != "") { ?>
            <div class="alert alert-info text-center">
                <?php echo $msg; ?>
            </div>
        <?php } ?>

        <form method="post">
            <div class="form-group">
                <label>Coach ID</label>
                <input type="text" name="coach_id" class="form-control" required>
            </div>

            <div class="form-group">
                <label>Coach Name</label>
                <input type="text" name="coach_name" class="form-control" required>
            </div>

            <div class="form-group">
                <label>Date of Birth</label>
                <input type="date" name="dob" class="form-control" required>
            </div>

            <div class="form-group">
                <label>Experience (Years)</label>
                <input type="number" name="experience" class="form-control" required>
            </div>

            <button type="submit" name="submit" class="btn btn-primary btn-block">
                Save Coach
            </button>

            <a href="coach-list.php" class="btn btn-success btn-block mt-2">
                View Coaches
            </a>
        </form>
    </div>
</div>

<!-- JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>

</body>
</html>
