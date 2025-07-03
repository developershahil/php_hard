<?php
    session_start();


    $msg = "";

    if(isset($_POST["submit"])){

        if(isset($_POST["captcha"]) && isset($_SESSION["captcha"])){

            if($_POST['captcha'] == $_SESSION['captcha']){
                $msg = "Successfully... You have entered right captcha";
            }
            else{
                $msg = "Failed.. Sorry you entered wrong captcha";
            }
        }

    }
    
?>
 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Captcha</title>
    <style>
        body{
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        button{
            padding: 0.4rem;
            border-radius: 6px;
            cursor: pointer;
            background-color: blue;
            color: beige;
            font-size: medium; 
            width: 100%;
        }
        input{
            box-sizing: border-box;
            border: 1px solid black;
            border-radius: 5px;
            font-size: 16px;
            padding: 1rem;
            width: 100%;
        }
        .msg{
            font-size: large;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h2> Prove that You are Not a Robot!!!</h2>

    <div style="margin:15px">
        <img src="captcha.php">
    </div>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        
        <input type="text" name="captcha" placeholder="Enter Captcha"><br><br>

        <button type="submit" name="submit">Submit</button>
    </form>
    <br>
    <br>
    <div class="msg">
        <?php echo $msg ?>  
    </div>
</body>
</html>