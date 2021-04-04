<!DOCTYPE html>
<html lang="en">

<head>
<title>Order Info</title>

<style>
table {
border-collapse: collapse;
width: 100%;
color: black;
font-family: monospace;
font-size: 18px;
text-align: left;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>

</head>

<body>

<table>
<tr>
<th>productcode</th>
<th>quantity</th>
<th>phone</th>
<th>address</th>
</tr>

<?php
$conn = mysqli_connect("localhost", "root", "", "efood");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM  orderr";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["productcode"]. "</td><td>" . $row["quantity"] . "</td><td>"
. $row["phone"]. "</td><td>" . $row["address"]. "</td></tr>";
}
echo "</table>";
} 
else { echo "0 results"; }
$conn->close();
?>

</table>

</body>
</html