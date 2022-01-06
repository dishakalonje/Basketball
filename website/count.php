<html>
<head><title>
	Details </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
  table{
    border_collapse: collapse;
    width: 100%;
    color: black;
    font-family: monospace;
    font-size: 25px;
    text-align: left; 
  }
  th
  {

    background-color: lightgreen;
    color: white;
  }
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: right;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: red;
}

.topnav a.active {
  background-color: #4CAF50;
  color: white;
}
</style>
</head>
<body background="a4.jpg">
<?php


$con=mysqli_connect('localhost','root','','basketball');
if($con===false)
{
	die("ERROR: could not connect".mysql_connect_error());
}
$q="SELECT * FROM regestration";
$ck=mysqli_query($con,$q);
$res=mysqli_num_rows($ck);
if($res>0) 
{
 
    echo "<table>";
    echo "<tr>";
      echo "<th>&nbsp;&nbsp;S NO.</th>";
    echo "<th>&nbsp;&nbsp;FULL NAME</th>";
    echo "<th>&nbsp;&nbsp;EMAIL</th>";
    echo "<th>&nbsp;&nbsp;STUDENT ID</th>";
    echo "<th>&nbsp;&nbsp;MOBILE NO. </th>";
    echo "</tr>";
    for($i=1;$i<=$res;$i++)
    {
        $row=mysqli_fetch_array($ck);
        echo "<tr>";
        echo "<td>&nbsp;&nbsp;".$row['s no.']."</td>";
        echo "<td>&nbsp;&nbsp;".$row['full']."</td>";
        echo "<td>&nbsp;&nbsp;".$row['email']."</td>";
        echo "<td>&nbsp;&nbsp;".$row['id']."</td>";
        echo "<td>&nbsp;&nbsp;".$row['mno']."</td>";
        echo "</tr>";
    }
    echo "</table>";
}
else{
echo "No registration are found in database";
}
mysqli_close($con);
?>
</body>
</html>
