<html>
<body bgcolor="yellow">
<?php
$dbh=mysql_connect('localhost','root','') or die(mysql_error());
mysql_select_db('holiday tours') or die(mysql_error());
$td=$_REQUEST['td'];
$tn=$_REQUEST['tn'];
$ad=$_REQUEST['ad'];
$ph=$_REQUEST['ph'];
$ed=$_REQUEST['ed'];
$query="INSERT INTO travelagency VALUES('$td','$tn','$ad','$ph','$ed')";
$result=mysql_query($query) or die(mysql_error());
echo "data inserted successfully!!!";
$var=mysql_query("SELECT * FROM travelagency");
echo "<table border size=1>";
echo "<tr><th>t_id</th> <th>t_name</th> <th>address</th> <th>phone</th> <th>email_id</th></tr>";
while($arr=mysql_fetch_row($var))
{
echo "<tr> <td>$arr[0]</td> <td>$arr[1]</td> <td>$arr[2]</td> <td>$arr[3]</td> <td>$arr[4]</td> </tr>";
}
echo "</table>";
$db_host="localhost";
$db_name="holiday tours";
$db_user="root";
$db_pass="";
$con= mysql_connect("$db_host","$db_user","$db_pass")or die("could not connect");
mysql_select_db('holiday tours') or die(mysql_error());
mysql_close($con); 
 
?>
<a href="travelagency.html">return</a>
</body>
</html>


