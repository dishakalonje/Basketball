<?php
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$full=$fname." ".$lname;
$email=$_POST['email'];
$mno=$_POST['mno'];
$id=$_POST['id'];

$con=mysqli_connect('localhost','root','','basketball');
if($con===false)
{
	die("ERROR: could not connect".mysql_connect_error());
}
$v="SELECT * FROM registration where email='$email'";
$d=mysqli_query($con,$v);
$count=mysqli_num_rows($d);
if($count>0)
{
	echo "<script> alert('email already exists')</script>";
echo "<script>window.location='http://localhost:8080/website/reg.html'</script>";
}
else
{
$q="INSERT INTO registration(full,email,mno,id) VALUES ('$full','$email','$mno','$id')";
$ck=mysqli_query($con,$q);
if($ck)
{
echo "<script> alert('Record inserted successfully')</script>";
echo "<script>window.location='http://localhost:8080/website/index.html'</script>";
}
else
{
echo "<script> alert('Record not inserted')</script>";
echo "<script>window.location='http://localhost:8080/website/reg.html'</script>";
}
}
mysqli_close($con);
?>