<?php
include 'db_connect.php';
include 'checker.php'
?>

<?php
//error ehceker veriable
$invalidemail = "";
$invalidpassword = "";
$invalidusername = "";


if (isset($_POST['singup'])) {

    $fullname = checker($_POST['fullname']);
    $username = checker($_POST['username']);
    $email = checker($_POST['email']);
    $department = checker($_POST['department']);
    $newpassword = checker($_POST['newpassword']);
    $confirmpassword = checker($_POST['confirmpassword']);
    $gender = checker($_POST['gender']);




    // if check 0 than start mysql work
    $checkresult;
    // if check 0 than start inserting 
    $insertchecker_for_email = 1;
    $insertchecker_for_username = 1;

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $checkresult = 0;
        $invalidemail = "";
    } else {
        $invalidemail = "Invalid email address";
        $checkresult = 1;
    }

    // Check newpassword and confirm password are same;

    if ($newpassword == $confirmpassword) {
        if (strlen($newpassword) >= 8) {
            $invalidpassword = "";
            $checkresult = 0;
        } else {
            $invalidpassword = "Use 8 characters or more for your password";
            $checkresult = 1;
        }
    } else {
        $invalidpassword = "Those passwords didn’t match. Try again.";
        $checkresult = 1;
    }

    // Check username is unique
    if ($checkresult == 0) {
        $register_check_quary_username = "SELECT * FROM user WHERE username='$username'";

        $username_send = $con->query($register_check_quary_username);

        if ($username_send->num_rows > 0) {
            $invalidusername = "username already used";
            $checkresult = 0;
            $insertchecker_for_username = 1;
        } else {
            $invalidusername = "";
            $checkresult = 1;
            $insertchecker_for_username = 0;
        }

        // check email address is unique

        $register_check_quary_email = "SELECT * FROM user WHERE Email='$email'";

        $email_send = $con->query($register_check_quary_email);

        if ($email_send->num_rows > 0) {
            $invalidemail = "email already used";
            $checkresult = 0;
            $insertchecker_for_email = 1;
        } else {
            $invalidemail = "";
            $checkresult = 1;
            $insertchecker_for_email = 0;
        }
    }
    if ($insertchecker_for_username == 0 && $insertchecker_for_email == 0) {
        $user_table_inset_quary = "INSERT INTO `user`( `fullname`, `username`, `Email`, `Department`, `newpassword`, `confirmpassword`) VALUES ('$fullname','$username','$email','$department','$newpassword','$confirmpassword')";
        $insert_quary = $con->query($user_table_inset_quary);
        if ($insert_quary) {
            header('Location:login.php');
        } else {
            echo "error";
        }
        $con->close();
    }
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reg.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Poppins:wght@300&display=swap" rel="stylesheet">
    <title>reg</title>
</head>

<body>
    <section class="total">

        <div class="innertotal">
            <div class="content">
                <div class="contentinner">
                    <div class="headertext">
                        <h1>DIU CONNECTION</h1>
                    </div>
                    <form class="contentinner" action="reg.php" method="POST">
                        <div class="rowsection">
                            <div class="columnsection">
                                <label for="">FullName</label>
                                <input required name="fullname" placeholder="Enter Your name" class="inputform" type="text">

                            </div>

                            <div class="columnsection">
                                <label for="">usename</label>
                                <input required name="username" placeholder="Enter Your username" class="inputform" type="text">
                                <p class="invaliderror"><?php
                                                        echo $invalidusername;
                                                        ?></p>
                            </div>

                        </div>


                        <div class="rowsection">
                            <div class="columnsection">
                                <label for="">Email</label>
                                <input required name="email" placeholder="Enter Your Email" class="inputform" type="text">
                                <p class="invaliderror"><?php
                                                        echo $invalidemail;
                                                        ?></p>
                            </div>

                            <div class="columnsection">
                                <label for="">Department</label>
                                <select required name="department" id="">
                                    <option value="SWE">SWE</option>
                                    <option value="CSE">CSE</option>
                                    <option value="MIS">MIS</option>
                                    <option value="BBA">BBA</option>
                                </select>
                            </div>

                        </div>


                        <div class="rowsection">
                            <div class="columnsection">
                                <label for="">Password</label>
                                <input required name="newpassword" placeholder="Enter Your password" class="inputform" type="text">
                            </div>




                            <div class="columnsection">
                                <label for="">Confirm Password</label>
                                <input required name="confirmpassword" placeholder="Confirm Your password" class="inputform" type="text">
                                <p class="invaliderror"><?php
                                                        echo $invalidpassword;
                                                        ?></p>
                            </div>
                        </div>


                        <div class="rowsection">
                            <div class="columnsectionredio">
                                <label for="">Gender</label>
                                <div class="redio">
                                    <div>
                                        Male <input required type="radio" value="Male" name="gender" id="">

                                    </div>
                                    <div>
                                        Female <input type="radio" name="gender" value="Female" id="">

                                    </div>
                                    <div>
                                        Others <input type="radio" name="gender" value="Others" id="">

                                    </div>
                                </div>
                            </div>
                        </div>

                        <input class="singup" name="singup" type="submit" value="Singup">
                        <a href="login.php"> If you have any account <b>Login</b></a>
                </div>
                </form>
            </div>

        </div>
    </section>
    <script>
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href)
        }
    </script>
</body>

</html>