<?php
  include 'config.php';

  $sql = "SELECT nim, nama, faculty.nm_faculty, major.nm_major, phone, regist, semester FROM ((tb_mahasiswa INNER JOIN faculty ON tb_mahasiswa.id_faculty = faculty.id_faculty) INNER JOIN major ON tb_mahasiswa.id_major = major.id_major) ORDER BY nim";

  try {
    $row = $conn -> prepare($sql);
    $row -> execute();

    $result = $row -> fetchAll();

    $i = 1;
  } catch (PDOException $e) {
    //throw error

    echo "Error : " . $e -> getMessage();
  }

  $conn = null;
?>