<?php
    session_start();
    include("database.php");

    if(isset($_POST['Enlist'])){
        $productname = filter_input(INPUT_POST,"pname", FILTER_SANITIZE_SPECIAL_CHARS);
        $price = filter_input(INPUT_POST,"pprice", FILTER_SANITIZE_SPECIAL_CHARS);
        $description = filter_input(INPUT_POST,"pdescription", FILTER_SANITIZE_SPECIAL_CHARS);
        $location = filter_input(INPUT_POST,"plocation", FILTER_SANITIZE_SPECIAL_CHARS);
        $category = $_POST['pcategory'];


        $image_name = $_FILES['image']['name'];
        $tempname = $_FILES['image']['tmp_name'];
        $productPic = "../Productpics/".$image_name;

        if(empty($image_name)){
            $image_name = "placeholder.jpg";
        }
        
        
        $SQL = "INSERT INTO PRODUCT (product_name, product_price, product_description, product_location, user_listing, category, image) VALUES ('$productname', '$price', '$description', '$location', '{$_SESSION['user']}', '$category', '$image_name') ";



        try{

            if(move_uploaded_file($tempname, $productPic)){
                echo"Image uploaded successfully!";
            }
            else{
                echo "Temp file: $tempname<br>";
                echo "Target path: $productPic<br>";
            }

            mysqli_query($connection, $SQL);
            echo"Item successfully registered!";

            header("Location: ../Profile/Profile.php");
            exit();
        }
        catch(mysqli_sql_exception){
            echo"Failed to list product";
        }

        mysqli_close($connection);

    }

    echo $_SESSION['user'];

    mysqli_close($connection);    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MakeListing</title>
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
        <h3>Make a listing </h3>
        <form class="form" method="post" enctype="multipart/form-data">
            <fieldset>
                <legend>Make a listing</legend> <br>
                <div>
                    <label for="pname">Product Name:</label>
                    <input type="text" name="pname" required placeholder="enter name here.">
                </div>
                <br>

                <div>
                    <label for="pprice">Product price: </label>
                    <input type="number" name="pprice" required placeholder="input price.">
                </div>     
                <br>           

                <div>
                    <label for="pdescription">Product description: </label>
                    <input type="text" name="pdescription" required placeholder="brief description of product">
                </div>
                <br>       
                
                <div>
                    <div>
                        <label>Category:</label>
                    </div>
                    <div><input type="radio" name="pcategory" value="CLOTHES" checked>Clothes</div>
                    <div><input type="radio" name="pcategory" value="ELECTRONICS">Electronics</div>
                    <div><input type="radio" name="pcategory" value="JEWELRY">Jewelry</div>
                    <div><input type="radio" name="pcategory" value="FRAGRENCE">Fragrence</div>
                    <div><input type="radio" name="pcategory" value="SKILLS">Skills</div>
                    <div><input type="radio" name="pcategory" value="OTHER">Other</div>
                </div>
                <br>
                
                <div>
                    <label for="plocation">Listing Location: </label>
                    <input type="text" name="plocation" required placeholder="where you are sellng from">                    
                </div>
                <br><br>
                
                <div>
                    <label for="image">upload image (optional): </label>
                    <input type="file" name="image" id="image">                   
                </div>                

                <div>
                    <br><br>
                    <input type="submit" value="Enlist" name="Enlist">
                </div>

            </fieldset>
        </form>
    </main>


    <script src="sidebar.js"></script>
</body>
</html>