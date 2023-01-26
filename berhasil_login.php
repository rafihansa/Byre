<?php 
 
session_start();
 
if (!isset($_SESSION['username'])) {
    header("Location: login-sukses.html");
}
 
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    

    <meta http-equiv="refresh" content="3; url=">
    <link rel="icon" href="images/logo.png" type="image/gif" />

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Welcome The Byre Project</title>
</head>
<body>
    <div class="container-logout">
        <form action="" method="POST" class="login-email">
         
            <?php echo "<h1>Selamat Datang, " . $_SESSION['username'] ."!". "</h1>"; ?>
            <script>
            alert("Login Sukses!! Anda akan diarahkan ke halaman berikutnya dalam 3 detik.");
            setTimeout(function(){
            window.location.href = "login-sukses.php";
             }, 3000);
            </script>
            <div class="input-group">
            <a href="logout.php" class="btn">Logout</a>
            </div>
        </form>
    </div>
</body>
</html>