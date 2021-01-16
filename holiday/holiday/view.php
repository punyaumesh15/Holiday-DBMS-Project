<html>
<head><title>update</title></head>
<body>
<?php


$conn=mysql_connect("localhost","root","");
if(!$conn)
{
 die('could not connect');
}
$sql="select * from package";
mysql_select_db('holiday tours');
$res=mysql_query($sql,$conn);
echo "<table border size=1>";
echo "<tr><th>p_id</th><th>p_name</th><th>price</th><th>places</th><th>rating</th><th>departuredate</th><th>arrivaldate</th></tr>";
if(!$res)
{
  die('could not get data');
}
while($row=mysql_fetch_array($res,MYSQL_ASSOC))
{
  echo "<tr>
	<td>{$row['p_id']}</td>
	<td>{$row['p_name']}</td>
	<td>{$row['price']}</td>
	<td>{$row['places']}</td>
	<td>{$row['rating']}</td>
	<td>{$row['departuredate']}</td>
	<td>{$row['arrivaldate']}</td>
	</tr>\n";
}
echo "</table>";
echo "fetched data successfully!!\n";
echo '<br>';
mysql_close($conn);
?>
<h3><a href="package.html">return </a><br></h3>
</body>
</html>