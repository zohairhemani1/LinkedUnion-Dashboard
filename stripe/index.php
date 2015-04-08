<?php 
	require_once('config.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>UFCW - Credit Card</title>
<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
</head>

<body>

<form action="charge.php" method="post">
  
    <select id="plan" name="plan">
      <option value=""> SELECT Package </option>
      <?php 
      	include 'headers/pricing-plans.php';
      ?>
    </select>
      
    <script src="https://checkout.stripe.com/v2/checkout.js" id="stripeButton" class="stripe-button"
          data-key="<?php echo $stripe['publishable_key']; ?>"
          data-amount = "" data-description="One year's subscription">
    </script>
      
</form>



</body>
</html>







