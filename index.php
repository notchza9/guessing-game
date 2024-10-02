<html lang="en">
    <head>
        <title>Number guessing game</title>
    </head>
    <body>
        <h1>Guess the number game</h1>

        <form method="post">
            <label for="guess">Enter your guess (between 1 and 100):</label>
            <input type="number" id="guess" name="guess" min="1" max="100" step="1" required 
                   value="<?php echo isset($_POST['guess']) ? $_POST['guess'] : ''; ?>">
            <input type="submit" value="Submit">
            <input type="submit" name="give_up" value="Give up">
        </form>

        <?php
        ob_start();  
        include 'process_guess.php';
        $message = ob_get_clean(); 

        if (isset($message) && !empty($message)) {
             echo "<p>$message</p>";
        }
        ?>
    </body>
</html>