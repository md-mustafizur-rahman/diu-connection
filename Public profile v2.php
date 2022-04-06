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
$nameErr = $emailErr =  "";
$name = $email =  "";

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
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
    
  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
    // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
      $websiteErr = "Invalid URL";
    }
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
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
      <form method="" action="">
        <h1>Public profile</h1>
        <br /><br />
        <div class="single-form">
          <label>Name</label>
          <br />
          <input
            type="text"
            name="name"
            value=""
            placeholder="Enter your name"
          />
          <br /><br />
        </div>
        <div class="single-form">
          <label>Public email</label> <br />
          <input
            type="text"
            name="public_email"
            value=""
            placeholder="Enter your Public email"
          />
          <br /><br />
        </div>
        <div class="single-form">
          <label>URL</label> <br />
          <input type="text" name="url" value="" placeholder="Enter your url" />
          <br /><br />
        </div>
        <div class="single-form">
          <label>Bio</label>
          <br />
          <textarea
            name="bio"
            style="height: 200px"
            placeholder="Enter your bio"
          ></textarea>
          <br /><br />
        </div>
        <div class="single-form">
          <label>Twitter username </label><br />
          <input
            type="text"
            name="twitter_username"
            value=""
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
            value=""
            placeholder="LinkedIn username"
          />
          <br /><br />
        </div>
        <div class="single-form">
          <label>Facebook username</label> <br />
          <input
            type="text"
            name="facebook_username"
            value=""
            placeholder="Facebook username"
          />
          <br /><br />
        </div>
        <div class="single-form">
          <label>Department</label> <br />
          <input
            type="text"
            name="department"
            value=""
            placeholder="Enter your department"
          />
          <br /><br />
        </div>
        <div class="single-form">
          <label>Location</label> <br />
          <input
            type="text"
            name="location"
            value=""
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
  </body>
</html>
