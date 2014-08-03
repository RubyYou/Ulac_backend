<!doctype html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="Author" content="cluster app" />
  <meta name="Keywords" content=""/>
  <meta name="Description" content="" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="apple-mobile-web-app-capable" content="yes" />
  <title> Key/Combination Registration </title>
  <!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js">
	</script>
  <![endif]-->
  <style type="text/css" >
		#page{
			padding:10px 20px;
		}
		.inputBox{
			width:100%;
			padding:10px 30px 0 0;
		}
		.inputBox label{
			width:200px;
		}
  </style>
</head>

<body>
<main id="page">

	<h3> Key / Combination Registration </h3>
	<p><b>Key Registration</b><br/>
		It happens. You could lose your keys. Many of our locks are 
		sold with the Key Safe Program. Register your keys below and 
		if you do lose them we'll replace your keys. With many of our locks, 
		you receive the first two keys free!
	</p>

	<p><b>Combination Registration</b><br/>
		Register your pre-set or resettable combination cable with us at no charge. 
		If you lose or forget your combination, just give us a call and we'll be happy 
		to provide it for you.
		Registering your key number or combination with Kryptonite does not automatically 
		activate your anti-theft protection registration (if available with your lock). 
		You must register for anti-theft protection coverage separately.

		// this service is currently only offer for people who living in China.
	</p>

	<form action="storeData.php" method="post">
		<h3>Client basic information: </h3>
		<div class="inputBox">
			<label for="text-basic"> Client Name *</label>
			<input type="text" name="name" id="text-basic" value="">
		</div>
		<div class="inputBox">
			<label for="text-basic"> Phone *</label>
			<input type="text" name="phone" id="text-basic" value="">
		</div>
		<div class="inputBox">
			<label for="text-basic"> Email *</label>
			<input type="text" name="email" id="text-basic" value="">
		</div>
		<div class="inputBox">
			<label for="text-basic"> City </label> 
			<input type="text" name="city" id="text-basic" value="">
		</div>
		<div class="inputBox">
			<label for="text-basic"> Address </label>
			<input type="text" name="address" id="text-basic" value="">
		</div>
		<div class="inputBox">
			<label for="text-basic"> Personal password (for security purpose)</label> 
			<input type="text" name="password" id="text-basic" value="">
		</div>
		<div class="inputBox">
			<label for="text-basic"> Match the password </label>
			<input type="text" name="passwordMatch" id="text-basic" value="">
		</div>

		<h3>What is your Lock Model? </h3>
		<p>Please provides your lock model and combination.
		   Maximum five lock register for one user. </p>
		<div class="inputBox">
			<label for="text-basic"> Lock Model *</label>
			<input type="text" name="lockModel" id="text-basic" value="">
		</div>
		<div class="inputBox">
			<label for="text-basic"> Key # or Combination</label>
			<input type="text" name="key_combination" id="text-basic" value="">
		</div>


		<!--<button> Add New // later on do this for multiple keys </button> CLick this add new one-->
		<!--<div class="inputBox">
			<label for="text-basic"> Lock Model </label>
			<input type="text" name="lockModel" id="text-basic" value="">
		</div>
		<div class="inputBox">
			<label for="text-basic"> Key # or Combination</label>
			<input type="text" name="key_combination" id="text-basic" value="">
		</div>-->

	<br/>
		<input type="submit" class="ui-shadow ui-btn ui-corner-all" value="submit"/>


	</form>

</main>
</body>
</html>