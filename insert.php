<?php

$con = mysqli_connect('tj5iv8piornf713y.cbetxkdyhwsb.us-east-1.rds.amazonaws.com','aqmljqsu6fto79sb','edpzs8pvzxz9nh2e');

if(!$con)
{
    echo'Not Connected To Server';
}

if(!mysqli_select_db($con,'c4luno1bkgzed0ou'))
{
    echo'Database Not Selected';
}

$Name = $_POST['username'];
$Email = $_POST['email'];

$sql = "INSERT INTO person (Name,Email) VALUES ('$Name','$Email')";

if(!mysqli_query($con,$sql))
{
    echo'Not Inserted';
}

else
{
    header("Location: senaraiPesakit.php");
}

// header("refresh:2; url=senaraiPesakit.html");

?>
