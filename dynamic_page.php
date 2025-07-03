<?php
    session_start();

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        
        $_SESSION["name"] = $_POST["name"];
        $_SESSION["title"] = $_POST["title"];
        $_SESSION["topic"] = $_POST["topic"];
        $_SESSION["intro"] = $_POST["intro"];
        $_SESSION["main"] = $_POST["main"];
        $_SESSION["sub"] = $_POST["sub"];
        $_SESSION["conclusion"] = $_POST["conclusion"];
        $_SESSION["date"] = $_POST["date"];

        header("Location: display_page.php");
        exit();

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
    <div class="form-container">
        <h2>Make Dynamic Article Page</h2>
        <form action="" method="post">

            <div class="group">
                <label for="name">Author Name</label>
                <input type="text" name="name" id="name" placeholder="Enter Author Name" required>
            </div>

            <div class="group">
                <label for="title">Page Title</label>
                <input type="text" name="title" id="title" placeholder="Enter Page Title" required>
            </div>

            <div class="group">
                <label for="heading">Article Topic</label>
                <input type="text" name="topic" id="topic" placeholder="Enter Article Topic" required>
            </div>            

            <div class="group">
                <label for="intro">Introduction content paragraph</label>
                <textarea name="intro" id="intro" cols="60" rows="20" placeholder="Write the excat same content as you want in your page" required></textarea>
            </div>

            <div class="group">
                <label for="main">Main content paragraph</label>
                <textarea name="main" id="main" cols="60" rows="20" placeholder="Write the excat same content as you want in your page" required></textarea>
            </div>

            <div class="group">
                <label for="content">Sub content</label>
                <textarea name="sub" id="sub" cols="60" rows="20" placeholder="Write the excat same content as you want in your page" required></textarea>
            </div>

            <div class="group">
                <label for="conclusion">Conclusion content</label>
                <textarea name="conclusion" id="conclusion" cols="60" rows="20" placeholder="Write the excat same content as you want in your page" required></textarea>
            </div>

            <div class="group">
                <label for="date">Article Date</label>
                <input type="date" name="date" id="date" placeholder="Enter Article Date" required>
            </div>

            <button type="submit" class="submit">Submit</button>
        </form>
    </div>
</body>
</html>