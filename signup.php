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
    $Fullname = $_POST["fullname"];
    $Phone_no = $_POST["phone"];
    $E_mail = $_POST["email"];
    $Passwd = $_POST["password"];
    // $return_date = $_POST["return-date"];

    //prepare and execute the database insertion
    $sql = "INSERT INTO signup(Fullname, Phone_no, E_mail, Passwd)
     VALUES ('$Fullname','$Phone_no', '$E_mail', '$Passwd')";

     if($conn->query($sql) == TRUE){
        echo "signup Successfully";
     }else{
        echo "Error: " .$sql . "<br>" .$conn->error; 
     }
}
$conn->close();
?>