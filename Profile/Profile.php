<?php
    session_start();

    if(isset($_POST['contact'])){
        $_SESSION['profile'] = "contact";
        header("Location: ../MainPage/MainPage.php");
        exit;

    }  
    
    if(isset($_POST['listing'])){
        $_SESSION['profile'] = "listing";
        header("Location: ../MakeListing/Listing.php");
        exit;

    }  
    
    if(isset($_POST['currentListings'])){
        $_SESSION['profile'] = "currentListings";
        header("Location: ../MainPage/MainPage.php");
        exit;

    }  
    
    if(isset($_POST['cart'])){
        $_SESSION['profile'] = "cart";
        header("Location: ../MainPage/MainPage.php");
        exit;

    }  
    
    if(isset($_POST['earnings'])){
        $_SESSION['profile'] = "earnings";
        header("Location: ../MainPage/MainPage.php");
        exit;

    }      

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="grid.css">
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
        <div class="container">

            <div class="category" style="grid-area: profile1">
                <form method="post">
                    <div>
                        <button type="submit" name="contact" id="contact"><img src="Contact.svg" alt="Contact Admin" height="80" width="80"> <br> Contact Admin</button>
                    </div>
                </form>
            </div>

            <div class="category" style="grid-area: profile2">
                <form method="post">
                    <div>
                        <button type="submit" name="listing" class="btnListing"><img src="listing.svg" alt="make a listing" height="80" width="80"> <br>Make a Listing</button>
                    </div>
                </form>                
            </div>
            
            <div class="category" style="grid-area: profile3">
                <form method="post">
                    <div>
                        <button type="submit" name="currentListings" id="currentListings"><img src="listings.svg" alt="make a listing" height="80" width="80"> <br> View your listings</button>
                    </div>
                </form>                
            </div>

            <div class="category" style="grid-area: profile4">
                <form method="post">
                    <div>
                        <button type="submit" name="cart" id="cart"><img src="cart.svg" alt="view your cart" height="80" width="80"> <br> View Cart</button>
                    </div>
                </form>                   
            </div>
            
            <div class="category" style="grid-area: profile5">
                <form method="post">
                    <div>
                        <button type="submit" name="earnings" class="btnListing"><img src="bought.svg" alt="View Earnings" height="80" width="80"> <br>Products Sold</button>
                    </div>
                </form>                   
            </div>

        </div>
    </main>

    <footer>
        <h4>&copy; EasyBuy 2026</h4>
    </footer>

    <script src="sidebar.js"></script>
</body>
</html>
