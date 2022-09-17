<?php 

    function connectDB() {
        $db = mysqli_connect("localhost", "id19530899_tylajeffs", "Greengeeb21!", "id19530899_mydatabase");
        return $db;
    }

    $db = connectDB();

    $sql = "INSERT INTO users (name,email,hashed_password) VALUES('"
        .$_POST['name']."',";
        $sql .="'".$_POST['email']."',";
        $sql .="'".sha1($_POST['password'])."');";
        

    $result = mysqli_query($db, $sql);
    if(!$result) {
        print("error description: ". mysqli_error($db));
    }
?>



<?php

    $valid_post = true;
    $error_string = "";

 if($_SERVER["REQUEST_METHOD"] == "POST") {

    $valid_post = true;
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
        <li class="navv"><a href="allUsers.php">All Users</a></li>
        <li class="navv"><a href="signUp.php">Sign Up</a></li>
    </ul>

</nav>

<br><br><br><br>
<h1>Success!</h1>







