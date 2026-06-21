<?php
    include("database.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Creation</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>

    <div class="container">
        <form action="AccountCreation.php" method="post">
            <fieldset class="loginArea">
                <div>
                    <div class = loginPrompt>
                        <h1 id="head">Account Creation</h1>
                    </div>



                    <div class="box">
                        <label for="uname" class="userlabel">Username:</label>
                        <input type="text" name="uname" class="userinput" placeholder="This is was others will see">
                    </div>

                    <div class="box">
                        <label for="fname" class="userlabel">First Name:</label>
                        <input type="text" name="fname" class="userinput" placeholder="Your First name">
                    </div>

                    <div class="box">
                        <label for="lname" class="userlabel">Last Name:</label>
                        <input type="text" name="lname" class="userinput" placeholder="Your Surname">
                    </div> 

                    <div class="box">
                        <label for="email" class="userlabel">Email:</label>
                        <input type="email" name="email" class="userinput" placeholder="name@example.com">
                    </div> 

                    <div class="box">
                        <label for="password" class="userlabel">Password:</label>
                        <input type="password" name="password" class="userinput" placeholder="password">
                    </div>

                    <div class="box">
                        <label for="confirmPass" class="userlabel">Confirm Password:</label>
                        <input type="password" name="confirmPass" class="userinput" placeholder="Comfirm Password">
                    </div>       

                    <div>
                        <br>
                        <input type="submit" value="Submit" class="btnStyle" id="btnSubmit" name="createAccount">
                    </div>

                    <div>
                        <br>
                        <input type="submit" value="Back" id="btnBack" class="btnStyle" name="back">                        
                    </div>

                </div>

            </fieldset>
        </form>
    </div>
    
</body>
</html>

<?php 

    if($_SERVER["REQUEST_METHOD"] == "POST" AND isset($_POST['createAccount'])){
        $username = filter_input(INPUT_POST,"uname", FILTER_SANITIZE_SPECIAL_CHARS);
        $password = filter_input(INPUT_POST,"password", FILTER_SANITIZE_SPECIAL_CHARS);
        $firstName = filter_input(INPUT_POST,"fname", FILTER_SANITIZE_SPECIAL_CHARS);
        $lastName = filter_input(INPUT_POST,"lname", FILTER_SANITIZE_SPECIAL_CHARS);
        $email = filter_input(INPUT_POST,"email", FILTER_SANITIZE_SPECIAL_CHARS);
        $confirmPass = filter_input(INPUT_POST,"confirmPass", FILTER_SANITIZE_SPECIAL_CHARS);

        $success = false;


        if(empty($username) || empty($firstName) || empty($lastName) || empty($email) || empty($password) || empty($confirmPass)){
            echo"Ensure all detials are entered correctly";
        }
        else if($password != $confirmPass){
            echo"Passwords do not match";
        }
        else{
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $SQL = "SELECT * FROM USER WHERE username='$username' OR email='$email'";
            $result = mysqli_query($connection, $SQL);

            if(mysqli_num_rows($result) == 0){
                $success = true;
                $SQL = "INSERT INTO USER (username, name, surname, email, password) VALUES ('$username','$firstName', '$lastName', '$email', '$password')";
                mysqli_query($connection, $SQL);
                echo"Account successfully created!";
                header("Location: ../LoginScreenFinal/Login.php");
            }
            else{
                echo"Account creation failed, make sure you are using a unique username or email.";
            }
        }

    }

    if(isset($_POST['back'])){
        header("Location: ../LoginScreenFinal/Login.php");
    }    

    mysqli_close($connection);
?>