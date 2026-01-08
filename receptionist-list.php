<?php
include "auth.php";
include "config.php";

$result = mysqli_query($connection, "SELECT * FROM receptionist ORDER BY id DESC");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Receptionist List</title>
    <link rel="stylesheet"
     href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
</head>
<body>

<nav class="navbar navbar-dark bg-dark">
    <a href="admin-dashboard.php" class="navbar-brand text-white">Gym Admin</a>
    <div>
        <a href="receptionist.php" class="btn btn-outline-light btn-sm mr-2">Add Receptionist</a>
        <a href="logout.php" class="btn btn-danger btn-sm">Logout</a>
    </div>
</nav>

<div class="container mt-4">
    <h3 class="text-center">Receptionist List</h3>

    <table class="table table-bordered table-striped">
        <tr>
            <th>ID</th>
            <th>Receptionist ID</th>
            <th>Name</th>
            <th>DOB</th>
            <th>Address</th>
            <th>Phone</th>
        </tr>

        <?php
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>".$row['id']."</td>";
            echo "<td>".$row['receptionist_id']."</td>";
            echo "<td>".$row['receptionist_name']."</td>";
            echo "<td>".$row['dob']."</td>";
            echo "<td>".$row['address']."</td>";
            echo "<td>".$row['phone']."</td>";
            echo "</tr>";
        }
        ?>
    </table>
</div>

</body>
</html>
