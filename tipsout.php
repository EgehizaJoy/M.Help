



<table>
<tr>
<th>TIP:</th>


</tr>



<?php

 if isset($_POST['acess_tips'])   {
$conn = mysqli_connect("localhost", "root", "", "m_help");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT tip FROM tips";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["tip"]. "</td><td>" 
;
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();


}

?>
</table>



