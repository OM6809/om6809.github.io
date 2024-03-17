<?php

$server = "localhost";
$username = "root";
$password = "";
$dbname = "mydata";

$con = mysqli_connect($server,$username,$password,$dbname);

if(!$con)
{
    echo "not connected";
}

// start

$Name = $_POST['name'];
$Email = $_POST['email'];
$Phone = $_POST['phone'];
$enquiry = $_POST['enquiry'];
$Source = $_POST['source'];
$Newsletter = $_POST['news'];
$Message = $_POST['message'];

$sql = "INSERT INTO `test1`(`Name`, `Email`, `Phone`, `Enquiry`, `Source`, `Newsletter`, `Message`) 
        VALUES ('$Name','$Email','$Phone','$Enquiry','$Source','$Newsletter','$Message')";

$result = mysqli_query($con ,$sql);

if($result)
{
    echo "data submitted";

}
else
{
   echo "error";
}

?>