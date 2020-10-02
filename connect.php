<?php


//connection to MYsql  server
$connect = mysqli_connect('localhost','root',"",'kashish');

if(mysqli_connect_errno($connect))
{
    echo 'failed to connect !!';
}
?>