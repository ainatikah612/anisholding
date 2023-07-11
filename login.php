<?php  
include 'config.php'; 

if (isset($_POST['submit'])) {
    $username = $_POST['username']; 
    $pasword = $_POST['pasword']; 

    $sql = "INSERT INTO loginn (username, pasword) 
    VALUES ('$username','$pasword')"; 

    $result = mysqli_query($conn, $sql); 
    if ($result) { 
    $_SESSION['username'] = $username; 

    if ($result== TRUE) {
        echo "<script>alert('LOGIN BERJAYA');
        window.location='index.php'</script>"; 
        }else{
        echo "<script>alert('LOGIN GAGAL!'); 
        window.location='login.php'</script>";
        }}}
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Login</title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    * {
      font-family: Arial, Helvetica, sans-serif;

    }

    body {
      height: 450px;
      background-image: linear-gradient(pink, white);
    }

    h2 {
      font-size: 30px;
      margin-top: 200px;
    }

    input {
      font-size: medium;
    }

    button {
      border: 1px solid black;
      padding: 10px 25px;
      cursor: pointer;
      color: black;
      border-radius: 16px;
      font-size: 14px;
      margin-top: 20px;
      background: none;
      font-weight: bold;
    }

    button:hover {
      background: lightgray;
    }

    input {
      border-radius: 8px;
    }
  </style>
</head>

<body>

  <center>
    <header>

      <form method="POST">
        <h2>LOGIN</h2>
        <input class="" type="text" id="username" name="username" placeholder="Username"> <br><br>
        <input class="" type="password" id="password" name="pasword" placeholder="Password"> <br><br>

        <button type="submit" name="submit">Login</button>
      </form>
    </header>
  </center>

</body>

</html>
