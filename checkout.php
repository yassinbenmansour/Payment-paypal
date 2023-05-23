<?php
// Include configuration file
 include_once 'config.php';
?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/light.min.css">


<div id="paymentSection">
    <form method="post" id="paymentForm">
        <h4>Item: <strong><?php echo $itemName; ?></strong></h4>
        <h4>Payable amount: <strong>$<?php echo $payableAmount.' '.$currency; ?></strong></h4>
        
                <label>Card Number</label>
                <input type="text" placeholder="1234 5678 9012 3456" maxlength="20" id="card_number" name="card_number">
             
                        <label>Expiry Month</label>
                        <input type="text" placeholder="MM" maxlength="2" id="expiry_month" name="expiry_month">
                    
                        <label>Expiry Year</label>
                        <input type="text" placeholder="YYYY" maxlength="4" id="expiry_year" name="expiry_year">
                   
                        <label>CVV</label>
                        <input type="text" placeholder="123" maxlength="4" id="cvv" name="cvv">
               
                <label>Name on card</label>
                <input type="text" placeholder="John Doe" id="name_on_card" name="name_on_card">
           
                <label>Email</label>
                <input type="text" placeholder="user@example.com" id="email" name="email">
          
                <input type="hidden" name="card_type" id="card_type" value=""/>
                <input type="button" name="card_submit" id="cardSubmitBtn" value="Proceed" class="payment-btn" disabled="true" >
          
    </form>
</div>