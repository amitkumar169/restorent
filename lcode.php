<?php
session_start();
$uid=$_POST["userid"];
$password=$_POST["password"];
$cmd="select userid,password from login where userid='$uid' and password='$password'";
$conn=mysqli_connect("localhost","root","","resdb");
if($conn==true)
{
 $x=mysqli_query($conn,$cmd);
 if(mysqli_num_rows($x))
 {
	$row=mysqli_fetch_assoc($x);
    $email=$row["userid"];
 	$p=$row["password"];
	if($email==$uid && $p==$password)
	{
		//set value into  session
		$_SESSION["aid"]=$email;
		echo "<script>alert('Welcome to Admin Zone');window.location.href='../admin/dashboard.php'</script>";
	}
	else
	{
	echo "<script>alert('Invalid UserId or Password');window.location.href='../login.php'</script>";	
	}
 }
 else
 {
	echo "<script>alert('Invalid UserId or Password');;window.location.href='../login.php'</script>"; 
	
 }

}

?>
