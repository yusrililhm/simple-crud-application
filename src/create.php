<?php 
  include 'config.php';

  session_start();

  if (!isset($_SESSION['username'])) {
    header("Location: signin.php");
  }

  $username = $_SESSION['username'];

  // body request

  $nim = $_POST['nim'];
  $nama = $_POST['name'];
  $birth_date = $_POST['birth_date'];
  $id_faculty = $_POST['id_faculty'];
  $id_major = $_POST['id_major'];
  $phone = $_POST['phone'];
  $email= $_POST['email'];
  $regist = $_POST['regist'];
  $semester = $_POST['semester'];

  // query

  $sql = "INSERT INTO tb_mahasiswa VALUES ('$nim', '$nama', '$birth_date', '$id_faculty', '$id_major', '$phone', '$email', '$regist', '$semester', now(), '$username', now(), '$username')";

  try {
    $conn -> exec($sql);
    echo "<script>alert('Create new mahasiswa success'); window.location = 'result.php'</script>";
  } catch (PDOException $e) {
    //throw error

    echo "error : " . $e -> getMessage();
  }
  $conn = null;
?>