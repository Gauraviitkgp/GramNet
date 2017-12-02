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
				<form class="form-mini" method="get" action="Selection.php">
					<div class="form-row">
						Hi User : #Username#, Please Select your plan: 
						<br><br>
						<div class="form-radio-buttons">
						<div>
                            <label>
                                <input type="radio" name="radio">
                                <span>2 Rs 50 Mb 5 Hrs</span>
                            </label>
                        </div>

                        <div>
                            <label>
                                <input type="radio" name="radio">
                                <span>5 Rs 100 Mb 5 hrs</span>
                            </label>
                        </div>

                        <div>
                            <label>
                                <input type="radio" name="radio">
                                <span>25 rs 1 GB 1 day </span>
                            </label>
                        </div>
						
						<div>
                            <label>
                                <input type="radio" name="radio">
                                <span>200 rs 20 GB 30 days </span>
                            </label>
                        </div>
					<br>
					<div class="form-row">
						<label>
							<span>Enter the phn number you want to recharge</span>
								<input type="text" name="Phn" id="here">
						</label>
					</div>
					<div>
						<button type="submit"><a href="payment.php">Submit</a></button>
					</div>
				</form>
			</div>
		</div>
	</body>
</html>