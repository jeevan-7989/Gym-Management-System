<?php
include "auth.php";     // 🔐 session protection
include "config.php";   // DB connection

$result = mysqli_query($connection, "SELECT * FROM billing ORDER BY id DESC");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Billing Records - Gym Management System</title>

    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

    <style>
        body {
            background-color: #f4f6f9;
        }
        .container {
            margin-top: 40px;
        }
        table {
            background: #fff;
        }
        .navbar-brand img {
            height: 40px;
        }
    </style>
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="admin-dashboard.php">
        <img src="img/DF.png" alt="Logo">
    </a>

    <span class="navbar-text text-white ml-3">
        Gym Management System
    </span>

    <div class="ml-auto">
        <a href="admin-dashboard.php" class="btn btn-outline-light btn-sm mr-2">
            Dashboard
        </a>
        <a href="billing.php" class="btn btn-outline-light btn-sm mr-2">
            Add Billing
        </a>
        <a href="logout.php" class="btn btn-danger btn-sm">
            Logout
        </a>
    </div>
</nav>

<!-- TABLE -->
<div class="container">
    <h3 class="text-center mb-4">Billing Records</h3>

    <table class="table table-bordered table-striped table-hover">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Member ID</th>
                <th>Member Name</th>
                <th>Billing Date</th>
                <th>Amount</th>
            </tr>
        </thead>
        <tbody>
        <?php
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>".$row['id']."</td>";
                echo "<td>".$row['member_id']."</td>";
                echo "<td>".$row['member_name']."</td>";
                echo "<td>".$row['billing_date']."</td>";
                echo "<td>".$row['amount']."</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='5' class='text-center'>No billing records found</td></tr>";
        }
        ?>
        </tbody>
    </table>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
