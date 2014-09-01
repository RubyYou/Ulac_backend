<!doctype html>
<head ng-app="myApp">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="Author" content="cluster app" />
  <meta name="Keywords" content=""/>
  <meta name="Description" content="" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> Key / Combination Registration </title>
  <!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js">
	</script>
  <![endif]-->
</head>

<body ng-controller="registerCtrl">
<main id="page">

	<h3>Key / Combination Registration</h3>
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

	<form action="storeData.php" method="post" name="registerForm">
		<h3>Client basic information: </h3>
		<div class="inputBox">
			<label for="text-basic"> Client Name *</label>
			<input type="text" name="name" id="text-basic" value="" required>
		</div>
		<div class="inputBox">
			<label for="text-basic"> Phone *</label>
			<input type="number" name="phone" id="text-basic" value="" ng-minlength=10 required>
		</div>
		<div class="inputBox">
			<label name="email" for="text-basic"> Email *</label>
			<input type="email" name="email" id="text-basic" value="" ng-model="email" required>
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
			<label for="passwordA"> Personal password * (for security purpose)</label> 
			<input type="password" id="passwordA" name="passwordA" ng-model="passwordA" required>
		</div>
		<div class="inputBox">
			<label for="passwordB"> Confirm the password </label>
			<input type="password" id="passwordB" name="passwordB" ng-model="passwordB" pw-check="passwordA" required>
		</div>
		<!--<div ng-show="registerForm.passwordB.$error.pwmatch">Passwords do not match!</div>-->

		<h3>Please provide your Lock Model information? </h3>
		<p>Please provides your lock model and combination.
		   Maximum five lock register for one user. </p>
		<div class="inputBox">
			<label for="text-basic"> Lock Model *</label>
			<input type="text" name="lockModel" id="text-basic" value="" required>
		</div>
		<div class="inputBox">
			<label for="text-basic"> Key # or Combination</label>
			<input type="number" name="key_combination" id="text-basic" value="" required>
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
		<input type="submit" value="submit"/>
	</form>

</main>
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
<script src="js/angular.min.js"></script>
<script>
'use strict';
angular.module('myApp', ['myApp.directives']);

/* Controllers */
function registerCtrl($scope) {
    $scope.passwordA = 'password';
}

/* Directives */
angular.module('myApp.directives')
    .directive('pwCheck', [function () {
    return {
        require: 'ngModel',
        link: function (scope, elem, attrs, ctrl) {
            var firstPassword = '#' + attrs.pwCheck;
            elem.add(firstPassword).on('keyup', function () {
                scope.$apply(function () {
                    // console.info(elem.val() === $(firstPassword).val());
                    ctrl.$setValidity('pwmatch', elem.val() === $(firstPassword).val());
                });
            });
        }
    }
}]);
</script>
</body>
</html>