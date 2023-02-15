<?php 
	require "condb.php";

	$rowCount = 0;
	$uname = $_POST["email"];

	if ($uname == "") {
		echo "Vui lòng không để trống";
	}
	else {
		$qr = "SELECT * FROM users WHERE email = '$uname'";
		if ($result = mysqli_query($con, $qr)){
			$rowCount = mysqli_num_rows($result);
		}

		if ($rowCount > 0) {
			echo "Username đã tồn tại";
		}
		else {
			echo "Bạn có thể dùng Username này để đăng ký";
		}
	}
	
 ?>