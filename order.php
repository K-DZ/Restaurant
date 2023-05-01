<!DOCTYPE html>
<html lang="en">
<head>
    <title>Order</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url("bj.jpg");
            background-size: cover;
        }
        a{
            color: red;
        }
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            text-align: left;
            padding: 8px;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        p {
            text-align: center;
            font-size: 30px;
            color: red;
        }

        form {
            text-align: center;
        }

    </style>
</head>
<body>
<form method="POST" action="">
    <p>Input the date you want to query</p>
    <label for="date">Enter date:</label>
    <input type="date" id="date" name="date">
    <input type="submit" value="Submit">
</form>
<br>
<br>

<?php
include "connectDB.php";
if(isset($_POST['date'])) {
    $date = $_POST['date'];
    $sql = "SELECT c.firstname,c.lastname,o.food,o.totalPrice,o.tip,e.firstname as e_firstname,e.lastname as e_lastname FROM `order` as o LEFT JOIN employee as e on o.deliverID = e.employeeID LEFT JOIN customeracct as c on o.customerEmail = c.email where o.date = '{$date}'";

    $stmt = $conn->prepare($sql);
    $stmt->execute();
    if($stmt->rowCount() > 0) {
        echo "<table>";
        echo "<tr><th>Customer FirstName</th><th>Customer LastName</th><th>Items Ordered</th><th>Total Amount</th><th>Tip</th><th>Delivery Person</th></tr>";
        while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr><td>".$row['firstname']."</td><td>".$row['lastname']."</td><td>".$row['food']."</td><td>".$row['totalPrice']."</td><td>".$row['tip']."</td><td>".$row['e_firstname']. " " .$row['e_lastname']. "</td></tr>";
        }
        echo "</table>";
    }
    else {
        echo "<p>No orders found. Please try aother date</p>";
    }
}
?>
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
