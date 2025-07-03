<?php
    if(isset($_POST["submit"]))
    {
        $data = [$_POST["name"],  $_POST["phone"], $_POST["email"], $_POST["city"]];

        $file = fopen("data.csv", "a");

        fputcsv($file, $data);
        fclose($file);

        echo"Data saved to csv file successfully";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSV</title>
</head>
<body>
    <h2>CSV Export</h2>
    <form action="" method="post">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" placeholder="Enter Your Name">
        <br>
        <label for="phone">Phone No</label>
        <input type="number" name="phone" id="phone" placeholder="Enter Your Phone Number">
        <br>
        <label for="email">Email</label>
        <input type="email" name="email" id="email" placeholder="Enter Your Email">
        <br>
        <label for="city">City</label>
        <input type="text" name="city" id="city" placeholder="Enter Your City">
        <br>

        <button type="submit" name="submit">Submit</button>
    
    </form>
</body>
</html>