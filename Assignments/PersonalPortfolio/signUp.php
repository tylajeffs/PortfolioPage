<?php 

    function connectDB() {
        $db = mysqli_connect("localhost", "username", "password", "user", "tyladatabase");
        return $db;
    }

    $db = connectDB();
?>


<?php

    $valid_post = true;
    $error_string = "";

 if($_SERVER["REQUEST_METHOD"] == "POST") {
    
    if($_POST["password"] != $_POST["pass-confirmation"]) {

        $valid_post = false;
        $error_string = "Passwords don't match <br>";

    }
    if(strlen($_POST["name"]) < 3) {

        $valid_post = false;
        $error_string = "Name is too short! <br>";
        $name_error = true;

    }

    if(!$valid_post) {
        $name = $_POST["name"];
        $email = $_POST["email"];
    }

 } else {
    $valid_post = false;
 }

?>


<head>
    <title>Tyla Jeffs Portfolio</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="portfolio.css">
</head>

<nav>
    <ul id="navbar">
        <li class="navv"><a href="portfolio.php">Home</a></li>
        <li class="navv"><a href="questionAnswers.php">Assignment Questions</a></li>
        <li class="navv"><a href="profile.php">My Profile</a></li>
        <li class="navv"><a href="allUsers.php">All Users</a></li>
        <li class="navv"><a href="signUp.php">Sign Up</a></li>
    </ul>

</nav>

<br><br><br><br><br>

<?php
    if($valid_post) { ?>

        <h2>Thanks for joining!</h2>
<?php
    } else {
?>


<h1>Sign up for my newsletter!</h1>

<?php
    if($error_string) { ?>

    <div> 
        <?php echo $error_string ?>
    </div>

<?php
    }
?>


<form action="signUp.php" method="post">
    <label for="name" value="<?php echo $name?>">Name:</label><br>
    <input type="text" id="name" name="name"><br>
    <label for="email" value="<?php echo $email?>">Email:</label><br>
    <input type="text" id="email" name="email"><br>
    <label for="pass">Password:</label><br>
    <input type="password" id="pass" name="pass"><br>
    <label for="pass">Confirm Password:</label><br>
    <input type="password" id="pass-confirmation" name="pass-confirmation"><br><br>
    <input type="submit" value="Sign Up">
</form>

<?php } ?>

<br><br><br><br>