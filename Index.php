<?php
include 'config/database.php';
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>ContactForm</title>
</head>
<body>
    <h1>Contact Form</h1>
    <hr>
    <div>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name"><br>

        <label for="email">Email:</label><br>
        <input type="email" name="email" id="email"><br>

        <label for="issue">Issue:</label><br>
        <select name="issue" id="issue">
         <option value="query">Query</option>
         <option value="feedback">Feedback</option>
         <option value="complaint">Complaint</option>
         <option value="other">Other</option>
        </select><br>

        <label for="comment">Comment:</label><br>
        <textarea name="comment" id="comment" cols="30" rows="10"></textarea><br>
        
        <input type="submit" value="submit">
    </form>
</div>
</body>
</html>
