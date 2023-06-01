<?php
  // database server setup

  $host = 'localhost';
  $user = 'root';
  $pwd = '';
  $dbName = 'mahasiswa';

  try {

    $conn = new PDO("mysql:host=$host; dbname=$dbName", $user, $pwd);

    // response if connect to database success
  
    // echo "connect success";
    
  } catch (PDOException $e) {
    //throw error if database not connect;

    echo "Failed to connect database : " . $e -> getMessage();
  }

?>