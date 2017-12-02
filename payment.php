<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	

		<title>Gram Net</title>

		<script language="javascript" type="text/javascript" src="asd.js"></script>
		<link rel="stylesheet" href="assets/demo.css">
		<link rel="stylesheet" href="assets/form-labels-on-top.css">
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
				<form class="form-labels-on-top" method="post" action="#">
					<div class="form-title-row">
						<h1>Confirmation</h1>
						<div class="form-row">
							<label>
								<span>Phone Number:</span>
								<input type="text" name="name" value="#phn-no">
							</label>
						</div>
						<div class="form-row">
							<label>
								<span>Plan:</span>
								<input type="text" name="plan" value="#Plan#">
							</label>
						<div class="form-row">
							<label>
								<input type="checkbox" name="paybalance" checked>Pay via balance of sim</input>
							</label>
						</div>
						<div>
							<button type="submit"><a href="final.php">Submit</a></button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</body>
</html>