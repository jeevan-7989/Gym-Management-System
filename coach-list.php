<?php
include "auth.php";
include "config.php";

$result = mysqli_query($connection, "SELECT * FROM coach ORDER BY id DESC");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Coach List</title>
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
</head>
<body>

<nav class="navbar navbar-dark bg-dark">
    <a href="admin-dashboard.php" class="navbar-brand text-white">Gym Admin</a>
    <div>
        <a href="coach.php" class="btn btn-outline-light btn-sm mr-2">Add Coach</a>
        <a href="logout.php" class="btn btn-danger btn-sm">Logout</a>
    </div>
</nav>

<div class="container mt-4">
    <h3 class="text-center">Coach List</h3>
    <table class="table table-bordered table-striped">
        <tr>
            <th>ID</th><th>Coach ID</th><th>Name</th><th>DOB</th><th>Experience</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= $row['coach_id'] ?></td>
            <td><?= $row['coach_name'] ?></td>
            <td><?= $row['dob'] ?></td>
            <td><?= $row['experience'] ?> yrs</td>
        </tr>
        <?php } ?>
    </table>
</div>

</body>
</html>
