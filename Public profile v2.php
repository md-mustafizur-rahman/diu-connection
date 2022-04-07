<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Public profile</title>
    <link rel="stylesheet" href="style v1.css" />
  </head>
  <body>
  <?php
// define variables and set to empty values
$nameErr = $public_emailErr = $urlErr = "";
$name = $public_email = $url = $bio = $twitter_username = $linkedIn_username = $facebook_username = $department = $location = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["public_email"])) {
    $public_emailErr = "Email is required";
  } else {
    $public_email = test_input($_POST["public_email"]);
    // check if e-mail address is well-formed
    if (!filter_var($public_email, FILTER_VALIDATE_EMAIL)) {
      $public_emailErr = "Invalid email format";
    }
  }
    
  if (empty($_POST["url"])) {
    $url = "";
  } else {
    $url = test_input($_POST["url"]);
    // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$url)) {
      $urlErr = "Invalid URL";
    }
  }

  if (empty($_POST["bio"])) {
    $bio = "";
  } else {
    $bio = test_input($_POST["bio"]);
  }

  if (empty($_POST["twitter_username"])) {
    $twitter_username = "";
  } else {
    $twitter_username = test_input($_POST["twitter_username"]);
  }

  if (empty($_POST["linkedIn_username"])) {
    $linkedIn_username = "";
  } else {
    $linkedIn_username = test_input($_POST["linkedIn_username"]);
  }

  if (empty($_POST["facebook_username"])) {
    $facebook_username = "";
  } else {
    $facebook_username = test_input($_POST["facebook_username"]);
  }

  if (empty($_POST["department"])) {
    $department = "";
  } else {
    $department = test_input($_POST["department"]);
  }

  if (empty($_POST["location"])) {
    $location = "";
  } else {
    $location = test_input($_POST["location"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

    <div class="main">
      <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <h1>Public profile</h1>
        <br /><br />
        <div class="single-form">
          <label>Name</label>
          <br />
          <input
            type="text"
            name="name"
            value="<?php echo $name;?>"
            placeholder="Enter your name"
          />
          <span class="error">* <?php echo $nameErr;?></span>
          <br /><br />
        </div>
        <div class="single-form">
          <label>Public email</label> <br />
          <input
            type="text"
            name="public_email"
            value="<?php echo $public_email;?>"
            placeholder="Enter your Public email"
          />
          <span class="error">* <?php echo $public_emailErr;?></span>
          <br /><br />
        </div>
        <div class="single-form">
          <label>URL</label> <br />
          <input type="text" name="url" value="<?php echo $url;?>" placeholder="Enter your url" />
          <span class="error"><?php echo $urlErr;?></span>
          <br /><br />
        </div>
        <div class="single-form">
          <label>Bio</label>
          <br />
          <textarea
            name="bio"
            style="height: 200px"
            placeholder="Enter your bio"
          >
          <?php echo $bio;?>
        </textarea>
          <br /><br />
        </div>
        <div class="single-form">
          <label>Twitter username </label><br />
          <input
            type="text"
            name="twitter_username"
            value="<?php echo $twitter_username;?>"
            placeholder="Twitter username"
          />
          <br /><br />
        </div>
        <div class="single-form">
          <label>LinkedIn username</label>
          <br />
          <input
            type="text"
            name="linkedIn_username"
            value="<?php echo $linkedIn_username;?>"
            placeholder="LinkedIn username"
          />
          <br /><br />
        </div>
        <div class="single-form">
          <label>Facebook username</label> <br />
          <input
            type="text"
            name="facebook_username"
            value="<?php echo $facebook_username;?>"
            placeholder="Facebook username"
          />
          <br /><br />
        </div>
        <div class="single-form">
          <label>Department</label> <br />
          <input
            type="text"
            name="department"
            value="<?php echo $department;?>"
            placeholder="Enter your department"
          />
          <br /><br />
        </div>
        <div class="single-form">
          <label>Location</label> <br />
          <input
            type="text"
            name="location"
            value="<?php echo $location;?>"
            placeholder="Enter your location"
          />
          <br /><br />
        </div>
        <div class="single-form">
          <label>Profile picture</label> <br />
          <input type="file" name="fileToUpload" />
          <br />
          <input type="submit" name="submit" value="Upload Image" />
          <br /><br />
        </div>
        <div class="single-form">
          <input type="submit" name="submit" value="Submit" />
        </div>
      </form>
    </div>

<?php
echo "<h2>Public profile Update Informatin:</h2>";
echo $name;
echo "<br>";
echo $public_email;
echo "<br>";
echo $url;
echo "<br>";
echo $bio;
echo "<br>";
echo $twitter_username;
echo "<br>";
echo $linkedIn_username;
echo "<br>";
echo $facebook_username;
echo "<br>";
echo $department;
echo "<br>";
echo $location;
?>
<!-- $name = $public_email = $url = $bio = $twitter_username = $linkedIn_username = $facebook_username = $department = $location = ""; -->
  </body>
</html>
