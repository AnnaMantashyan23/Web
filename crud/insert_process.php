<?php
$conn=mysqli_connect ("localhost","root","","test_crud");
if(isset($_POST['name']) && !empty($_POST['name'])){
    $name=$_POST['name'];
   mysqli_query($conn,"INSERT INTO categories (name) VALUES ('$name')");

}