<!DOCTYPE html>
<html>
    <head>
        <title>Choose Product</title>
            <link rel="stylesheet" href="ebusiness.css" type="text/css"/>
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="cost_calc.js"></script>

    </head>
    
    <body>
      
       <h1 class="h1"><font color=#800020 face="courier">Stratus: Cloud Services Ltd.</font></h1>
         <ul>
         <li><a href="aboutcloud.html">About Cloud</a></li>
        <li><a href="cloudproducts.html"><font color=#800020>Shop</a></li>
        <li><a href="homepage.html">Return to Homepage</a></li>
        
        <h2 class="title" id="ebus1heading">Select A Product</h2>
        
             <div class="radiobuttons" id="radiobuttons">
            <form method="POST" action="Ebus2.php">
              
              <label for="salesforce">
                <input type="radio" id="salesforce" name="product" checked onClick="disablebtnProceed()"/>
                SalesForce @ $100
              </label>
              
              <br>
              
              <label for="cloud9">
                <input type="radio" id="cloud9" name="product" checked onClick="disablebtnProceed()"/>
                Cloud 9 @ $200
              </label>
              
              <br>
              
              <label for="aws">
                <input type="radio" id="aws" name="product" onClick="disablebtnProceed()"/>
                AWS @ $300
              </label>
              
              <br>
              
              <label for="gmail">
                <input type="radio" id="gmail" name="product" checked onClick="disablebtnProceed()"/>
                Gmail @ $400
              </label>
              
              <div/>
              
              <br>
              
              <br>
              <br>
              
              <label for="subtotal">
                Sub Total
                <input type="text" id="subtotal" name="subtotal" value="0.00" readonly/>
              </label>
              
              <br>
              
              <label for="discount">
                Discount @ 5%
                <input type="text" id="discount" name="discount" value="0.00" readonly/>
              </label>
              
              <br>
              
              <label for="vat">
                Vat @ 10%
                <input type="text" id="vat" name="vat" value="0.00" readonly/>
              </label>
              
              <br>
              
              
              
              <label for="total">
                Total
                <input type="text" id="total"  name="total" value="0.00" readonly/>
              </label>
    
              <br>
              
             <button type="submit" id="btnProceed" disabled>Add to Shopping Cart</button>
              
            </form>
            
            <br>
            <a role="button" onClick="calculateSub()" id="btnCalculate" >Calculate Cost</a>
            <a role="button" class="btnClear" id="btnClear" href="Ebus1.php">Clear Choice</a>

          
            
            
           
        
    </body>
</html>