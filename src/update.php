<?php

  include 'config.php';

  // body request

  session_start();

  if (!isset($_SESSION['username'])) {
    header("Location: signin.php");
  }

  $username = $_SESSION['username'];

  $nim = $_POST['nim'];
  $nama = $_POST['name'];
  $birth_date = $_POST['birth_date'];
  $id_faculty = $_POST['id_faculty'];
  $id_major = $_POST['id_major'];
  $phone = $_POST['phone'];
  $email = $_POST['email'];
  $regist = $_POST['regist'];
  $semester = $_POST['semester'];

  // query

  $sql = "UPDATE tb_mahasiswa SET nim = '$nim', nama = '$nama', birth_date = '$birth_date', id_faculty = '$id_faculty', id_major = '$id_major', phone = '$phone', email = '$email', regist = '$regist', semester = '$semester', update_at = now(), update_by = '$username' WHERE nim='$nim'";

  try {
    $conn -> exec($sql);
    echo "<script>alert('Update mahasiswa success'); window.location = 'result.php'</script>";
  } catch (PDOException $e) {
    //throw error
    echo "Error : " . $e -> getMessage();
  }
  $conn = null;
?>