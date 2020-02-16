<?php
	
	// If the reservebutton is pressed
	if(isset($_POST['reservebutton'])){
		require 'dbh.inc.php';	//connect to database

		$dateOfReservation = $_POST['date'];
		$timeOfReservation = $_POST['time'];
		$numOfAdult = $_POST['adult'];
		$numOfChild = $_POST['child'];
		$fullName = $_POST['name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$city = $_POST['city'];
		$remarks = $_POST['remarks'];
		
		if (empty($dateOfReservation) || empty($timeOfReservation) || empty($numOfAdult) || empty($numOfChild) 
			|| empty($fullName) || empty($email) || empty($phone) || empty($city)){
			if (empty($_POST['date'])) $_SESSION['dateClass'] = "has-error"; 
			if (empty($_POST['time'])) $_SESSION['timeClass'] = "has-error"; 
			
			if (empty($_POST['name'])){
				$_SESSION['nameErr'] = "Your name is required";
				$_SESSION['nameClass'] = "has-error";
			}
			if (empty($_POST['email'])){
				$_SESSION['emailErr'] = "Your email is required";
				$_SESSION['emailClass'] = "has-error";
			}
			if (empty($_POST['phone'])){
				$_SESSION['phoneErr'] = "Your phone number is required";
				$_SESSION['phoneClass'] = "has-error";
			}
			if (empty($_POST['city'])) {
				$_SESSION['cityErr'] = "Your city of residence is required";
				$_SESSION['cityClass'] = "has-error";
			}
			
			header("Location: home.php#section-tableReservation");
			exit();
		}	
		else{
				$sql = "INSERT INTO reservation (date_of_reservation, time_of_reservation, num_of_adult, num_of_child, full_name, email, phone, city, special_remarks) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
				$stmt = mysqli_stmt_init($conn);
				if (mysqli_stmt_prepare($stmt, $sql)){
					//string = s, i = integer
					mysqli_stmt_bind_param($stmt, "ssiisssss", $dateOfReservation, $timeOfReservation, $numOfAdult, $numOfChild, $fullName, $email, $phone, $city, $remarks);
                    mysqli_stmt_execute($stmt);
					header("Location: home.php?reservation=success");
					exit();
				}else {
					$errorMessage = "Error entering data:".mysqli_error($link)."<br>";
					header("Location: home.php?sql_error");
					exit();
				}	
		}
		mysqli_close($conn);		
	}  
	else if(isset($_POST['cancelbutton'])){
		$_SESSION['dateClass'] = ""; 
		$_SESSION['timeClass'] = "";
		$_SESSION['nameErr'] = "";
		$_SESSION['phoneErr'] = "";
		$_SESSION['emailErr'] = "";
		$_SESSION['cityErr'] = "";
	}
?>