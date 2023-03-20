<?php

include 'connection.php';

$id = $_GET['id'];

$deletequery = "DELETE FROM `registration form` WHERE id = $id";

$query = mysqli_query($conn, $deletequery);

if($query){
    ?>
    <script>
        alert("Deleted Successfully");
    </script>
    <?php
    header('location:display.php');
}
else{
    ?>
    <script>
        alert("Deletion Failed");
    </script>
    <?php
}
?>




