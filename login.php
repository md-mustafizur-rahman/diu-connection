<?php
include 'db_connect.php';
include 'checker.php';
?>
<?php
$invalidusername = "";

if (isset($_POST['login'])) {
    
    $username = checker($_POST['username']);
    $password = checker($_POST['password']);
    $register_check_quary_username = "SELECT * FROM user WHERE username='$username' AND newpassword ='$password'";

    $username_send = $con->query($register_check_quary_username);

    if ($username_send->num_rows > 0) {
        $invalidusername = "";
        header('Location:main.php');
    } else {
        $invalidusername = "username/password invalid";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login1.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Poppins:wght@300&display=swap" rel="stylesheet">
    <title>login</title>
</head>

<body>
    <section class="total">
        <div class="innertotal">
            <div class="ourtext">
                <h1 class="ourtitle">
                    DIU CONNECTION
                </h1>
                <p>DIU CONNECTION helps you connect and share <br> with the diu family in your life.</p>
            </div>

            <div class="content">

                <form class="contentinner" action="login.php" method="POST">
                    <h1 class="title">Login</h1>
                    <input placeholder="username" class="inputform" type="text" name="username" id="">
                    <input placeholder="password" class="inputform" type="password" name="password" name="" id="">
                    <p style="color: red;
    font-size: 0.8rem; text-shadow:none" id="invaliderror"><?php
                                                            echo $invalidusername;
                                                            ?></p>
                    <input class="loginbutton" type="submit" name="login" value="Login" id="">
                    <a href="reg.php"> If you have any account <b>Singup</b></a>
                </form>

            </div>
        </div>


    </section>
</body>

</html>