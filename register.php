<?php
require 'connect_regristrasi.php';
if ( isset($_POST["register"])){
    if(registrasi($_POST)>0){
        echo "<script> 
        document.location.href = 'login.php';
        </script>";
        $valid = true;
   
    }else{
        header("Location: index.register.php");
        exit();
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            register
        </title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Abel&family=Pragati+Narrow&family=Righteous&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="style/style.css">
    </head>
    <body>
      
        <h1>Create <span>Account</span></h1>
        <?php
        if(isset($_GET['error'])){ ?>
        <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>
        
        <form action="" method="post">
            <ul>
                <label for="nama">Nama Lengkap</label>
                <input type="text" name="nama" id="nama">
                
                <Label for="email">Email</Label>
                <input type="email" name="email" id="email">
                
                <label for="username">Username </label>
                <input type="text" name="username" id="username">
                
                <label for="password">Password </label>
                <input type="password" name="password" id="password">
                
                <label for="password2">Confirm Password </label>
                <input type="password" name="password2" id="password2">
                
                <button type="submit" name="register">REGISTER</button>
            </ul>
                <p id="punya_akun">sudah punya akun ?
                    <a href="login.php">Login disini</a>
                </p>
        </form>
    </body>
</html>