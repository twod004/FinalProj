<!DOCTYPE html>
<html lang="en">

<head>
  <title>Food Fighters</title>
  <meta charset="utf-8">
  <script type="text/javascript" src="js/checkout.js"></script>
  <link rel="stylesheet" href="css/checkout.css">
</head>

<body>
<div id="wrapper">
  <div id="logo">
    <a href="home.html"><img src="images/logo.png"></a>
  </div>
  <div id="nav">
    <a href="menu.html">Menu</a>
    <a href="myOrder.html">My Order</a>
    <a href="contactUs.html">Contact Us</a>
  </div>
  <div id="content">
		<div id="checkout-info">
			<div class="col" id="customer-details">
				<h2>Customer Details</h2>
				<div class="customer-details-row">
					<div class="inline-input">
						<label for="customer-first-name">First Name</label><br>
						<input type="text" name="customer-first-name" id="customer-first-name" required>
					</div>
					<div class="inline-input">
						<label for="customer-last-name">Last Name</label><br>
						<input type="text" name="customer-last-name" id="customer-last-name" required>
					</div>
					<div style="clear:both"></div>
				</div>
				<div class="customer-details-row">
					<label for="customer-address">Address</label><br>
					<textarea name="customer-address" id="customer-address" rows="4" required></textarea>
				</div>
				<div class="customer-details-row">
					<div  class="inline-input">
						<label for="customer-contact">Contact</label><br>
						<input type="text" name="customer-contact" id="customer-contact" required>
					</div>
					<div class="inline-input">
						<label for="customer-email">Email</label><br>
						<input type="email" name="customer-email" id="customer-email" required>
					</div>
					<div style="clear:both"></div>
				</div>
				<div class="customer-details-row" id="payment-method">
					<label>Payment Method</label><br>
					<div class="inline-input">
						<label>
							<input type="radio" name="visa" id="visa">
							<img src="images/visa.png">
						</label>
					</div>
					<div class="inline-input">
						<label>
							<input type="radio" name="visa" id="visa">
							<img src="images/mastercard.png">
						</label>
					</div>
					<div class="inline-input">
						<label>
							<input type="radio" name="visa" id="visa">
							<img src="images/paypal.png">
						</label>
					</div>
				</div>
				<div style="clear:both"></div>
				<h2>Advance Delivery</h2>
				<div class="customer-details-row">
					<label for="delivery-date">Date</label><br>
					<input type="date" name="delivery-date" id="delivery-date">
				</div>
				<div class="customer-details-row">
					<label for="delivery-time">Time</label><br>
					<input type="time" name="delivery-time" id="delivery-time">
				</div>
			</div>
			<div class="col" id="order-details">
				<h2>Order Details</h2>
				<table border="0">
					<tr>
						<th class="left">Qty Item</th>
						<th class="right">Total</th>
					</tr>
					<tr>
						<td class="left">McSpicy</td>
						<td class="right">9.90</td>
					</tr>
					<tr>
						<td class="left">Big Mac</td>
						<td class="right">3.90</td>
					</tr>
					<tr class="blank-row">
					</tr>
					<tr>
						<th class="left">SubTotal</th>
						<td class="right">13.80</td>
					</tr>
					<tr>
						<th class="left">Tax</th>
						<td class="right">1.80</td>
					</tr>
					<tr>
						<th class="left">Delivery Charge</th>
						<td class="right">1.00</td>
					</tr>
					<tr class="blank-row">
					</tr>
					<tr id="net-total">
						<th class="left">Net Total</td>
						<th class="right">10.40</th>
					</tr>
				</table>
				<div id="place-order">
					<a href="placeorder.html">
						Place Order
					</a>
				</div>
			</div>
			<div style="clear:both"></div>
		</div>
  </div>
</div>
<div id="footer">
    <small><i>Copyright &copy 2017 Food Fighters</i></small>
</div>

</body>
</html>

</html>
