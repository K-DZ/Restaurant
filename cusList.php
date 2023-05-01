<!DOCTYPE html>
<html lang="en">
<head>
    <title>Restaurant Customers</title>
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
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: aqua;
            color: black;
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
    <h1>Customers</h1>
    <table>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Phone Number</th>
            <th>Street</th>
            <th>City</th>
            <th>Postal Code</th>
        </tr>
        <?php
        include "connectDB.php";
        $stmt = $conn->prepare("SELECT *  FROM `customeracct`");
        $stmt->execute();
        $result = $stmt->fetchAll();
        foreach ($result as $row) {
            echo "<tr>
            <td>" . $row["firstname"] . "</td>
            <td>" . $row["lastname"] . "</td>
            <td>" . $row["email"] . "</td>
            <td>" . $row["phoneNum"] . "</td>
            <td>" . $row["street"] . "</td>
            <td>" . $row["city"] . "</td>
            <td>" . $row["zip"] . "</td>
            </tr>";
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

