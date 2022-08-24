<?php

echo $_POST['id'];
echo $_POST['ownername'];
$userid=trim($_POST['id']);
$password=trim($_POST['password']);
$name=trim($_POST['name']);
$phone=trim($_POST['phone']);
$email=trim($_POST['email']);

$address=trim($_POST['address']);
$ownername=trim($_POST['ownername']);

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

$sql = "INSERT INTO login (id, password, name, phone, email, address, ownername)
VALUES ('$userid','$password','$name','$phone','$email','$address','$ownername')";
$conn->query($sql);
//mysqli_query($sql);
$conn->close();

?>
        <script>
   $("#submitForm").click(function() {
      alert("The Form has been Submitted.");
   });
</script>
<?php
header("Location: index.php");


?>