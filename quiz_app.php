<?php
    $score = 0;

    if(isset($_POST["submit"]))
    {
        if($_POST["q1"] == "PHP is a server-side scripting language"){
            $score += 4;
        }
        if($_POST["q2"] == ".php"){
            $score += 4;
        }
        if($_POST["q3"] == "<?php?>"){
            $score += 4;
        }
        if($_POST["q4"] == "extends"){
            $score += 4;
        }

        echo "Total score = $score";
    } 
    
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>PHP Questions Quiz</h2>
    <form method="post">
        <p>Que 1. What is PHP?</p>
        <input type="radio" name="q1" value="PHP is an open-source programming language" required> PHP is an open-source programming language<br>
        <input type="radio" name="q1" value="PHP is used to develop dynamic and interactive websites"> PHP is used to develop dynamic and interactive websites<br>
        <input type="radio" name="q1" value="PHP is a server-side scripting language"> PHP is a server-side scripting language<br>
        <input type="radio" name="q1" value="All of the mentioned"> All of the mentioned<br><br>

        <p>Que 2. Default file extension of PHP files?</p>
        <input type="radio" name="q2" value=".php" required> .php<br>
        <input type="radio" name="q2" value=".ph"> .ph<br>
        <input type="radio" name="q2" value=".xml"> .xml<br>
        <input type="radio" name="q2" value=".html"> .html<br><br>

        <p>Que 3. Correct syntax to write PHP code?</p>
        <input type="radio" name="q3" value="<php>" required> &lt;php&gt;<br>
        <input type="radio" name="q3" value="<?php?>"> &lt;?php?&gt;<br>
        <input type="radio" name="q3" value="<?>"> &lt;?&gt;<br>
        <input type="radio" name="q3" value="<.php?>"> &lt;.php?&gt;<br><br>

        <p>Que 4. Keyword used to inherit a subclass into a superclass?</p>
        <input type="radio" name="q4" value="extends" required> extends<br>
        <input type="radio" name="q4" value="implements"> implements<br>
        <input type="radio" name="q4" value="inherit"> inherit<br>
        <input type="radio" name="q4" value="include"> include<br><br>


        <button type="submit" name="submit">Submit Quiz</button>
    </form>

</body>
</html>