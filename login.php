<?php
	$email = $_POST['email'];
	$password = $_POST['password'];
	$servername="localhost";
	$username="user";
	$pswd="SKOJb_1Xu2[v-[73";
	$db="testproject";
	// Database connection
	$conn = new mysqli($servername,$username,$pswd,$db);
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ".$conn->connect_error);
	} else {
        $sql = "SELECT email, password FROM registration where email='".$email."' and password='".$password."' ";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
                $_SESSION["email"] = $email;
                header("Location: help.php");
              //echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
            }
          } else {
            echo "not a valid user...try again, or sign up to continue.";
          }
          
          mysqli_close($conn);
		
	}
?>