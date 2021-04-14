


<?php



/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "m_help");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 

 if(isset($_POST['acess_tips']))
{
// Attempt select query execution
$sql = "SELECT * FROM tips";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>tip</th>";
                echo "<th>subject</th>";
                echo "<th>message</th>";
                
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['tip'] . "</td>";
                echo "<td>" . $row['subject'] . "</td>";
                echo "<td>" . $row['message'] . "</td>";
           
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);


}
?>







 





































