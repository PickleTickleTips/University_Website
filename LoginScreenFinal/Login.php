<?php
    session_start(); 
    session_unset();
    session_destroy();
    session_start();
    include("database.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>

    <div class="container">
        <form action="Login.php" method="post">
            <fieldset class="loginArea">
                <div>
                    <div class = loginPrompt>
                        <h1 id="head">Login</h1>
                    </div>



                    <div class="box">
                        <label for="uname" class="userlabel">Username:</label>
                        <input type="text" name="uname" class="userinput">
                    </div>

                    <div class="box">
                        <label for="password" class="userlabel">Password:</label>
                        <input type="password" name="password" class="userinput">
                    </div>

                    <div>
                        <input type="submit" value="Login" name="btnLogin" class="btn">
                    </div>

                    <div>
                        <br><br><br>
                        <button type="submit" name="account" class="account"><label for="create" class="create"><i>Create an account</i></label></button>  
                        <br>
                        <button type="submit" name="forgot" class="account"><label for="create" class="create"><i>Forgot Password</i></label></button>                        
                    </div>

                </div>

            </fieldset>
        </form>
    </div>
    
</body>
    <footer>
        <h4>&copy; EasyBuy 2026</h4>
    </footer>
</html>

<?php 

    if($_SERVER["REQUEST_METHOD"] == "POST" AND isset($_POST['btnLogin'])){
        $username = filter_input(INPUT_POST,"uname", FILTER_SANITIZE_SPECIAL_CHARS);
        $password = filter_input(INPUT_POST,"password", FILTER_SANITIZE_SPECIAL_CHARS);
        $success = false;


        if(empty($username)){
            echo"Enter a username";
        }
        elseif(empty($password)){
            echo"Enter password";
        }
        else{
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $SQL = "SELECT * FROM USER WHERE username='$username' AND password='$password'";
            $result = mysqli_query($connection, $SQL);

            if(mysqli_num_rows($result) > 0){
                $success = true;
                echo"Login Successful!";
                $_SESSION["user"] = $username;
                echo $_SESSION["user"];
                $row = mysqli_fetch_assoc($result);
                $role = $row['role'];
                if($role == 0){
                    header("Location: ../Profile/Profile.php");
                }
                elseif($role == 1){
                    header("Location: ../Admin/Admin.php");
                }
                elseif($role == 2){
                    header("Location: ../SuperAdmin/SuperAdmin.php");
                }

                exit;
            }
            else{
                echo"Login Failed, make sure all credentials are entered correctly or register an account.";
            }
        }

    }

    if(isset($_POST['account'])){
        header("Location: ../AccountCreation/AccountCreation.php");
    }

    mysqli_close($connection);
?>