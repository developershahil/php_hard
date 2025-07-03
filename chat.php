<?php
    $filename = "chat.txt";

    if(isset($_POST["submit"])) {

        $name = htmlspecialchars($_POST["name"]);
        $msg = htmlspecialchars($_POST["msg"]);

        if(!empty($name) && !empty($msg)) {

            $data = "<b>$name</b>: $msg <br>";
            file_put_contents($filename, $data, FILE_APPEND);
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini Chat</title>
    <style>
        body {
            font-family: Arial;           
            background: #f4f4f4;          
            padding: 20px;  
            display: flex;
            align-items: center;
            justify-content: center;              
        }
        .chat-box {
            background: #fff;             
            border: 1px solid #ccc;       
            height: 300px;                
            overflow-y: scroll;          
            padding: 10px;                
            margin-bottom: 10px; 
            width: 50vw;        
        }
        form input, form button {
            padding: 8px;                
            margin: 5px;                 
        }
    </style>
</head>
<body>
    <h2>Mini Chat System</h2><br>
    <div class="chat-box">
        <?php 
            if(file_exists($filename)) {

                echo file_get_contents($filename);

            }
            else{
                echo "No message found";
            }
        ?>
    </div>
    <form action="" method="post">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required>
        <br>
        <br>
        <label for="msg">Message:</label>
        <input type="text" name="msg" id="msg" required>
        <br>
        <br>
        <button type="submit" name="submit">Send</button>

    </form>
</body>
</html>