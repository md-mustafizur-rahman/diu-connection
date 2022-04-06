<?php
include 'menu.php';

?>
<?php
if (isset($_POST['postbotton'])) {
    $postform = $_POST['post'];
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
    <link rel="stylesheet" href="css/manu.css" />


    <title>Diu Connection</title>

</head>

<body>
    <section class="total">

        <div class="leftgap">

        </div>





        <div class="content">
            <div class="innercontent">
                <div class="innercontenttop">
                    <form action="index.php" method="POST">
                        <div class="innercontentheader">
                            <div class="profileimg">
                                <img style="width: 60%;" src="https://cdn-icons.flaticon.com/png/512/3001/premium/3001764.png?token=exp=1649247995~hmac=44f305bc8b776b6c98fdb63aaa24e471" alt="">
                            </div>
                            <div class="postsendarea">
                                <input placeholder="Create a new Qustions" class="postform" type="text" name="post" value="">


                                <button name="postbotton" name="postsubmit" class="postbtn">
                                    <i id="sendicon" class="fa-solid fa-paper-plane"></i>
                                </button>
                            </div>

                        </div>
                    </form>
                </div>

                <div class="postcontent" name="postcontent">
                    <div class="postcontentinner">
                        <div class="postcontentheader">
                            <img class="postcontentheaderimg" src="https://cdn-icons-png.flaticon.com/512/2922/2922506.png" alt="">
                            <h2 class="postcontentheaderusername">MD. Mustafizur Rahman </h2>
                        </div>
                        <div class="qustioncontent">
                            <p><?php echo $postform ?></p>
                        </div>
                        <div class="answerarea">
                            <!-- This Botton will submit the answer. -->

                            <button class="answerbtn" name="answerbtn">ANSWER</button>

                            <!-- This Botton will view other people answew. -->

                            <button class="answerbtn" name="viewbtn">VIEW</button>
                        </div>
                    </div>

                </div>
                <div class="postcontent" name="postcontent">
                    <div class="postcontentinner">
                        <div class="postcontentheader">
                            <img class="postcontentheaderimg" src="https://cdn-icons-png.flaticon.com/512/2922/2922506.png" alt="">
                            <h2 class="postcontentheaderusername">MD. Mustafizur Rahman </h2>
                        </div>
                        <div class="qustioncontent">
                            <p><?php echo $postform ?></p>
                        </div>
                        <div class="answerarea">
                            <!-- This Botton will submit the answer. -->

                            <button class="answerbtn" name="answerbtn">ANSWER</button>

                            <!-- This Botton will view other people answew. -->

                            <button class="answerbtn" name="viewbtn">VIEW</button>
                        </div>
                    </div>

                </div>
                <div class="postcontent" name="postcontent">
                    <div class="postcontentinner">
                        <div class="postcontentheader">
                            <img class="postcontentheaderimg" src="https://cdn-icons-png.flaticon.com/512/2922/2922506.png" alt="">
                            <h2 class="postcontentheaderusername">MD. Mustafizur Rahman </h2>
                        </div>
                        <div class="qustioncontent">
                            <p><?php echo $postform ?></p>
                        </div>
                        <div class="answerarea">
                            <!-- This Botton will submit the answer. -->

                            <button class="answerbtn" name="answerbtn">ANSWER</button>

                            <!-- This Botton will view other people answew. -->

                            <button class="answerbtn" name="viewbtn">VIEW</button>
                        </div>
                    </div>

                </div>











            </div>


        </div>





        <div class="rightgap">

        </div>


    </section>
</body>

</html>