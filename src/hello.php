<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Form</title>
</head>
<body>
  <div class="container">
    <div class="contents">
      <form action="create.php" method="post">

        <h1>Form Tambah Data</h1>

        <!-- nim -->

        <input type="text" name="nim" id="nim" placeholder="Nim">
        <br><br>

        <!-- nama -->

        <input type="text" name="name" id="name" placeholder="Name">
        <br><br>

        <!-- birth date -->

        <input type="date" name="birth_date" id="birth_date" placeholder="Birth Date">
        <br><br>

        <!-- faculty -->

        <select name="id_faculty" id="id_faculty">
          <option value="">Choose faculty</option>
          <option value="FTI">Fakultas Teknologi Informasi</option>
          <option value="FT">Fakultas Teknik</option>
        </select>
        <br><br>

        <!-- major -->

        <select name="id_major" id="id_major">
          <option value="">Choose major</option>
          <option value="TI">Teknik Informatika</option>
          <option value="SI">Sistem Informasi</option>
          <option value="SK">Sistem Komputer</option>
          <option value="TK">Teknik Kimia</option>
          <option value="TF">Teknik Fisika</option>
          <option value="TS">Teknik Sipil</option>
        </select>
        <br><br>

        <!-- phone -->

        <input type="text" name="phone" id="phone" placeholder="Phone" maxlength="16">
        <br><br>

        <!-- email -->
        <input type="email" name="email" id="email" placeholder="Email">
        <br><br>

        <!-- regist periode -->

        <select name="regist" id="regist">
          <option value="">Register Periode</option>
          <option value="2019">2019</option>
          <option value="2020">2020</option>
          <option value="2021">2021</option>
          <option value="2022">2022</option>
        </select>
        <br><br>

        <!-- semester -->

        <select name="semester" id="semester">
          <option value="">Semester</option>
          <option value="gasal">Gasal</option>
          <option value="genap">Genap</option>
        </select>
        <br><br>

        <button>Daftar</button> 
      </form>
    </div>
  </div>
</body>
</html>