<?php 


$new_quote = $_POST['new_quote'];
$author_name = $_POST['auther_name'];
$author_image = $_POST['author_image'];
var_dump($_POST);
var_dump($_FILES);

if(isset($author_image)&& $author_image['error']==0){
    $upload_dir = "uploads/";
}
die;

include 'dbconn.php';

$query = "INSERT INTO quote (new_quote, auther_name)
VALUES (?, ?)";

$mysql_stmt =  mysqli_prepare($conn,  $query);
mysqli_stmt_bind_param($mysql_stmt,'ss', $new_quote, $author_name);
mysqli_stmt_execute($mysql_stmt);
$mysql_result=  mysqli_stmt_get_result($mysql_stmt);


header("Location: dashboard.php?path=add-quote");

?>