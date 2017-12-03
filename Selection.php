<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	

		<title>Gram Net</title>

		<link rel="stylesheet" href="assets/demo.css">
		<link rel="stylesheet" href="assets/form-mini.css">
	</head>
	<body>
		<header>
			<div id="image" style="display:inline;"><img src="gramnet.jpg" height="10%" width="10%"></img></div>
			<h1 style="display:inline; white-space:nowrap;" >Gram-net|<i style="vertical-align:bottom">Connecting Villages~internet</i></h1>
			
		</header>
		
		<ul>
			<li><a href="final.php">Scan QR</a></li>
			<li><a href="Selection.php">Select Package</a></li>
			<li><a href="Payment.php">Pay amount</a></li>
		</ul>
	
		<div class="main-content">
			<div class="form-mini-container">
				<h1> Select Your plan</h1>
				<form class="form-mini" method="get" action="payment.php">
					<div class="form-row">
						Hi User : #Username#, Please Select your plan: 
						<br><br>
						<div class="form-row">
							Choose a pack
							<ol>
								<li>2 rs 50 mb 5 Hrs</li>
								<li> 5 Rs 100 mb 6 Hrs </li>
								<li> 25rs 1 Gb 1 day</li>
								<li>200rs 20 GB 3 days</li>
							</ol>
						</div>
						<label>
							<span>Enter the serial Number of Plan</span>
								<input type="text" name="Plan" id="Plan">
						</label>
					</div>
					<br>
					<div class="form-row">
						<label>
							<span>Enter the phn number you want to recharge</span>
								<input type="text" name="Phn" id="Phn" value="#phn">
						</label>
					</div>
					<div>
						<input type="submit" id ="print"></input>
					</div>
				</form>
			</div>
		</div>
	</body>
</html>
