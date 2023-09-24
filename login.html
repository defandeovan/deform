<?php
require 'connect_regristrasi.php';
if(isset($_POST["login"])){
    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM users WHERE 
    username = '$username'");

    if(mysqli_num_rows($result) === 1 ){
        $row = mysqli_fetch_assoc($result);
        if(password_verify($password, $row["password"])){
            echo "<script>
            document.location.href = 'index.php';
            </script>";
        }
     
        
    }
    $error = true;
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>
            login
        </title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Abel&family=Pragati+Narrow&family=Righteous&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="style/stylelogin.css">
    </head>
    <body>
       
        <h1>Lo<span>g</span>in</h1>
        <?php
        if(isset($error)){ ?>
        <p class="error">EROR!<span id="eror"> anda belum terdaftar</span></p>
        <?php } ?>
        <?php
        if(isset($valid)){ ?>
        <p class="error">EROR!<span id="eror"> BERHASIL, silahkan login</span></p>
        <?php } ?>
     

        <form action="" method="post">
            <ul>
                <label for="username">Username </label>
                <input type="text" name="username" id="username">
                
                <label for="password">Password </label>
                <input type="password" name="password" id="password">
                
                <button type="submit" name="login">LOGIN</button>
            </ul>

            <p id="punya_akun">belum punya akun ?
                    <a href="register.php">daftar disini</a>
        </form>
    </body>
</html>
