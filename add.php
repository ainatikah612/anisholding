<?php
include "config.php";

  if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama_pekerja'];
    $nokp = $_POST['no_kp'];
    $nohp = $_POST['no_hp'];
    $jantina = $_POST['jantina'];

    $sql = "INSERT INTO pekerja (id, nama_pekerja, no_kp, no_hp, jantina)
     VALUES ('$id','$nama','$nokp','$nohp','$jantina')";
    $result = $conn->query($sql);


    if ($result == TRUE) {
      echo "<script>alert('Data Berjaya Tambah');
      window.location='index.php'</script>";
    }else{
      echo "Error:". $sql . "<br>". $conn->error;
    }
    $conn->close();
  }
?>

<head>
    <style>
        .info {
            width: 280px;
        }

        .input {
            width: 70px;
            text-align: center;
            margin-bottom: 20px;
            border-radius: 5px;
            border: 2px solid gray;
            height: 25px;
            transition-duration: 0.3s;
            background-color: rgba(0, 0, 0, 0.0);
        }

        .input:hover {
            background-color: plum;
        }
    </style>
</head>
<html>

<body>
    <h2>Add Maklumat</h2>
    <form action="" method="POST">

        <fieldset>
            <legend>Maklumat Pekerja:</legend>
            Id : <br>
            <input class="info" type="text" name="id">
            <br>
            Nama:<br>
            <input class="info" type="text" name="nama_pekerja">
            <br>
            No Kp:<br>
            <input class="info" type="text" name="no_kp">
            <br>
            No Hp:<br>
            <input class="info" type="text" name="no_hp"><br>

            Jantina:<br>
            <input type="radio" name="jantina" value="Lelaki">Lelaki
            <input type="radio" name="jantina" value="Perempuan">Perempuan
            <br><br>

            <input class="input" type="submit" name="submit" value="Add">
        </fieldset>
    </form>
</body>

</html>