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
            <li class="navv"><a href="default.asp">Home</a></li>
            <li class="navv"><a href="news.asp">News</a></li>
            <li class="navv"><a href="contact.asp">Contact</a></li>
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

        <br><br><br><br><br>

        <h2>Sign up for my newsletter!</h2>


        <form action="/action_page.php">
        <label for="name">Name:</label><br>
            <input type="text" id="name" name="name"><br>
            <label for="email">Email:</label><br>
            <input type="text" id="email" name="email"><br>
            <label for="pass">Password:</label><br>
            <input type="text" id="pass" name="pass"><br><br>
            <input type="submit" value="Submit">
        </form>
        
        <br><br><br><br>
        
    </main>

    <footer>

    </footer>


</body>





</html>