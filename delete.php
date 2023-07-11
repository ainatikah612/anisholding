<?php 
include "config.php"; 
if (isset($_GET['id'])) {

    $id = $_GET['id'];
    $sql = "DELETE FROM `pekerja` WHERE `id`='$id'";

     $result = $conn->query($sql);

     if ($result == TRUE) {
        echo "<script>alert('Data Berjaya Delete.');
        window.location='index.php'</script>"; 
    }else{
        echo "Error:" . $sql . "<br>" . $conn->error;
    }
} 
?>
