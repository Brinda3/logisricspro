<?php
$reg=trim($_POST['uid']);
$name=trim($_POST['name']);
$pwd=trim($_POST['pass']);
$year=trim($_POST['year']);
$roll=trim($_POST['roll']);
$dept=trim($_POST['dept']);
$sec=trim($_POST['sec']);
$email=trim($_POST['email']);


//echo $dob."-".$reg."-".$sec."-".$dept;

$preparedQuery="select count(Regno) from Student where Regno='".$reg."'";
if($reg=="" || $name=="" || $pwd=="" || $roll=="")
{
  setcookie("err","Fill all fields !Click <a class=style19 href=login.php> here </a> to try again.");
 header("Location: error.php");	   

}
else if(!$con=odbc_connect("ques","",""))
{
        echo("dataSource not Available");
        die(odbc_error());
}
else if(!($result=odbc_exec($con, $preparedQuery))){
        echo("select invalid");
        die(odbc_error());
}
else if(odbc_result($result,1)!=0)
{
//regno already exists
  setcookie("err","Register no <u>".$reg."</u>  Already Registered..!Click <a href=login.php> here </a> to try again.");
 header("Location: error.php");	   
}
else
{
	$qry="insert into Student (Regno,RollNo, Name, Dept, Sec,email, password,year) values ('".$reg."','".$roll."', '".$name."', '".$dept."', '".$sec."','".$email."', '".$pwd."','".$year."')";
	odbc_exec($con, $qry);
	//echo '<div class="success">Enquiry Successful Login</div>';
        
        ?>
        <script>
   $("#submitForm").click(function() {
      alert("The Form has been Submitted.");
   });
</script>
<?php

	header("Location: login.php");	   
}

?>