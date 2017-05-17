<?php
$id=$_GET["id"];

$con = mysqli_connect('localhost', 'root', '','vote');
if (!$con)
 {
 die('Could not connect: ' . mysqli_error());
 }

$sql="SELECT * FROM candidate WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

echo "<table border='1' cellspacing='0'>
<tr>
<th>Firstname</th>
<th>Lastname</th>
<th>Age</th>
<th>Hometown</th>
<th>Job</th>
</tr>";

while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
 {
 echo "<tr>";
 echo "<td>" . $row['FirstName'] . "</td>";
 echo "<td>" . $row['LastName'] . "</td>";
 echo "<td>" . $row['Age'] . "</td>";
 echo "<td>" . $row['HomeTown'] . "</td>";
 echo "<td>" . $row['Job'] . "</td>";
 echo "</tr>";
 }
echo "</table>";

mysqli_close($con);
?>