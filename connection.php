<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "m_help");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$Title = mysqli_real_escape_string($link, $_REQUEST['Title']);
$Subject = mysqli_real_escape_string($link, $_REQUEST['Subject']);
$Story = mysqli_real_escape_string($link, $_REQUEST['Story']);
 


 {
// Insert Query Put here



// Attempt insert query execution
$sql = "INSERT INTO survivor_story  VALUES ('','$Title', '$Subject', '$Story')";


header('Location: index.php');
}


if(mysqli_query($link, $sql)){
    echo "Records added successfully.";


} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>


