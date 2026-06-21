<?php
    session_start();
    include("database.php");
    include("userdatabase.php");

    if(isset($_POST['remove'])){
        $ID = $_POST['product_id'];
        $SQL2 = "DELETE FROM PRODUCT WHERE id = '$ID' ";

        try{
            mysqli_query($connection, $SQL2);
            header("Location: MainPage.php");
        }
        catch(mysqli_sql_exception){
            echo"failed to remove";
        }

    }

    if(isset($_POST['delist'])){
        $ID = $_POST['product_id'];
        $SQL2 = "DELETE FROM PRODUCT WHERE id = '$ID' ";

        try{
            mysqli_query($connection, $SQL2);
            header("Location: MainPage.php");
        }
        catch(mysqli_sql_exception){
            echo"failed to remove";
        }

    }    

    if(isset($_POST['relist'])){
        $ID = $_POST['product_id'];
        $SQL2 = "UPDATE PRODUCT SET sold = 0 WHERE id = '$ID' ";

        try{
            mysqli_query($connection, $SQL2);
            header("Location: MainPage.php");
        }
        catch(mysqli_sql_exception){
            echo"failed to update";
        }

    }  
    
    if(isset($_POST['send'])){
        $message = $_POST['message'];

        $SQL2 = "INSERT INTO MESSAGE (user, message) VALUES ('{$_SESSION['user']}', '$message')";

        try{
            mysqli_query($userconnection, $SQL2);
            header("Location: MainPage.php");
        }
        catch(mysqli_sql_exception){
            echo"failed to send message";
        }

    }      
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MainPage</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>



    <nav class="navigation">

        <ul class="sidebar">      
            <li onclick=closeBar() id="close"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="11px" viewBox="0 -960 960 960" width="11px" fill="red"><path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/></svg></a></li>     
            <li><a href="../Profile/Profile.php"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e3e3e3"><path d="M234-276q51-39 114-61.5T480-360q69 0 132 22.5T726-276q35-41 54.5-93T800-480q0-133-93.5-226.5T480-800q-133 0-226.5 93.5T160-480q0 59 19.5 111t54.5 93Zm146.5-204.5Q340-521 340-580t40.5-99.5Q421-720 480-720t99.5 40.5Q620-639 620-580t-40.5 99.5Q539-440 480-440t-99.5-40.5ZM480-80q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm100-95.5q47-15.5 86-44.5-39-29-86-44.5T480-280q-53 0-100 15.5T294-220q39 29 86 44.5T480-160q53 0 100-15.5ZM523-537q17-17 17-43t-17-43q-17-17-43-17t-43 17q-17 17-17 43t17 43q17 17 43 17t43-17Zm-43-43Zm0 360Z"/></svg>Profile</a></li>
            <li><a href="../Cart/cart.php"><img src="cart.svg">Cart</a></li>
            <li><a href="../Categories/Category.php"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e3e3e3"><path d="m260-520 220-360 220 360H260ZM700-80q-75 0-127.5-52.5T520-260q0-75 52.5-127.5T700-440q75 0 127.5 52.5T880-260q0 75-52.5 127.5T700-80Zm-580-20v-320h320v320H120Zm580-60q42 0 71-29t29-71q0-42-29-71t-71-29q-42 0-71 29t-29 71q0 42 29 71t71 29Zm-500-20h160v-160H200v160Zm202-420h156l-78-126-78 126Zm78 0ZM360-340Zm340 80Z"/></svg>Categories</a></li>
            <li><a href="../LoginScreenFinal/Login.php"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e3e3e3"><path d="M200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h280v80H200v560h280v80H200Zm440-160-55-58 102-102H360v-80h327L585-622l55-58 200 200-200 200Z"/></svg>Logout</a></li>
        </ul>

        <ul>
            <li><a href="../MainPage/MainPage.php" id="home"><svg xmlns="http://www.w3.org/2000/svg" height="34px" viewBox="0 -960 960 960" width="34px" fill="purple"><path d="M240-200h120v-240h240v240h120v-360L480-740 240-560v360Zm-80 80v-480l320-240 320 240v480H520v-240h-80v240H160Zm320-350Z"/></svg></a></li>            
            <li class="hideMobileScreen"><a href="../Profile/Profile.php"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e3e3e3"><path d="M234-276q51-39 114-61.5T480-360q69 0 132 22.5T726-276q35-41 54.5-93T800-480q0-133-93.5-226.5T480-800q-133 0-226.5 93.5T160-480q0 59 19.5 111t54.5 93Zm146.5-204.5Q340-521 340-580t40.5-99.5Q421-720 480-720t99.5 40.5Q620-639 620-580t-40.5 99.5Q539-440 480-440t-99.5-40.5ZM480-80q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm100-95.5q47-15.5 86-44.5-39-29-86-44.5T480-280q-53 0-100 15.5T294-220q39 29 86 44.5T480-160q53 0 100-15.5ZM523-537q17-17 17-43t-17-43q-17-17-43-17t-43 17q-17 17-17 43t17 43q17 17 43 17t43-17Zm-43-43Zm0 360Z"/></svg>Profile</a></li>
            <li class="hideMobileScreen"><a href=../Cart/cart.php><img src="cart.svg">Cart</a></li>
            <li class="hideMobileScreen"><a href="../Categories/Category.php"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e3e3e3"><path d="m260-520 220-360 220 360H260ZM700-80q-75 0-127.5-52.5T520-260q0-75 52.5-127.5T700-440q75 0 127.5 52.5T880-260q0 75-52.5 127.5T700-80Zm-580-20v-320h320v320H120Zm580-60q42 0 71-29t29-71q0-42-29-71t-71-29q-42 0-71 29t-29 71q0 42 29 71t71 29Zm-500-20h160v-160H200v160Zm202-420h156l-78-126-78 126Zm78 0ZM360-340Zm340 80Z"/></svg>Categories</a></li>
            <li class="hideMobileScreen"><a href="../LoginScreenFinal/Login.php"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e3e3e3"><path d="M200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h280v80H200v560h280v80H200Zm440-160-55-58 102-102H360v-80h327L585-622l55-58 200 200-200 200Z"/></svg>Logout</a></li>
            <li onclick=openBar() class="mobileMenu"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e3e3e3"><path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"/></svg></a></li>
        </ul>
        
    </nav>

    <main>
        <?php
            if($_SESSION['profile'] == 'contact'){
                echo"<div class='formContainer'>";
                echo"<form method ='post' id='messageForm'>";
                echo"<textarea type='text' name='message' id='message'></textarea><br>";
                echo"<input type='submit' value='Send Message' name='send' class='relist'>";
                echo"</form>";
                echo"</div>";

            }

            if($_SESSION['profile'] == 'currentListings'){
                $SQL ="SELECT id, product_name, product_price, product_description, product_location, date_listed, category FROM PRODUCT WHERE user_listing = '{$_SESSION['user']}' AND sold = 0";
                $result = mysqli_query($connection, $SQL);

                echo"<table class='cartTable'>";
                echo"<tr>";
                echo"<th>Product Name</th>";
                echo"<th>Product Price</th>";
                echo"<th>Product Description</th>";
                echo"<th>Product Location</th>";
                echo"<th>Date Listed</th>";
                echo"<th>Caregory</th>";
                echo"</tr>";
                while($row=mysqli_fetch_assoc($result)){
                    echo"<tr>
                            <td>{$row['product_name']}</td> 
                            <td>R{$row['product_price']}</td> 
                            <td>{$row['product_description']}</td> 
                            <td>{$row['product_location']}</td> 
                            <td>{$row['date_listed']}</td> 
                            <td>{$row['category']}</td> 
                            <td>
                                <form method='post'>
                                    <input type='submit' value='Remove' name='remove' class='remove'>
                                    <input type='hidden' name='product_id' value='{$row['id']}'>
                                </form>
                            </td> 
                         </tr>";
                }
                echo"</table>";
                
            }
            
            if($_SESSION['profile'] == 'earnings'){
                $SQL ="SELECT * FROM PRODUCT WHERE user_listing = '{$_SESSION['user']}' AND sold = 1";
                $result = mysqli_query($connection, $SQL);              
                  
                echo"<table class='cartTable'>";
                echo"<tr>";
                echo"<th>Product Name</th>";
                echo"<th>Product Price</th>";
                echo"<th>Product Description</th>";
                echo"<th>Date Listed</th>";
                echo"<th>Relist</th>";
                echo"<th>Delist</th>";
                echo"</tr>";
                $total = 0;
                while($row=mysqli_fetch_assoc($result)){
                    $total += $row['product_price'];
                    echo"<tr>
                            <td>{$row['product_name']}</td> 
                            <td>R{$row['product_price']}</td> 
                            <td>{$row['product_description']}</td> 
                            <td>{$row['date_listed']}</td> 
                            <td>
                                <form method='post'>
                                    <input type='submit' value='Relist' name='relist' class='relist'>
                                    <input type='hidden' name='product_id' value='{$row['id']}'>
                                </form>
                            </td> 
                            <td>
                                <form method='post'>
                                    <input type='submit' value='Remove' name='remove' class='remove'>
                                    <input type='hidden' name='product_id' value='{$row['id']}'>
                                </form>
                            </td>                                                         
                         </tr>";
                }
                echo"<tr>";
                echo"<th>Total Earned</th>";
                echo"<td>R$total<td>";
                echo"</tr>";        
                echo"</table>";     
                
            }
         
        ?>
    </main>


    <script src="sidebar.js"></script>
</body>

</html>

<?php
    echo $_SESSION["user"];
    echo"<br>";
    echo $_SESSION["profile"];
?>