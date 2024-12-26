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
    $Title = $_POST["title"];
    $blog = $_POST["blog"];
    // $destination = $_POST["destination"];
    // $departure_date = $_POST["departure-date"];
    // $return_date = $_POST["return-date"];

    //prepare and execute the database insertion
    $sql = "INSERT INTO add_blog(Title, blog)
     VALUES ('$Title','$blog')";

     if($conn->query($sql) == TRUE){
        echo "Blog added Successfully";
     }else{
        echo "Error: " .$sql . "<br>" .$conn->error; 
     }
}
$conn->close();
?>