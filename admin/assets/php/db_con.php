<?php
$conn=mysqli_connect("localhost", "root", "", "hozom");
if(mysqli_connect_errno())
{
echo "Connection Fail".mysqli_connect_error();
}
?>