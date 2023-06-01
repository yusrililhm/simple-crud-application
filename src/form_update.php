<!-- display data based on nim -->



<?php 

  include 'config.php';

  $nim = $_GET['nim'];
  $sql = "SELECT nim, nama, birth_date, id_faculty, id_major, phone, email, regist, semester FROM tb_mahasiswa WHERE nim = '$nim'";  

  try {
    $row = $conn -> prepare($sql);
    $row -> execute();

    $result = $row -> fetch();
  } catch (PDOException $e) {
    //throw error
    echo "Erro : " . $e -> getMessage();
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
  <title>Form Update</title>
</head>
<body>
  <div class="container">
    <div class="contents">
      <form action="update.php" method="post">

        <h1>Form Update</h1>

        <!-- nim -->

        <input type="text" name="nim" id="nim" value="<?php echo $result['nim'];?>" placeholder="Nim">
        <br><br>

        <!-- nama -->

        <input type="text" name="name" id="name" placeholder="Name" value="<?php echo $result['nama'];?>">
        <br><br>

        <!-- birth date -->

        <input type="date" name="birth_date" id="birth_date" placeholder="Birth Date" value="<?php echo $result['birth_date'];?>">
        <br><br>

        <!-- faculty -->

        <select name="id_faculty" id="id_faculty">
          <option value="FTI">Fakultas Teknologi Informasi</option>
          <option value="FT">Fakultas Teknik</option>
        </select>
        <br><br>

        <!-- major -->

        <select name="id_major" id="id_major">
          <option value="TI">Teknik Informatika</option>
          <option value="SI">Sistem Informasi</option>
          <option value="SK">Sistem Komputer</option>
          <option value="TK">Teknik Kimia</option>
          <option value="TF">Teknik Fisika</option>
          <option value="TS">Teknik Sipil</option>
        </select>
        <br><br>

        <!-- phone -->

        <input type="text" name="phone" id="phone" placeholder="Phone" maxlength="16" value="<?php echo $result['phone'];?>">
        <br><br>

        <!-- email -->
        <input type="email" name="email" id="email" placeholder="Email" value="<?php echo $result['email'];?>">
        <br><br>

        <!-- regist periode -->

        <select name="regist" id="regist">
          <option value="<?php echo $result['regist'];?>"><?php echo $result['regist'];?></option>
          <option value="2019">2019</option>
          <option value="2020">2020</option>
          <option value="2021">2021</option>
          <option value="2022">2022</option>
        </select>
        <br><br>

        <!-- semester -->

        <select name="semester" id="semester">
          <option value="<?php echo $result['semester'];?>"><?php echo $result['semester'];?></option>
          <option value="gasal">Gasal</option>
          <option value="genap">Genap</option>
        </select>
        <br><br>

        <button>Update</button> 
      </form>
    </div>
  </div>
</body>
</html>