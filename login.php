<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "blogwebsite";
$conn = new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
    die("Connection Failed:" .$conn->connect_error);

}
//Handle form submission
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $Phone_no = $_POST["phone"];
    $Password = $_POST["passwd"];
    // $E_mail = $_POST["email"];
    // $Passwd = $_POST["password"];
    // $return_date = $_POST["return-date"];

    //prepare and execute the database insertion
    $sql = "INSERT INTO login(Phone_no, Password)
     VALUES ('$Phone_no','$Password')";

     if($conn->query($sql) == TRUE){
        echo "login Successfully";
     }else{
        echo "Error: " .$sql . "<br>" .$conn->error; 
     }
}
$conn->close();
?>