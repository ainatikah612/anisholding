<?php 
include "config.php";

    if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama_pekerja'];
    $nokp = $_POST['no_kp'];
    $nohp = $_POST['no_hp'];
    $jantina = $_POST['jantina'];
    $sql = "UPDATE `pekerja` SET nama_pekerja='$nama',no_kp='$nokp',no_hp='$nohp',jantina='$jantina' WHERE `id`='$id'"; 
        $result = $conn->query($sql); 

        if ($result == TRUE) {
            echo "<script>alert('Data Berjaya Update.');
            window.location='index.php'</script>";
        }else{
            echo "Error:" . $sql . "<br>" . $conn->error;
        }
    } 

if (isset($_GET['id'])) {
    $id = $_GET['id']; 
    $sql = "SELECT * FROM `pekerja` WHERE `id`='$id'";
    $result = $conn->query($sql); 

    if ($result->num_rows > 0) {        
        while ($row = $result->fetch_assoc()) {
            $id = $row['id'];
            $nama = $row['nama_pekerja'];
            $nokp = $row['no_kp'];
            $nohp  = $row['no_hp'];
            $jantina = $row['jantina'];
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
<h2>Kemaskini Pengguna</h2>
<form action="" method="post">
    <fieldset>
        <legend>DATA PENGGUNA :</legend>

        Id : <br>
        <input class="info" type="text" name="id" value="<?php echo $id; ?>">
        <br><br>

        Nama:<br>
        <input class="info" type="text" name="nama_pekerja" value="<?php echo $nama; ?>">

        <br><br>
        No Kp:<br>
        <input class="info" type="text" name="no_kp" value="<?php echo $nokp; ?>">
        <br><br>

        No Hp:<br>
        <input class="info" type="text" name="no_hp" value="<?php echo $nohp; ?>">
        <br><br>

        Jantina:<br>
        <input type="radio" name="jantina" value="Lelaki" <?php if($jantina == 'Lelaki'){ echo "checked";} ?>>Lelaki
        <input type="radio" name="jantina" value="Perempuan"
            <?php if($jantina == 'Perempuan'){ echo "checked";} ?>>Perempuan

        <br><br>

        <input class="input" type="submit" value="Update" name="update">
        <!-- <a class="input" href="index.php">Back</a>
        <input class="input" type="submit" value="Back" > -->

    </fieldset>
</form>
</body>

</html>
<?php
    } else{ 
        header('Location: index.php');
    } 
}
?>