<?php 

function connectDB() {
        $db = mysqli_connect("localhost", "id19530899_tylajeffs", "Greengeeb21!", "id19530899_mydatabase");
        return $db;
    }

    $con = connectDB();
    $sql = "SELECT * FROM users;";
    $result = mysqli_query($con, $sql);

    if(!$result) {
        print("Error Description: " . mysqli_error($db));
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
        <li class="navv"><a href="signUp.html">Sign Up</a></li>
    </ul>

</nav>


<br><br><br><h1>Here are all the Users!</h1><br><br><br><br>

<?php

    while($row = mysqli_fetch_assoc($result)) { ?>

    <div>
        Name: <?php print $row['name'] ?> <br>

        <a href="profile.php?id=<?php print $row['id']?>">View Profile</a>

        <br><br>
    </div>

    <?php } ?>

