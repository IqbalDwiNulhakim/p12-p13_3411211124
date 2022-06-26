<?php 
require 'functions.php';

$id = $_GET['id'];


$m = query("SELECT * FROM mahasiswa WHERE id = $id");


if(isset($_POST['ubah'])){
  if(ubah($_POST) > 0)
  {
    echo "<script>
            alert ('data berhasil diubah!');
            document.location.href = 'index.php';
          </script>";
  }
  else
  {
    echo "data gagal diubah!";
  }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ubah Data Mahasiswa</title>
</head>
<body>
  <h3>Form Ubah Data Mahasiswa</h3>

  <form action="" method="POST">
    <input type="hidden" name="id" value="<?= $m['id']; ?>">
    <ul>
      <li>
        <label>
        Nama :
        <input type="text" name="nama" autofocus required value="<?= $m['nama']; ?>">
        </label>
     </li>
     <li>
      <label>
        NIM :
        <input type="text" name="nim" required value="<?= $m['nim']; ?>">
      </label>
     </li>
     <li>
      <label>
        Email :
        <input type="text" name="email" required value="<?= $m['Email']; ?>">
      </label>
     </li>
     <li>
      <label>
        Jurusan :
        <input type="text" name="jurusan" required value="<?= $m['jurusan']; ?>">
      </label>
     </li>
     <li>
      <label>
        Gambar :
        <input type="text" name="gambar" required value="<?= $m['gambar']; ?>">
      </label>
     </li>
     <li>
      <button type="submit" name="Ubah">Ubah Data!</button>
     </li>
    </ul>
  </form>
</body>
</html>