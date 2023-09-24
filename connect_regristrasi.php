<?php
$conn = mysqli_connect("localhost", "root", "", "medatabese");
function registrasi($data){
    global $conn;

    $nama = stripcslashes($data["nama"]);
    $email = $data["email"];
    $username = strtolower(stripcslashes($data["username"]));
    $password = mysqli_escape_string($conn, $data["password"]);
    $password2 = mysqli_escape_string($conn, $data["password2"]);

    $result = mysqli_query($conn, "SELECT username FROM users WHERE username = '$username'");
    
    if(empty($nama) && empty($email) && empty($username) && empty($password) && empty($password2)){
        header("Location: register.php?error= Anda tidak mengisi apa apa");
        exit();
    }else if (empty($nama) && empty($email)){
        header("Location: register.php?error= Silahkan isi semuanya");
        exit();
    }else if(empty($nama) && empty($username)){
        header("Location: register.php?error= Silahkan isi semuanya");
        exit();
    }else if (empty($nama) && empty($password)){
        header("Location: register.php?error= Silahkan isi semuanya");
        exit();
    }else if (empty($nama) && empty($password2)){
        header("Location: register.php?error= Silahkan isi semuanya");
        exit();
    }else if(empty($email) && empty($username)){
        header("Location: register.php?error= Silahkan isi semuanya");
        exit();
    }else if (empty($email)&& empty($password)){
        header("Location: register.php?error= Silahkan isi semuanya");
        exit();
    }else if (empty($email)&& empty($password2)){
        header("Location: register.php?error= Silahkan isi semuanya");
        exit();
    }else if ( empty($password) && empty($password2)){
        header("Location: register.php?error= Silahkan isi semuanya");
        exit();
    }else if (empty($username) && empty($password2)){
        header("Location: register.php?error= Silahkan isi semuanya");
        exit();
    }else if (empty($username) && empty($password)) {
        header("Location: register.php?error= Silahkan isi semuanya");
        exit();
    }else if (empty($nama)){
        header("Location: register.php?error= Silahkan isi semuanya");
        exit();
    }else if (empty($email)){
        header("Location: register.php?error= Silahkan isi semuanya");
        exit();
    }else if (empty($username)) {
        header("Location: register.php?error= Silahkan isi semuanya");
        exit();
    } else if (empty($password)) {
        header("Location: register.php?error= Silahkan isi semuanya");
        exit();
    }else if (empty(($password2))){
        header("Location: register.php?error= Silahkan isi semuanya");
        exit();
    }

    if(mysqli_fetch_assoc($result)){
        echo "<script>
        alert('username sudah ada, silahkan ganti username')
        </script>";
        return false;
    }
    
    if($password !== $password2){
        echo "<script>
        alert('Confirm Password tidak sesuai');
        </script>";
        return false;
    }
    $password = password_hash($password, PASSWORD_DEFAULT);
    
   $query = mysqli_query($conn, "INSERT INTO users VALUES('','$nama','$email','$username'
    ,'$password')");
    
   
    return mysqli_affected_rows($conn);
 
}

?>