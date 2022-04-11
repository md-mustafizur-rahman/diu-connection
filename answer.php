<?php
include 'menu.php';
include 'db_connect.php';

?> <?php

    if (isset($_POST['postbotton'])) {
        $postform = $_POST['post'];
        $username1 = 'sabbirpegon';
        $name1 = 'MD. MUSTAFIZU RAHAMN';
        $queryinsert2 = "INSERT INTO `data1`( `username`, `name`, `info1`) VALUES ('$username1','$name1','$postform')";
        if ($con->query($queryinsert2) === TRUE) {
            echo "Work successfully";
        } else {
            echo "Error: " . $con . "<br>" . $con->error;
        }
    }

    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/f7bd1b1106.js" crossorigin="anonymous"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css" />


    <title>Diu Connection</title>

</head>

<body>
    <section class="total">

        <div class="leftgap">

        </div>





        <div class="content">
            <div class="innercontent">
                <div class="innercontenttop">
                   
                        
                            <div class="postsendarea">
                               <h1 style="color: white; font-size:2rem;">Answer</h1>
                            </div>

                        </div>
                    
                </div>


                <?php
                $selectquery = "SELECT * FROM `questiondata`";
                $query = mysqli_query($con, $selectquery);

                //   $num = mysqli_num_rows($query);
                //   echo $num;

                while ($res = mysqli_fetch_array($query)) {
                    //   echo $res['username'];

                ?>


                    <div class="postcontent" name="postcontent">
                        <div class="postcontentinner">
                            <div class="postcontentheader">
                                <img class="postcontentheaderimg" src="https://cdn-icons-png.flaticon.com/512/2922/2922506.png" alt="">
                                <h2 class="postcontentheaderusername"><?php echo $res['username'] ?></h2>
                            </div>
                            <div class="qustioncontent">
                                <p><?php echo $res['question'] ?></p>
                            </div>
                            <div class="answerarea">
                                <!-- This Botton will submit the answer. -->
                                <a class="answerbtn" href="answer.php"> <button  class="answerbtn1" name="answerbtn">ANSWER</button></a>


                                <!-- This Botton will view other people answew. -->
                                <a class="answerbtn" href="view.php">
                                <button class="answerbtn1" name="viewbtn">VIEW</button>
                                </a>
                            </div>
                        </div>

                    </div>

                <?php


                }
                $con->close(); ?>






            </div>


        </div>





        <div class="rightgap">

        </div>


    </section>
    <script>
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href)
        }
    </script>
</body>