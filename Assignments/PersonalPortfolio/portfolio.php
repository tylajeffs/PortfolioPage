

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tyla Jeffs Portfolio</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="portfolio.css">
</head>

<body>

    <header>



    </header>
    
    <nav>
        <ul id="navbar">
            <li class="navv"><a href="portfolio.php">Home</a></li>
            <li class="navv"><a href="questionAnswers.php">Assignment Questions</a></li>
            <li class="navv"><a href="profile.php">My Profile</a></li>
            <li class="navv"><a href="allUsers.php">All Users</a></li>
            <li class="navv"><a href="signUp.php">Sign Up</a></li>
        </ul>
    
    </nav>

    <br><br>


    <main>

        <div class="waveTextAnimated">
            <span>T</span>
            <span>Y</span>
            <span>L</span>
            <span>A</span>
            <span> </span>

            <span>J</span>
            <span>E</span>
            <span>F</span>
            <span>F</span>
            <span>S</span>
        </div>

        <img id="tylapic" src="images/tylajeffs.jpg" alt="Gorgeous girl holding pink flowers">

        <p>My name is Tyla! I am 20 years old and this is my php page. I love surfing and being outside, and I also really like to code.</p>

        <div id="linkblock">
            <p>Here are some of my favorite websites.</p>

            <ul>
                <li><a href="netflix.com">Netflix</a></li>
                <li><a href="poptropica.com">Poptropica</a></li>
                <li><a href="w3schools.com"></a>W3 Schools</li>
            </ul>

        </div>


        <p>
            <?php
                //variable to hold the string
                $myString = "Hi Class!";
                echo "$myString This is a string";
            ?>
        </p>

        <h1>Interact With Me!</h1>
        <br><br>

        <p>See if you can guess my favorite color! To guess, go up to the address bar and type "?color=(your guess)", then hit enter.</p>
        <br><br>

        <h2>
            <?php
                //get the value from the user of their guess
                echo "You guessed \"".$_GET['color']."\"";
            ?>
        </h2>

        
        
    </main>

    <footer>

    </footer>


</body>





</html>