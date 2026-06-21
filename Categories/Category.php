<?php
 session_start();
 if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['clothes'])){
    
        if(isset($_POST['clothes'])){
            $_SESSION['category'] = "CLOTHES";
            echo $_SESSION['category'];
            header("Location: ../ProductList/Products.php");
            exit;
        }

    }      

 if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['electronics'])){
    
        if(isset($_POST['electronics'])){
            $_SESSION['category'] = "ELECTRONICS";
            echo $_SESSION['category'];
            header("Location: ../ProductList/Products.php");
            exit;            
        }

    }  
    
 if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['jewelry'])){
    
        if(isset($_POST['jewelry'])){
            $_SESSION['category'] = "JEWELRY";
            echo $_SESSION['category'];
            header("Location: ../ProductList/Products.php");
            exit;            
        }

    }  
    
 if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['fragrence'])){
    
        if(isset($_POST['fragrence'])){
            $_SESSION['category'] = "FRAGRENCE";
            echo $_SESSION['category'];
            header("Location: ../ProductList/Products.php");
            exit;            
        }

    }  
    
 if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['skills'])){
    
        if(isset($_POST['skills'])){
            $_SESSION['category'] = "SKILLS";
            echo $_SESSION['category'];
            header("Location: ../ProductList/Products.php");
            exit;            
        }

    }  
    
 if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['other'])){
    
        if(isset($_POST['other'])){
            $_SESSION['category'] = "OTHER";
            echo $_SESSION['category'];
            header("Location: ../ProductList/Products.php");
            exit;            
        }

    }      
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category</title>
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

            <div class="category"><svg class ="pic" xmlns="http://www.w3.org/2000/svg" height="48px" viewBox="0 -960 960 960" width="48px" fill="black"><path d="m250-569-63 35q-14 8-29.5 4.5T136-546L67-665q-8-14-4.5-24T79-707l228-133h64q11 0 17.5 6.5T395-816v15q0 38 24 62t62 24q38 0 61.5-24t23.5-62v-15q0-11 6.5-17.5T590-840h64l228 133q13 8 16 18t-4 24l-70 119q-6 13-25 17t-30-3l-62-39v412q0 16-12 27.5T667-120H289q-16 0-27.5-11.5T250-159v-410Zm60-102v491h337v-491l138 77 45-78-187-107h-18q-8 54-47.5 89T481-655q-57 0-97-35t-48-89h-18L131-672l45 78 134-77Zm171 191Z"/></svg><br><form method="post" action="Category.php"><input type="submit" class="categoryButton" name="clothes" value="Clothing and Apparel"></form><br></div>
            <div class="category"><svg class ="pic" xmlns="http://www.w3.org/2000/svg" height="48px" viewBox="0 -960 960 960" width="48px" fill="black"><path d="M322-120v-87H132q-24 0-42-18.5T72-268v-512q0-24 18-42t42-18h680q24 0 42 18t18 42v125h-60v-125H132v513h348v147H322Zm326.88-237q26.88-27 65-27Q752-384 779-357.12q27 26.88 27 65Q806-254 779.12-227q-26.88 27-65 27Q676-200 649-226.88q-27-26.88-27-65Q622-330 648.88-357Zm198.88-268Q864-625 876-613t12 28.39v424.22Q888-144 876-132t-28.24 12H580.24Q564-120 552-132t-12-28.39v-424.22Q540-601 552-613t28.24-12h267.52ZM672-568q-18 18-18 42t18 42q18 18 42 18t42-18q18-18 18-42t-18-42q-18-18-42-18t-42 18Zm138.5 372.5Q848-233 848-292t-37.5-96.5Q773-426 714-426t-96.5 37.5Q580-351 580-292t37.5 96.5Q655-158 714-158t96.5-37.5Z"/></svg><br><form method="post"><input type="submit" class="categoryButton" name="electronics" value="Electronics"></form><br></div>
            <div class="category"><svg class ="pic" xmlns="http://www.w3.org/2000/svg" height="48px" viewBox="0 -960 960 960" width="48px" fill="black"><path d="M480-120 80-600l120-240h560l120 240-400 480ZM368-630h224l-75-150h-74l-75 150Zm82 381v-321H183l267 321Zm60 0 267-321H510v321Zm149-381h136l-75-150H584l75 150Zm-494 0h136l75-150H240l-75 150Z"/></svg><br><form method="post"><input type="submit" class="categoryButton" name="jewelry" value="Jewelry"></form><br></div>
            <div class="category"><svg class ="pic" xmlns="http://www.w3.org/2000/svg" height="48px" viewBox="0 -960 960 960" width="48px" fill="black"><path d="M562.5-655q-12.5 0-21-9t-8.5-21.5q0-12.5 8.63-21 8.62-8.5 21.37-8.5 12 0 21 8.62 9 8.63 9 21.38 0 12-9 21t-21.5 9Zm247.5 0q-12 0-21-9t-9-21.5q0-12.5 9-21t21.5-8.5q12.5 0 21 8.62 8.5 8.63 8.5 21.38 0 12-8.62 21-8.63 9-21.38 9Zm-123.5-83q-12.5 0-21-8.63-8.5-8.62-8.5-21.37 0-12 8.63-21 8.62-9 21.37-9 12 0 21 9t9 21.5q0 12.5-9 21t-21.5 8.5ZM810-820q-12 0-21-8.63-9-8.62-9-21.37 0-12 9-21t21.5-9q12.5 0 21 9t8.5 21.5q0 12.5-8.62 21-8.63 8.5-21.38 8.5ZM686.5-573q-12.5 0-21-8.63-8.5-8.62-8.5-21.37 0-12 8.63-21 8.62-9 21.37-9 12 0 21 9t9 21.5q0 12.5-9 21t-21.5 8.5ZM810-491q-12 0-21-8.63-9-8.62-9-21.37 0-12 9-21t21.5-9q12.5 0 21 9t8.5 21.5q0 12.5-8.62 21-8.63 8.5-21.38 8.5ZM180-180h270v-363H180v363Zm-60 60v-423q0-24.75 17.63-42.38Q155.25-603 180-603h270q24.75 0 42.38 17.62Q510-567.75 510-543v423H120Zm83-483v-177q0-24.75 17.63-42.38Q238.25-840 263-840h165v237h-60v-177H263v177h-60Zm-23 423h270-270Z"/></svg><br><form method="post"><input type="submit" class="categoryButton" name="fragrence" value="Fragrance"></form><br></div>
            <div class="category"><svg class ="pic" xmlns="http://www.w3.org/2000/svg" height="48px" viewBox="0 -960 960 960" width="48px" fill="black"><path d="M368-80v-538q-95-20-152.5-85.5T158-856h60q0 78 60.5 131T426-672h100q38 0 56 6.5t46 30.5l184 172-43 43-185-174v514h-60v-255h-96v255h-60Zm56.5-675.5Q403-777 403-807t21.5-51.5Q446-880 476-880t51.5 21.5Q549-837 549-807t-21.5 51.5Q506-734 476-734t-51.5-21.5Z"/></svg><br><form method="post"><input type="submit" class="categoryButton" name="skills" value="Skills"></form><br></div>
            <div class="category"><svg class ="pic" xmlns="http://www.w3.org/2000/svg" height="48px" viewBox="0 -960 960 960" width="48px" fill="black"><path d="M160-80v-445H80v-230h220q-8-12-12-25.5t-4-27.5q0-46.67 32.67-79.33Q349.33-920 396-920q24 0 46.5 10t37.5 29q15-19 37.5-29t46.5-10q46.67 0 79.33 32.67Q676-854.67 676-808q0 14-4 27.5T660-755h220v230h-80v445H160Zm367-765.07q-15 14.93-15 37T526.93-771q14.93 15 37 15T601-770.93q15-14.93 15-37T601.07-845q-14.93-15-37-15T527-845.07Zm-183 37Q344-786 358.93-771t37 15Q418-756 433-770.93t15-37Q448-830 433.07-845t-37-15Q374-860 359-845.07t-15 37ZM140-695v110h310v-110H140Zm310 555v-385H214v385h236Zm60 0h236v-385H510v385Zm310-445v-110H510v110h310Z"/></svg><br><form method="post"><input type="submit" class="categoryButton" name="other" value="Other"></form><br></div>
           
        </div>
    </main>

    <footer>
        <h3></h3>
    </footer>

    <script src="sidebar.js"></script>
</body>
</html>


