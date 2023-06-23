<?php
	if(!empty($_POST)){
		$customername = $_POST['customername'];
		$location = $_POST['location'];
		$adults = $_POST['adults'];
		$childs = $_POST['childs'];
		$checkin = $_POST['checkin'];
		$checkout = $_POST['checkout'];
		
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "hotelbooking";
		$conn = new mysqli($servername, $username, $password, $dbname);
		if ($conn->connect_error) {
		  die("Connection failed: " . $conn->connect_error);
		}
		
		
		$hoteldetails = array (
			  array("Hotel Sri Pranams Royal Grand (Balusumoodi) - Rs 1739.00 per day",1739),
			  array("Hotel Susheel's Nest In (Narasayya Aagraharam) - Rs 1658.00 per day",1658),
			  array("RAM Residency (DNR Road) - Rs 1674.00 per day",1674),
			  array("SRI Pranams International Hotel (P P Road) - Rs 1800.00 per day",1800),
			  array("Ananda Inn (J P Road) - Rs 2000.00 per day",2000),
			  array("Falcons Nest Hotel Falcons (Undi Road) - Rs 1700.00 per day",1700)
			);

		$hotelName = $hoteldetails[$location-1][0];
		$hotelPrice = $hoteldetails[$location-1][1];
		$totalroomforadults = ceil($adults / 2);
		$totalAmount = $hotelPrice*$totalroomforadults;
		
		$totalroomforchildren = ceil($childs / 2);
		$remainingroomforchild = $totalroomforchildren - $totalroomforadults;
		if($remainingroomforchild > 0){
			$totalAmount = $totalAmount + ($hotelPrice*$remainingroomforchild);
		}
		if($checkin > $checkout){
			header("Location: index.html");
			die();
		}
		$date1=date_create($checkin);
		$date2=date_create($checkout);
		$totaldays=date_diff($date1,$date2)->format("%a");
		$totalAmount = $totalAmount * $totaldays;
		$sql = 'INSERT INTO registration (customername, location, adults, child, checkin, checkout, totalAmount) VALUES ("'.$customername.'", "'.$hotelName.'", "'.$adults.'", "'.$childs.'", "'.$checkin.'", "'.$checkout.'", "'.$totalAmount.'")';
		
		if ($conn->query($sql) === TRUE) {
		  $last_id = $conn->insert_id;
		  $conn->close();
		  header("Location: paynow.php?id=".$last_id);
		  die();
		} else {
		  $conn->close();
		  header("Location: index.html");
		  die();
		}
	}else{
		header("Location: index.html");
		die();
	}
?>