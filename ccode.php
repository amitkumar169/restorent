<?php
require "DBManager.php";
$name=$_POST["name"];
$email=$_POST["email"];
$msg=$_POST["msg"];
$dt=date('d/m/Y');

//echo "Name : $name <be/>Email : $email <br/>Message : $msg<br/>Date : $dt";
$db=new DBManager();
$cmd="insert into contact values('$name','$email','$msg','$dt')";
$x=$db->ExecuteQuery($cmd);
if($x=true)
{
	echo "<script>alert('Thanks for contact as soon as we contact you');window.location.href='../contact.php'</script>";
}
else
{
	echo "<script>alert('Your Request is not completed');window.location.href='../contact.php'</script>";
}
?>