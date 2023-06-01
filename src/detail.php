<?php 
  include 'config.php';

  $nim = $_GET['nim'];

  $sql = "SELECT nim, nama, birth_date, faculty.nm_faculty, major.nm_major, phone, email, regist, semester, create_date, create_by, update_at, update_by FROM ((tb_mahasiswa INNER JOIN faculty ON tb_mahasiswa.id_faculty = faculty.id_faculty) INNER JOIN major ON tb_mahasiswa.id_major = major.id_major) WHERE nim = '$nim'";

  try {
    $row = $conn -> prepare($sql);
    $row -> execute();

    $result = $row -> fetch();
  } catch (PDOException $e) {
    //throw error

    echo "Error : " . $e -> getMessage();
  }

  $conn = null;
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Detail <?php echo $_GET['nim'];?></title>
</head>
<body>
  <div class="container">
    <div class="doc">
      <div class="wrap">
        <p>Nim</p>
        <span>:</span>
        <p><?php echo $result['nim']?></p>
      </div>
      <div class="wrap">
        <p>Name</p>
        <span>:</span>
        <p><?php echo $result['nama']?></p>
      </div>
      <div class="wrap">
        <p>Birth Date</p>
        <span>:</span>
        <p><?php echo $result['birth_date']?></p>
      </div>
      <div class="wrap">
        <p>Faculty</p>
        <span>:</span>
        <p><?php echo $result['nm_faculty']?></p>
      </div>
      <div class="wrap">
        <p>Major</p>
        <span>:</span>
        <p><?php echo $result['nm_major']?></p>
      </div>
      <div class="wrap">
        <p>Phone</p>
        <span>:</span>
        <p><?php echo $result['phone']?></p>
      </div>
      <div class="wrap">
        <p>Email</p>
        <span>:</span>
        <p><?php echo $result['email']?></p>
      </div>
      <div class="wrap">
        <p>Regist</p>
        <span>:</span>
        <p><?php echo $result['regist']?></p>
      </div>
      <div class="wrap">
        <p>Semester</p>
        <span>:</span>
        <p><?php echo $result['semester']?></p>
      </div>
      <div class="wrap">
        <p>Create Date</p>
        <span>:</span>
        <p><?php echo $result['create_date']?></p>
      </div>
      <div class="wrap">
        <p>Create By</p>
        <span>:</span>
        <p><?php echo $result['create_by']?></p>
      </div>
      <div class="wrap">
        <p>Update At</p>
        <span>:</span>
        <p><?php echo $result['update_at']?></p>
      </div>
      <div class="wrap">
        <p>Update By</p>
        <span>:</span>
        <p><?php echo $result['update_by']?></p>
      </div>
      <div class="btns">
        <a href="result.php">Back</a>
      </div>
    </div>
  </div>
</body>
</html>