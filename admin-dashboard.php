<?php
include "auth.php"; // session protection
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard - Gym Management System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link rel="stylesheet"
     href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(
                rgba(0,0,0,0.75),
                rgba(0,0,0,0.75)
            ),
            url("img/gallery5.png") center/cover no-repeat;
            min-height: 100vh;
        }

        .navbar {
            background: rgba(0,0,0,0.9) !important;
        }

        .navbar-brand img {
            height: 40px;
        }

        .dashboard-container {
            padding: 50px 20px;
        }

        h2 {
            color: #fff;
            margin-bottom: 40px;
        }

        .card {
            border-radius: 14px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.5);
            transition: transform 0.3s;
        }

        .card:hover {
            transform: translateY(-10px);
        }

        .card-title {
            font-weight: bold;
        }

        .btn-custom {
            background: #583672;
            color: #fff;
            border: none;
        }

        .btn-custom:hover {
            background: #452a5a;
        }
    </style>
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark">
    <a class="navbar-brand" href="#">
        <img src="img/DF.png" alt="Gym Logo">
    </a>
    <span class="navbar-text text-white ml-3">
        Gym Management System – Admin Panel
    </span>

    <div class="ml-auto">
        <a href="logout.php" class="btn btn-danger btn-sm">Logout</a>
    </div>
</nav>

<!-- DASHBOARD -->
<div class="dashboard-container container">
    <h2 class="text-center">Welcome Admin</h2>

    <div class="row text-center">

        <!-- MEMBERS -->
        <div class="col-md-3 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Members</h5>
                    <p>Manage gym members</p>
                    <a href="members.php" class="btn btn-custom btn-sm mb-2">Add Member</a><br>
                    <a href="members-list.php" class="btn btn-outline-dark btn-sm">View Members</a>
                </div>
            </div>
        </div>

        <!-- COACH -->
        <div class="col-md-3 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Coaches</h5>
                    <p>Manage coaches</p>
                    <a href="coach.php" class="btn btn-custom btn-sm mb-2">Add Coach</a><br>
                    <a href="coach-list.php" class="btn btn-outline-dark btn-sm">View Coaches</a>
                </div>
            </div>
        </div>

        <!-- BILLING -->
        <div class="col-md-3 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Billing</h5>
                    <p>Manage billing</p>
                    <a href="billing.php" class="btn btn-custom btn-sm mb-2">Add Billing</a><br>
                    <a href="billing-list.php" class="btn btn-outline-dark btn-sm">View Billing</a>
                </div>
            </div>
        </div>

        <!-- RECEPTIONIST -->
        <div class="col-md-3 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Receptionist</h5>
                    <p>Manage receptionist</p>
                    <a href="receptionist.php" class="btn btn-custom btn-sm mb-2">Add Receptionist</a><br>
                    <a href="receptionist-list.php" class="btn btn-outline-dark btn-sm">View Receptionist</a>
                </div>
            </div>
        </div>

    </div>
</div>

</body>
</html>
