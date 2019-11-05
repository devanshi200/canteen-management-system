
<?php
$dbhost = "localhost:3307";
 $dbuser = "root";
 $dbpass = "";
 $dbname = "canteen";
$conn =  mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
$sql = "select SAPid,name from stregister";
$result = $conn-> query($sql);
?>
<html>
	<body>
		<center><table border="1"></center>
			<tr>
				<th>SAP ID</th>
				<th>NAME</td>
			</tr>
	<?php
if($result->num_rows>0){
	while($row = $result-> fetch_assoc()){
		
		echo "<tr><td>".$row['SAPid']."</td><td>".$row["name"]."</td>";
	}
		echo "</table>";
}
		else{
			echo "0 result";
		}
		$conn->close();
		
?>
</table>
</body>
</html>

