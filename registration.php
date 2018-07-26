
<?php
include("dbconnect.php");

$error = '';

$email =  mysqli_real_escape_string($conn,trim($_POST['email']));
$fname =  mysqli_real_escape_string($conn,$_POST['fname']);
$color =  mysqli_real_escape_string($conn,$_POST['color']);
$mobno =  mysqli_real_escape_string($conn,$_POST['mobno']);
$password =  mysqli_real_escape_string($conn,$_POST['password']);

$smpt=$conn->prepare("insert into user (email,fname,color,mobno,password) value(?,?,?,?,?)");
$smpt->bind_param("sssss", $email,$fname,$color,$mobno,$password );

$smpt->execute();
	
$smpt->close();
$conn->close();
?>
<script type="text/javascript">
alert("Registration Sucessfull....Please Login to continue");
location="login.html";
</script>
