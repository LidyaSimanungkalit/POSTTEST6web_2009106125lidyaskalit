<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="loginstyle.css" />
    
</head>

<body>
<form action="" method="POST">

        <div class="login">
            <h2>Log-in</h2> 

           
            <input type="email" id="email" name="email" placeholder ="  email">
            <br>
            <input type="password" id="pwd" name="pwd"  placeholder =" kata sandi">
            <br>
            <!-- <input type="submit" name="sign-up"> -->
            <input type="submit" id ="masuk" name="commit" value="masuk" data-disable-with="Please wait...">

            <p>  belum punya akun?</p>
            <a href="daftar.php">DAFTAR sekarang</a>
          
        
        </div>
        
    </form>
    <?php
    if (isset($_POST['commit'])) {
        $email = $_POST['email'];
        $pwd = $_POST['pwd'];
    }
    ?>

</body>

</html> 