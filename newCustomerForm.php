<!DOCTYPE html>
<html lang="en">
<head>
    <title>newCustomerForm</title>
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
        .elegant-aero {

            background: white;
            margin-left:auto;

            margin-right:auto;

            max-width: 500px;

            padding: 20px 20px 20px 20px;

            font: 13px Arial, Helvetica, sans-serif;

            color: black;

        }

        .elegant-aero h1 {

            font: 24px "Trebuchet MS", Arial, Helvetica, sans-serif;

            padding: 10px 10px 10px 20px;

            display: block;

            background: gray;

            border-bottom: 1px solid black;

            margin: -20px -20px 15px;

        }

        .elegant-aero h1>span {

            display: block;

            font-size: 11px;

        }



        .elegant-aero label>span {

            float: left;

            margin-top: 10px;

            color: red;

        }

        .elegant-aero label {

            display: block;

            margin: 0px 0px 5px;

        }

        .elegant-aero label>span {

            float: left;

            width: 20%;

            text-align: right;

            padding-right: 15px;

            margin-top: 10px;

            font-weight: bold;

        }
    </style>
</head>
<body>
<p>&nbsp;</p>
<form action="addCustomer.php" method="POST" class="elegant-aero">
    <h1>ADD A NEW USER</h1>
    <label>
        <span>First Name:</span>
        <input type="text" id="firstName" name="firstName" required>
    </label>
    <label>
        <span>Last Name:</span>
        <input type="text" id="lastName" name="lastName" required>
    </label>

    <label>
        <span>Email:</span>
        <input type="email" id="email" name="email" required>
    </label>
    <label>
        <span>Phone Number:</span>
        <input type="tel" id="phoneNumber" name="phoneNumber" required>
    </label>
    <label>
        <span>Street:</span>
        <input type="text" id="street" name="street" required>
    </label>

    <label>
        <span>City:</span>
        <input type="text" id="city" name="city" required>
    </label>

    <label>
        <span>Postal Code:</span>
        <input type="text" id="pc" name="pc" required>
    </label>

    <label>
        <span>&nbsp;</span>
        <input type="submit" value="submit">
    </label>
    <p ></p>

</form>
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
