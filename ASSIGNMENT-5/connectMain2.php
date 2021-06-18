<?php
$firstName= $_POST["firstName"];


		
			$host = "localhost";
			$dbusername = "root";
			$dbpassword = "";
			$dbname = "data";
			// Create connection

			$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
			if (mysqli_connect_error())
			{
			die('Connect Error ('. mysqli_connect_errno() .') '
			. mysqli_connect_error());
			}
			else
			{
					$sql = "INSERT INTO workshopdata (firstName,lastName,email,Gender,date2)
					values ('$firstName','$lastName','$email','$Gender','$date2')";
					if ($conn->query($sql)){
					echo "New record is inserted successfully...";

					header('Refresh:3; url=form.html');
			}
			else
			{
					echo "Error: ". $sql ."
					". $conn->error;

			}
			    $conn->close();
			
			}


?>
