<?php
include "connectDB.php";

$email = $_POST['email'];
$phoneNum = $_POST['phoneNumber'];
$firstname = $_POST['firstName'];
$lastname = $_POST['lastName'];
$street = $_POST['street'];
$city = $_POST['city'];
$zip = $_POST['pc'];
$credit = 5;

$query= "SELECT * from customeracct where phoneNum = '{$phoneNum}'";
$result = $conn->query($query);
foreach ($result as $key => $value) {
	if (isset($value) && !empty($value)) {
        echo "<script>alert('Phone number already exists'); location.href='newCustomerForm.php'</script>";
    	exit();
	}
}

$query1= "SELECT * from customeracct where email = '{$email}'";
$result1 = $conn->query($query1);
foreach ($result1 as $key1 => $value1) {
	if (isset($value1) && !empty($value1)) {
	    echo "<script>alert('Email number already exists'); location.href='newCustomerForm.php'</script>";
    	exit();
	}
}

try{
	$sql = "INSERT INTO `customeracct` (`email`, `phoneNum`, `firstname`, `lastname`, `street`, `city`, `zip`, `credit`, `restaurant_Name`) VALUES ('{$email}', '{$phoneNum}', '{$firstname}', '{$lastname}', '{$street}', '{$city}', '{$zip}', 5, 'F')";
    $rs = $conn->exec($sql);
    echo "<script>alert('You Are Added'); location.href='newCustomerForm.php'</script>";
    exit();
}catch(PDOException $e){
    echo "<script>alert('Add Failed'); location.href='newCustomerForm.php'</script>";
    exit();
}

