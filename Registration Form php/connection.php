<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "divyanshu";

// Create Connection
$conn = mysqli_connect($servername, $username, $password, $db);

// Check Connection
if(!$conn){
    die("Connection Failed :" .mysqli_connect_error());
}
else{
    // echo "Connected Successful";

}
?>
<script>
    alert("Connection Successfull");
</script>



