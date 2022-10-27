<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>daftar</title>
    <link rel="stylesheet" href="daftarakunstyle.css" />
    
</head>

<body>
<form action="" method="POST">
        <div class="dftr">
            <h3>Buat Akun</h3> 
            <input autofocus="autofocus" placeholder="Nama Depan"  type="text" id="ndepan" name="fname" >
            <br>
           
            <input type="text" id="nbelakang" name="lname"  placeholder =" masukkan nama belakang">
            <br>
            <input type="email" id="emaildaftar" name="emaildaftarr" placeholder =" masukkan email">
            <br>
           
            <input type="password" id="pwddaftar" name="pwd"  placeholder =" masukkan password">
            <br>
            <!-- <input type="submit" name="sign-up"> -->
            <input  id ="masuk"  type="submit" name="commit" value="masuk" data-disable-with="Please wait...">
        </div>
    </form>
    <?php
    if (isset($_POST['commit'])) {
        $email = $_POST['emaildaftarr'];
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $pwd = $_POST['pwd'];
    }
    ?>

</body>

</html>