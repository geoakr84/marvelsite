<?php

  $servername = "localhost";
  $username = "id1090096_geoakr84";
  $password = "Dikefalos04";
  $dbname = "id1090096_comics";

  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $comment = $_POST['comment'];
  
  $to='geoakr84@pathfinder.gr';

  $conn = new mysqli($servername, $username, $password, $dbname);

  if ($conn->connect_error){
      die("Connection failed: " .$conn->connect_error);
  }

  $sql= "INSERT INTO Comments (Name, Email, Subject, Comment) VALUES ('$name', '$email', '$subject', '$comment')";
  
  mail($to, $subject,$comment, 'From:'.$email);

  if ($conn->query($sql) === TRUE ){
     echo "Your comments have been sent successfully. I will be in touch with you soon!";
     }
     else
     {
     echo "Error" .$sql. "<br>" .$conn -> error;
     }

     $conn -> close();

?>