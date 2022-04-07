<?php
if (empty($_POST['email'])) {
	$errors['email'] = 'email required';
}
else{
	$email = $_POST['email'];
}
//$email = $_POST['email'];
$password = $_POST['password'];
$name = $_POST['name'];
$number = $_POST['number'];
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
	$sql = "SELECT email FROM registration where email='".$email."'";
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) > 0) {
		// output data of each row
		
			echo "email already exists..please login";
			
			//echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
		
	} else {
		//echo "not a valid user...try again, or sign up to continue.";
		
		$stmt = $conn->prepare("insert into registration(name, email, number, password) values(?, ?, ?, ?)");
		$stmt->bind_param("ssis", $name, $email, $number, $password);
		$stmt->execute();
		echo "Registration successful...";
		$_SESSION["email"] = $email;
		$stmt->close();
		$conn->close();
		//$link = "login.php"; // Link goes here!
		//echo '<a href="'.$link.'">Login</a>';
		echo "login to continue";
		header("Location: index.php");
	}
}
?>