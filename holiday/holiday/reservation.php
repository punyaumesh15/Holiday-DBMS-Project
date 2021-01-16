<html>
<body bgcolor="white">
<?php
$dbh=mysql_connect('localhost','root','') or die(mysql_error());
mysql_select_db('holiday tours') or die(mysql_error());
$rd=$_REQUEST['rd'];
$vno=$_REQUEST['vno'];
$hd=$_REQUEST['hd'];
$pd=$_REQUEST['pd'];
$cd=$_REQUEST['cd'];
$noh=$_REQUEST['noh'];
$query="INSERT INTO reservation VALUES('$rd','$vno','$hd','$pd','$cd','$noh')";
$result=mysql_query($query) or die(mysql_error());
echo "data inserted successfully!!!";
$var=mysql_query("SELECT * FROM reservation");
echo "<table border size=1>";
echo "<tr><th>r_id</th> <th>v_no</th> <th>h_id</th> <th>p_id</th> <th>c_id</th><th>no_of_heads</th> </tr>";
while($arr=mysql_fetch_row($var))
{
echo "<tr> <td>$arr[0]</td> <td>$arr[1]</td> <td>$arr[2]</td> <td>$arr[3]</td> <td>$arr[4]</td> <td>$arr[5]</td></tr>";
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
<h3><a href="generatevochure.php">generate vochure</a><br>
<a href="customer.html">return</a></h3>
</body>
</html>


