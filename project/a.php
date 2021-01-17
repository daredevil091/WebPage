<?php
$servername="localhost";
$username="root";
$password="";
$dbname="code";

$conn= new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
    die("connection failed");
}
$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];

$sql= "INSERT INTO signup (name,email,password) VALUES('$name','$email','$password')";
if($conn->query($sql)== TRUE)
{
    ?>
    <script>
        alert('values have been added successfully');
</script>
    <?php
}
else{
    ?> 
    <script>
    alert('values not entered');
    </script>
    <?php

}
    
?>
