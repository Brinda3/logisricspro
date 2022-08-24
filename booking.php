<?php

//echo $_POST['id'];
//echo $_POST['ownername'];
$name=trim($_POST['name']);
$email=trim($_POST['email']);
$phone=trim($_POST['phone']);
$pn=trim($_POST['pn']);
$pw=trim($_POST['pw']);

$da=trim($_POST['da']);
$gstnum=trim($_POST['gstnum']);
$iecnum=trim($_POST['iecnum']);

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sih";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO booking (name, email,phone number, product name,product weight,delivery address,gst number,iec number)
VALUES ('$name','$email','$phone','$pn','$pd','$da','$gstnum', '$iecnum' )";
$conn->query($sql);
//mysqli_query($sql);
$conn->close();

?>
        <script>
   
   
      alert("The Form has been Submitted.");
   


</script>
<?php
header("Location: main.php");


?>