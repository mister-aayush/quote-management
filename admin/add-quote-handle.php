<?php 


$new_quote = $_POST['new_quote'];
$author_name = $_POST['auther_name'];

include 'dbconn.php';

$query = "INSERT INTO quote (new_quote, auther_name)
VALUES (?, ?)";

$mysql_stmt =  mysqli_prepare($conn,  $query);
mysqli_stmt_bind_param($mysql_stmt,'ss', $new_quote, $author_name);
mysqli_stmt_execute($mysql_stmt);
$mysql_result=  mysqli_stmt_get_result($mysql_stmt);


header("Location: dashboard.php?path=add-quote");

?>