<!DOCTYPE html>
<html lang="en">
<head>
    <title>Restaurant Orders - Dates</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url("bj.jpg");
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 10px;
        }

        a{
            color: red;
        }

        main {
            padding: 10px;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #333;
            color: #fff;
        }

        img {
            display: block;
            margin: 20px auto;
            max-width: 100%;
            height: auto;
        }

        th {
            text-align: center;
        }
        td {
            text-align: center;
        }

        h1 {
            text-align: center;
        }

    </style>
</head>
<body>
<main>
    <h1>Employee List</h1>
    <table>
        <tr>
            <th>Employee Name</th>
            <th>Day of week</th>
            <th>Start Time</th>
            <th>End Time</th>
        </tr>
        <?php
        include "connectDB.php";
        $employeeID = $_GET['employeeID'];
        $stmt = $conn->prepare("SELECT s.*,e.firstname,e.lastname FROM `schedule` as s LEFT JOIN employee as e on s.employeeID = e.employeeID WHERE s.day != 'Saturday' AND s.day != 'Sunday' AND e.employeeID = {$employeeID}");
        $stmt->execute();
        $result = $stmt->fetchAll();
        foreach ($result as $row) {
            echo "<tr><td>" . $row["firstname"] . " " . $row["lastname"] . "</td><td>" . $row["day"] . "</td><td>" . $row["startTime"] . "</td><td>" . $row["endTime"] . "</td></tr>";
        }
        ?>
    </table>
</main>
<ul>
    <li><a href="restaurant.html">Home</a></li>
    <li><a href="order.php">Orders</a></li>
    <li><a href="newCustomerForm.php">Add A New User</a></li>
    <li><a href="cusList.php">List of Customers</a></li>
    <li><a href="orderDates.php">Table of Orders and Dates</a></li>
    <li><a href="schedules.php">Employee Schedules</a></li>
</ul>
</body>
</html>