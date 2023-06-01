<?php
  include 'config.php';

  $nim = $_GET['nim'];
  $sql = "DELETE FROM tb_mahasiswa WHERE nim = '$nim'";

  try {
    
    // response if delete mahasiswa success
    
    $row = $conn -> prepare($sql);
    $row -> execute();
    
    echo "
    <script>
    if (confirm('Data mahasiswa akan dihapus. Apakah anda yakin?')) {
        alert('Delete mahasiswa success!');
        window.location = 'result.php';
      } else {
        window.location = 'result.php';
      }
    </script>
    ";
  } catch (PDOException $e) {
    //throw error

    echo "error : " . $e -> getMessage();
  }

  $conn = null;
?>