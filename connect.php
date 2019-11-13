<?php


$username = filter_input(INPUT_POST, username);
$password = filter_input(INPUT_POST, password);

if (empty($username)) {

	if (empty($password)) {
		$host = "localhost";
		$dbusername = "root";;
		$dbpassword = "";
		$dbname = "seddydb";


		$conn = new mysqli($host,  $dbusername, $dbpassword, $dbname);

		if (mysqli_connect_error()){
			die('Connect Error('. mysqli_connect_errno() . ')'
				. mysqli_connect_error());

		}
	else{
		$sql ="INSERT INTO logintbl(username, password)
		values ('$username, '$password');
		if ($conn->query($sql)){
		echo "Log in Successful";
		}
		else{
			echo "Error:". $sql ."<br>. $conn->error;
		}
		;
	}
	}

	else{
	com_message_pump("")
		die();
	}
	}
	else{
		echo "Usename should not be empty
		die();
	}			
	
	$conn->close()

}

?>