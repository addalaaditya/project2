<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Payment Form</title>
    <link rel="stylesheet" href="paymentstyle.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
	<?php
	
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "hotelbooking";
		$conn = new mysqli($servername, $username, $password, $dbname);
		if ($conn->connect_error) {
		  die("Connection failed: " . $conn->connect_error);
		}
		
		$id=$_GET['id'];
		$sql = "SELECT * FROM registration WHERE id=$id";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
		  while($row = $result->fetch_assoc()) {
			$customername = $row["customername"];
			$location = $row["location"];
			$createdDtm = $row["createdDtm"];
			$totalAmount = $row["totalAmount"];
		  }
		}
		$conn->close();
	?>
    <div class="container thankyoupage">
        <h1>Thank you for the Payment.</h1>
        <h1>Payment is successful.</h1>
		<br><br>
        <div class="first-row">
            <div class="owner">
                <h3> Customer Name</h3>
            </div>
            <div class="cvv">
                <h3><?=$customername?></h3>
            </div>
        </div>
        <div class="first-row">
            <div class="owner">
                <h3> Location</h3>
            </div>
            <div class="cvv">
                <h3><?=$location?></h3>
            </div>
        </div>
        <div class="first-row">
            <div class="owner">
                <h3> Registration Date</h3>
            </div>
            <div class="cvv">
                <h3><?=$createdDtm?></h3>
            </div>
        </div>
        <div class="first-row">
            <div class="owner">
                <h3> Total Amount</h3>
            </div>
            <div class="cvv">
                <h3><?=$totalAmount?> INR</h3>
            </div>
        </div>
        <a href="index.html">Home</a>
    </div>
</body>
</html>