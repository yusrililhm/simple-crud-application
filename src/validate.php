<?php

  session_start();

  include 'config.php';

  $username = $_POST['username'];
  $password = $_POST['password'];

  $sql = "SELECT * FROM user WHERE username = :username";

  try {
    $query = $conn -> prepare($sql);
    $query -> bindParam("username", $username);
    $query -> execute();
    $result = $query -> fetch();

    if (!$result) {
      echo "<script>alert('username and password not found'); window.location = 'signin.php'</script>";
    } else {
      if (password_verify($password, $result['password'])) {
        $_SESSION['username'] = $result['username'];
        echo "<script>alert('Welcome Back'); window.location = 'result.php'</script>";
        // header("Location : result.php");
      } else {
        echo "<script>alert('username and password wrong'); window.location = 'signin.php'</script>";
      }
    }

  } catch (PDOException $e) {
    //throw error;

    echo 'error : ' . $e -> getMessage();
  }

  $conn = null;
?>