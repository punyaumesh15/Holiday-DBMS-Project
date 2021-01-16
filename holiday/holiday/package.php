<html>
<body bgcolor="white">
<?php
$dbh=mysql_connect('localhost','root','') or die(mysql_error());
mysql_select_db('holiday tours') or die(mysql_error());
$pd=$_REQUEST['pd'];
$pn=$_REQUEST['pn'];
$pr=$_REQUEST['pr'];
$pl=$_REQUEST['pl'];
$rt=$_REQUEST['rt'];
$dpr=$_REQUEST['dpr'];
$arvl=$_REQUEST['arvl'];
$query="INSERT INTO package VALUES('$pd','$pn','$pr','$pl','$rt','$dpr','$arvl')";
$result=mysql_query($query) or die(mysql_error());
echo "data inserted successfully!!!";
$var=mysql_query("SELECT * FROM package");
echo "<table border size=1>";
echo "<tr><th>p_id</th> <th>p_name</th> <th>price</th> <th>places</th> <th>rating</th> <th>departurdate</th> <th>arrivaldate</th> </tr>";
while($arr=mysql_fetch_row($var))
{
echo "<tr> <td>$arr[0]</td> <td>$arr[1]</td> <td>$arr[2]</td> <td>$arr[3]</td> <td>$arr[4]</td> <td>$arr[5]</td> <td>$arr[6]</td> </tr>";
}
echo "</table>";
$db_host="localhost";
$db_name="holiday tours";
$db_user="root";
$db_pass="";
$con= mysql_connect("$db_host","$db_user","$db_pass")or die("could not connect");
mysql_select_db('holiday tours') or die(mysql_error());
$pO=mysql_query("call income(@out);");
$rs=mysql_query('SELECT @out');
while($row=mysql_fetch_row($rs))
{
echo 'Income= ',$row[0];
}
mysql_close($con); 
 
?>
<h3><a href="package.html">return</a></h3>
</body>
</html>


