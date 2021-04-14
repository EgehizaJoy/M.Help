<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "m_help");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$Tips = mysqli_real_escape_string($link, $_REQUEST['Tips']);
$Subject = mysqli_real_escape_string($link, $_REQUEST['Subject']);
$Message = mysqli_real_escape_string($link, $_REQUEST['Message']);
 


{
// Insert Query Put here



// Attempt insert query execution
$sql = "INSERT INTO tips  VALUES ('','$Tips', '$Subject', '$Message')";


header('Location: index.html');
}


if(mysqli_query($link, $sql)){
    echo "Records added successfully.";


} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>