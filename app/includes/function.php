<?php 
function registrasi($data) {
    global $connect;

    $name = $data["nama"]; 
    $username = strtolower(stripslashes($data["username"]));
    $email = $data["email"];
    $password = mysqli_real_escape_string($connect, $data["password"]);
    $password2 = mysqli_real_escape_string($connect, $data["password2"]);

    // cek username udah ada atau belum 
    $result = mysqli_query($connect, "SELECT username FROM user WHERE username = '$username'");

    // jika usernamenya ada dalam database
    if (mysqli_fetch_assoc($result)) {
        echo "<script>
        alert('username terdaftar');
        </script>";
        return false;
    }

    // cek email sudah ada atau belum
    $email_result = mysqli_query($connect, "SELECT email FROM user WHERE email = '$email'");

    if(mysqli_fetch_assoc($email_result)) {
        echo "<script>
        alert('email terdaftar');
        </script>";
        return false;
    }

    // cek konfirmasi password
    if ($password2 != $password) {
        echo "<script>
            alert(' konfrimasi password tidak sesuai!');
        </script>";
        return false;
    }

    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // tambahkan user baru ke database
    mysqli_query($connect, "INSERT INTO user VALUES('', '$name', '$username', '$email', '$password')");

    return mysqli_affected_rows($connect);

}
?>