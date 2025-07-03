<?php
     if(isset(($_POST['submit'])))
    {
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $role = $_POST['role'];
        $course = $_POST['course'];
        $university = $_POST['uni'];
        $city = $_POST['city'];
        $year = $_POST['ex-year'];
        $experience = $_POST['experience'];
        $skill_1 = $_POST['skill-1'];
        $skill_2 = $_POST['skill-2'];
        $skill_3 = $_POST['skill-3'];
        $skill_4 = $_POST['skill-4'];


        $resume = "Name: $name\n";
        $resume .= "Role: $role\n";
        $resume .= "Course: $course\n";
        $resume .= "University: $university\n";
        $resume .= "City: $city\n";
        $resume .= "Email: $email\n";
        $resume .= "Phone: $phone\n";
        $resume .= "Years of Experience: $year\n";
        $resume .= "Experience:\n$experience\n";
        $resume .= "Skills:\n- $skill_1\n- $skill_2\n- $skill_3\n- $skill_4\n";

            
        header('Content-Type: text/html');
        header('Content-Disposition: attachment; filename="resume.txt"');
        header('Content-Length: ' . strlen($resume));

        echo $resume;
        exit;
    } 
    else {
            header("Location: form.php");
            exit;
        }
    
?>