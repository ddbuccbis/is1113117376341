<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Receipt</title>
         <link rel="stylesheet" href="ebusiness.css" type="text/css"/>
    </head>
    <body>
        <h1 class="h1"><font color=#800020 face="courier">Stratus: Cloud Services Ltd.</font></h1>
         <ul>
         <li><a href="aboutcloud.html">About Cloud</a></li>
        <li><a href="cloudproducts.html"><font color=#800020>Shop</a></li>
        <li><a href="../homepage.html">Return to Homepage</a></li>
        </ul>
        
        <h2 class="title" id="ebus3heading">Receipt</h2>
        
        <div class="ebus3style">
            
             <?php
            // set session variables
            $_SESSION["user"] = $_POST["user"];
            $_SESSION["userEmail"] = $_POST["userEmail"];
            ?>
        
        <?php
        // Echo session variables that were set on previous page
        echo "Customer Name: " . $_SESSION["user"] . ".";
        ?>
        
        <br/>
        <br/>
        
        <?php
        echo "Customer Email: " . $_SESSION["userEmail"] . ".";
        ?>
    
        <br/>
        <br/>
        
        <?php
        echo "Total is $" . $_SESSION["total"] . ".";
        ?>
            
        </div>
        <h3 class="ebus3text">
        Thank you for shopping with Stratus Cloud Services Ltd.</h3>
          
    </body>
</html>