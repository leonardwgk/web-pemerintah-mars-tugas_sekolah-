<?php
// cek tombol submit sudah ditekan / belum
if (isset($_POST["submit"])) {
    if ($_POST["uname"] == "admin" && $_POST["psw"] == "admin") {
        header("location: admin.php");
        exit;
    } else {
        $error = true;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Login</title>
</head>

<body>
    <div class="container" style="padding: 20px; height: 300px;">
        <h1>Login Admin</h1>
        <?php if (isset($error)) : ?>
            <p style="color: red">Username / Password salah!</p>
        <?php endif ?>
        <form action="" method="post">
            <label for="nama">Username: </label>
            <input type="text" name="uname" id="nama" placeholder="Masukkan Username">
            <label for="pw">Password: </label>
            <input type="password" name="psw" id="pw" placeholder="Masukkan Password"><br>
            <input class="btn" name="submit" type="submit" value="Login">
        </form>
    </div>
</body>

</html>