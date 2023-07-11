<?php 
include "config.php";
$sql = "SELECT * FROM pekerja";
$result = $conn->query($sql);
?>

<html>

<head>
    <title>View Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <style>
        body {
            height: 500px;
            background: pink;
        }

        table,
        thead,
        th,
        td {
            border: white solid 3px;
            margin-top: 30px;
        }

        th {
            text-align: center;
        }

        thead {
            padding: 60px;
        }

        table {
            width: 80%;
            padding: 50px;
            text-align: center;
        }

        .update {
            border: 2px solid white;
            padding: 5px;
            color: white;
            text-decoration: none;
        }

        .delete {
            border: 2px solid white;
            padding: 5px;
            color: white;
            text-decoration: none;
        }

        .update:hover {
            background: lightblue;
            color: #333;
        }

        .delete:hover {
            background: red;
            color: #333;
        }

        .add {
            border: 2px solid white;
            padding: 5px;
            color: white;
            text-decoration: none;
            border-radius: 8px;
            position: relative;
            top: 10px;
        }
    </style>
</head>

<body>
    <header>

        <div class="container">
            <a class="add" href="add.php">Add</a>
            <a class="add" href="login.php">Login</a>
            <h2>DATA PEKERJA</h2>
            <table class="table">

                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nama Pekerja</th>
                        <th>No Kp</th>
                        <th>No Hp</th>
                        <th>Jantina</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
        ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['nama_pekerja']; ?></td>
                        <td><?php echo $row['no_kp']; ?></td>
                        <td><?php echo $row['no_hp']; ?></td>
                        <td><?php echo $row['jantina']; ?></td>
                        <td>
                            <a class="update" href="update.php?id=<?php echo $row['id']; ?>">Edit</a>&nbsp;
                            <a class="delete" href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>&nbsp;

                        </td>
                    </tr>
                    <?php       }
            }
        ?>
                </tbody>
            </table>
        </div>
    </header>
</body>

</html>