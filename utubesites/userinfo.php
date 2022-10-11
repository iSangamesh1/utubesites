<?php

$con = mysqli_connect('localhost','root');
// to establish the connection

if($con){
    echo "Hare Krishna connection successful";
}else{
    echo "Not Connected";
}

// to check wheter connection is done properly

mysqli_select_db($con, 'utubesitesuserdata');
// connection with database

$user = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$comments = $_POST['comments'];

$query = " insert into userinfodata(user, email, mobile, comment) 
values ('$user','$email','$mobile','$comments') ";

// mysql query is written

mysqli_query($con, $query); 
// we passed 2 parameters first one is to establish connection and second one is to send the query

// echo '$query';
// i added the above one to check the query it was timepass

header('location:index.php');
// the importance of this function is that it redirects you to same page  
// try commenting it


?>