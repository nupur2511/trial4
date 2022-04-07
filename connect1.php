<?php
$crime = $_POST['crime'];
$name = $_POST['name'];
$phone = $_POST['phone'];
$landmark= $_POST['landmark'];
$servername="localhost";
$username="user";
$pswd="SKOJb_1Xu2[v-[73";
$db="testproject";
// Database connection
$conn = new mysqli($servername,$username,$pswd,$db);
if($conn->connect_error){
	echo "$conn->connect_error";
	die("Connection Failed : ".$conn->connect_error);
} 
else {
		$stmt = $conn->prepare("insert into help(name, phone, crime, landmark) values(?, ?, ?, ?)");
		$stmt->bind_param("siss", $name, $phone, $crime, $landmark);
		$stmt->execute();
		include 'helprecv.php';
		//echo "Registration successful.";
		//$_SESSION["email"] = $email;
		$stmt->close();
		$conn->close();
		//$link = "login.php"; // Link goes here!
		//echo '<a href="'.$link.'">Login</a>';
		//echo "login to continue";
		//header("Location: index.php");
	}
?>