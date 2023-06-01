<?php
  include 'read.php';
  // include 'validate.php';
  session_start();

  if (!isset($_SESSION['username'])) {
    header("Location: signin.php");
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="style.css">
  <title>Welcome <?php echo $_SESSION['username'];?> 👋</title>
</head>
<body>
  <div class="container">
    <div class="table">
      <table>
        <tr>
          <td align="center" width="30">No</td>
          <td align="center" width="70">Nim</td>
          <td align="center" width="170">Name</td>
          <td align="center" width="170">Faculty</td>
          <td align="center" width="170">Major</td>
          <td align="center" width="110">Phone</td>
          <td align="center" width="100">Semester</td>
          <td align="center" width="100">Action</td>
        </tr>

        <?php
          foreach ($result as $value) {
        ?>
        <tr>
          <td width="30"><?php echo "$i.";?></td>
          <td width="70" align="center"><?php echo $value['nim'];?></td>
          <td width="170"><?php echo $value['nama'];?></td>
          <td width="170"><?php echo $value['nm_faculty'];?></td>
          <td width="170"><?php echo $value['nm_major'];?></td>
          <td width="110" align="center"><?php echo $value['phone'];?></td>
          <td width="100" align="center"><?php echo $value['semester'];?></td>
          <td width="100">
            <div class="action">
              <a href="detail.php?nim=<?php echo $value['nim'];?>" style="color: green;"><i class="fa-solid fa-eye"></i></a>
              <a href="form_update.php?nim=<?php echo $value['nim'];?>" style="color: yellow;"><i class="fa-solid fa-pen"></i></a>
              <a href="delete.php?nim=<?php echo $value['nim'];?>" style="color: red;"><i class="fa-solid fa-circle-xmark"></i></a>
            </div>
          </td>
        </tr>
        <?php
          $i++;    
          }
        ?>
      </table>
      <div class="btn">
        <a href="hello.php">Tambah data</a>
        <a href="logout.php">Log Out</a>
      </div>
    </div>
  </div>
</body>
</html>