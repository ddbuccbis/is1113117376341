/* global $ */

function validateDetails(){
    
    var pin;

    pin = document.getElementById("userPin").value;
    
    if (pin==""){
        alert("Please enter your details");
        }
    else if (String(pin).length<4){
        alert("Please make sure your PIN is accurate");
        }
    else{
        enablebtnPurchase();
        }
        
  
}

function enablebtnPurchase(){
     $('#btnPurchase').prop('disabled',false);
}

function disablebtnPurchase(){
     $('#btnPurchase').prop('disabled',true);
}/* global $ */

function validateDetails(){
    
    var pin;

    pin = document.getElementById("userPin").value;
    
    if (pin==""){
        alert("Please enter your details");
        }
    else if (String(pin).length<4){
        alert("Please make sure your PIN is accurate");
        }
    else{
        enablebtnPurchase();
        }
        
  
}

function enablebtnPurchase(){
     $('#btnPurchase').prop('disabled',false);
}

function disablebtnPurchase(){
     $('#btnPurchase').prop('disabled',true);
}