<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	

		<title>Gram Net</title>
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
			<form class="form-labels-on-top" method="post" action="final_submission.php">
			
				<div class="form-title-row">
					<h1>QR Code</h1>
				</div>
				
				<div class="form-row">
					<label>
						<span>Scan Your QR code here</span>
						<div id="reader" style="width:300px;height:250px">
						</div>
                	</label>
           		</div><br><br>
				
				<h2>OR</h2>
				<br><br>
				
				<div class="form-title-row">
					<h1>Enter Aadhar number</h1>
				</div>
				<div class="form-row">
					<label>
						<span>Write your  12 digit Aadhar:</span>
							<input type="text" name="UID" id="UID">
					</label>
				</div>
				
				<div>
					<input type="submit" id ="print"><a href="Selection.php">Submit</a></input>
				</div>
				
			</form>
		</div>
		<script src="lib/html5_qrcode.min.js" type="text/javascript"></script>
		<script>
			 $('#reader').html5_qrcode(function(data){
 		 // do something when code is read
				},
				function(error){
					//show read errors 
				}, function(videoError){
					//the video stream could be opened
				}
			);
		</script>
	</body>
</html>