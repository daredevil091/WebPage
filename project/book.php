<?php  

$servername ="localhost";
$username = "root";
$password = "";
$dbname = "boook";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
	die("connection failed");
}

$name = $_POST["Name"];
$email = $_POST["Email"];
$date = $_POST["Date"];
$time = $_POST["Time"];

$sql = "INSERT INTO signup (name, email, date,time) VALUES ('$name', '$email', '$date','$time')";

if($conn->query($sql) === TRUE){
	?>
	<script>
		alert('Values have been inserted');
	</script>
	<?php
}
else{
	?>
	<script>
		alert('Values did not insert');
	</script>
	<?php
}


?>