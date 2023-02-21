<?php
class DBManager
{
	function ExecuteQuery($command)
{
$conn=mysqli_connect("localhost","root","","resdb");
if($conn==true)
{
	$x=mysqli_query($conn,$command);
	if($x>0)
	{
		return true;
    }
	else
	{
		return false;
	}
}
else
{	
	mysqli_error($conn);
}
    mysqli_close($conn);
}
}
?>