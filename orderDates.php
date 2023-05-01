<!DOCTYPE html>
<html lang="en">
<head>
    <title>Restaurant Orders - Dates</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        a{
            color: red;
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
    <h1>Orders</h1>
    <table>
        <tr>
            <th>Date</th>
            <th>Number of orders</th>
        </tr>
        <?php
        include "connectDB.php";
        $stmt = $conn->prepare("SELECT date,count(*) as num FROM `order` GROUP BY date");
        $stmt->execute();
        $result = $stmt->fetchAll();
        foreach ($result as $row) {
            echo "<tr><td>" . $row["date"] . "</td><td>" . $row["num"] . "</td></tr>";
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
<img src="bj.jpg">
</body>
</html>

