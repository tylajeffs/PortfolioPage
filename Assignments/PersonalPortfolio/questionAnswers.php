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
            <li class="navv"><a href="allUsers.php">All Users</a></li>
            <li class="navv"><a href="signUp.html">Sign Up</a></li>
        </ul>
    
    </nav>

    <br><br>


    <main>

        <h1>Assignment Questions</h1>
        <br><br><br>

        <h2>Question 1:</h2>
        <p>Often times, users don't fill out the form completely correct, for example they might mistype their password/confirmation. What would you do to A) figure out that the information is not correct before inserting it into the database, and B) when it isn't correct would would you have to do to get the user to fix it? More specifically, how will you create a form that preserves the information they typed in and print out the errors?</p>
        
        <h4>Answer:</h4>
        <p>A: You would need to check if the passwords are the same (if you are asking them to confirm their password) and you would also want to double check their email. The best way is to have them type it twice.</p>
        <p>B: You need to have the form not delete their information and have them retype it. An error message is also necessary to tell them exactly what they did wrong. Specifically, you would need to use if statements (or case) and then use variables as well.</p>
        <br><br>

        <h2>Question 2:</h2>
        <p>How would you create PHP pages to edit the user's account (change name, email, or password)? How would you populate the form with the current information from the database? How would you keep track of what user account you are changing?</p>
        
        <h4>Answer:</h4>
        <p>You would create a new php page and pass in the id of the user who is logged in, then do an UPDATE through SQL to your database. To populate the form with their current information you would send a GET request to the database to get their information (use SQL) and then display it using PHP and HTML. To keep track of what user account you are changing you just have them log in and then set it so they only have access to their account, or you display which user is going to be edited before they send the request. </p>
        <br><br>

        <h2>Question 3:</h2>
        <p>What tools do you have to be able to remember if a user has logged in? What is the difference between cookies and sessions.</p>
        
        <h4>Answer:</h4>
        <p>You can use cookies, but it is not reccommended because it can easilly be changed and someone could pretend to be an admin and change things drastically. A session is more secure because it encrypts it, so users can't change it and pretend to be someone else. </p>
        <br><br>

        <h2>Question 4:</h2>
        <p>How did the videos log someone in?</p>
        
        <h4>Answer:</h4>
        <p>They had them fill out a form with username and password, and then sent a request to the database to see if the information matches anything in there. If the information matches, it gives a success message and stores their id in a session, otherwise there is an error  and they have to try again. </p>
        <br><br>
 
    </main>

    <footer>

    </footer>


</body>





</html>