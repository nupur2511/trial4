<?php
    include "result.php";
	$place = $_POST['place'];
	$felony = $_POST['felony'];
    //$police=$_POST['police'];
    //$hospital = $_POST['hospital'];
	//$ambulance = $_POST['ambulance'];
    //$suggestion=$_POST['suggestion'];
    //$local = $_POST['local_helpline'];
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
        $sql="SELECT police,hospital,ambulance,suggestion,local_helpline FROM help_data where place='".$place."' AND felony='".$felony."' ";
    
        $result = mysqli_query($conn, $sql);
        
        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
                /*echo "<table border='5' margin-top='35px'>";
                    echo "<tr style='color:white'>";
                        echo "<td>police</td>";
                        echo "<td>hospital</td>";
                        echo "<td>ambulance</td>";
                        echo "<td>suggestion</td>";
                        echo "<td>local helpline no.</td>";
                    echo "</tr>";
                    echo "<tr style='color:white'>";
                        echo "<td>'".$row['police']."'</td>";
                        echo "<td>'".$row['hospital']."'</td>";
                        echo "<td>'".$row['ambulance']."'</td>";
                        echo "<td>'".$row['suggestion']."'</td>";
                        echo "<td>'".$row['local_helpline']."'</td>";
                    echo "</tr>";
                echo "</table>";*/
                echo "<table border='5' class='center' border-style='dotted' style='margin-top:-350px; width:500px'>";
                    echo "<tr style='color:white'>";
                        echo "<td>police</td>";
                        echo "<td>'".$row['police']."'</td>";
                    echo "</tr>";
                    echo "<tr style='color:white' width='500'>";
                        echo "<td>hospital</td>";
                        echo "<td>'".$row['hospital']."'</td>";
                    echo "</tr>";
                    echo "<tr style='color:white'>";
                        echo "<td>ambulance</td>";
                        echo "<td>'".$row['ambulance']."'</td>";
                    echo "</tr>";
                    echo "<tr style='color:white'>";
                        echo "<td>suggestion</td>";
                        echo "<td>'".$row['suggestion']."'</td>";
                    echo "</tr>";
                    echo "</tr>";
                    echo "<tr style='color:white'>";
                        echo "<td>local helpline no.</td>";
                        echo "<td>'".$row['local_helpline']."'</td>";
                    echo "</tr>";
                echo "</table>";
                //echo "Police: '" . $row['police']. "' <br>";
                //echo "Hospital: '" . $row['hospital']. "' <br>";
                //echo "Ambulance: '" . $row['ambulance']. "' <br>";
                //echo "Suggestion: '" . $row['suggestion']. "' <br>";
                //echo "Local Helpline No.: '" . $row['local_helpline']. "' <br>";
                //header("Location: help.php");
            }
          } else {
            echo "error";
          }
          
          mysqli_close($conn);
		
	}
?>