<?php 
  session_start();
  if (!isset($_SESSION['username'])) {
    header("Location: signin.php");
  }
  echo "<script>alert('Logout Success'); window.location = 'signin.php'</script>";
  session_destroy();
?>