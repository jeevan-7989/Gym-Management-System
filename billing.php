<?php
include "config.php";

$msg = "";

if (isset($_POST["submit"])) {

    $member_id = $_POST["member_id"];
    $member_name = $_POST["member_name"];
    $billing_date = $_POST["billing_date"];
    $amount = $_POST["amount"];

    $sql = "INSERT INTO billing (member_id, member_name, billing_date, amount)
            VALUES ('$member_id', '$member_name', '$billing_date', '$amount')";

    if (mysqli_query($connection, $sql)) {
        $msg = "Billing record saved successfully!";
    } else {
        $msg = "Error: " . mysqli_error($connection);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Billing - Gym Management System</title>
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <!-- Bootstrap CSS -->
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
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
            border-radius: 10px;
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
        <img src="img/DF.png" alt="Gym Logo">
    </a>
    <span class="navbar-text text-white ml-3">
        Gym Management System
    </span>

    <div class="ml-auto">
        <a href="members.php" class="btn btn-outline-light btn-sm mr-2">Members</a>
        <a href="coach.php" class="btn btn-outline-light btn-sm mr-2">Coach</a>
        <a href="admin-login.php" class="btn btn-danger btn-sm">Logout</a>
    </div>
</nav>

<!-- FORM -->
<div class="container">
    <div class="card">
        <h3 class="text-center mb-4">Billing Details</h3>

        <?php if ($msg != "") { ?>
            <div class="alert alert-info text-center">
                <?php echo $msg; ?>
            </div>
        <?php } ?>

        <form method="post">
            <div class="form-group">
                <label>Member ID</label>
                <input type="text" name="member_id" class="form-control" required>
            </div>

            <div class="form-group">
                <label>Member Name</label>
                <input type="text" name="member_name" class="form-control" required>
            </div>

            <div class="form-group">
                <label>Billing Date</label>
                <input type="date" name="billing_date" class="form-control" required>
            </div>

            <div class="form-group">
                <label>Amount</label>
                <input type="number" name="amount" class="form-control" required>
            </div>

            <button type="submit" name="submit" class="btn btn-primary btn-block">
                Save Billing
            </button>
        </form>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>

</body>
</html>
