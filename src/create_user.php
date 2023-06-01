<?php
session_start();
  include 'config.php';

  // body request

  $username = $_POST['username'];
  $password = $_POST['password'];

  // encrypt or hash using bcrypt

  $hashPassword = password_hash($password, PASSWORD_DEFAULT);

  // query

  $sql = "INSERT INTO user VALUES ('$username', '$hashPassword')";

  try {
    $conn -> exec($sql);
    echo "<script>alert('Create new user success'); window.location = 'result.php'</script>";
  } catch (PDOException $e) {
    //throw error;
    echo "error : " . $e -> getMessage();
  }

  // close the connection

  $conn = null;
?>