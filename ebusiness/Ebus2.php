<?php
// start the session
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Enter Details</title>
         <link rel="stylesheet" href="ebusiness.css" type="text/css"/>
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>
    <body>
        <h1 class="h1"><font color=#800020 face="courier">Stratus: Cloud Services Ltd.</font></h1>
         <ul>
         <li><a href="aboutcloud.html">About Cloud</a></li>
        <li><a href="cloudproducts.html"><font color=#800020>Shop</a></li>
        <li><a href="../homepage.html">Return to Homepage</a></li>
        </ul>
        
        <h2 class="title" id="ebus2heading">Enter Details</h2>
        
        
        <form action="Ebus3.php" method="POST" class="ebus2">
            
            <div class="container" id="ebus2boxes">
                
            <label for="user">Name: </label>
            <input type="name" id="user" name="user" placeholder="Name" maxlength="30"/>
            
            <br/>
            <br/>
            
            <label for="userEmail">Email Address: </label>
            <input type="email" id="userEmail" name="userEmail" placeholder="example@email.com" maxlength="40">
            
            <br/>
            <br/>
            
             <label for="userPin">PIN: </label>
             <input type="password" id="userPin" placeholder="(4 Numbers Only)" maxlength="4">
             
             </div>

                <button type="submit" id="btnPurchase" disabled>Proceed with Purchase</button>
                
            
            </form>
            
            <br/>
            <a role="button" onClick="validateDetails()" id="btnValidate">Validate</a>
            
          
            
            <?php
            $_SESSION["total"] = $_POST["total"];
            ?>
       
        
        <script type="text/javascript" src="Ebus2_validator.js"></script></div>
           
    </body>
</html>