<?php
require('connect.php');

if(isset($_GET['id'])){
    $deleteid=$_GET['id'];
    }

//mysql_query("DELETE FROM comment WHERE id='$deleteid']'");
mysqli_query(mysqli_connect("localhost","root","","comment"), "DELETE FROM comment WHERE id='$deleteid'");

header("Location: success.php");
?>
