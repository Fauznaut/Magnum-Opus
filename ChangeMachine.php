<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <!-- Styling and Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Bungee|Bungee+Inline|Josefin+Sans|Press+Start+2P" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="Styling/Style/style.css">
	<link rel="stylesheet" type="text/css" href="Styling/ChangeMachine/ChangeMachine.css">
    <link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
</head>

<body ng-app="">
	<!-- AngularJS -->
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
	<!-- Header -->
    <?php include 'Static_Elements/header.php';?>
	<!-- Page Content and Control Buttons -->
	<div class="container-fluid contentContainer">
		<div class="row">
			<?php include 'Static_Elements/navbar.php';?>
			<div id="pageContent" class="col-lg-10 pageContent hiddenElement">
				<div class="row contentHeaderRow">
					<div class="col-lg-12">
						<p id="sectionTitle" class="contentHeader hiddenElement">Change Machine</p>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<hr class="headerDivider">
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<p class="paragraphText"><b>The Change Machine will tell you the best way to make change in USD.</b></p>
					</div>
				</div>
				<div class="row contentSpacer">
					<div class="col-lg-12">
						<p class="paragraphText">	This module allows the user to input an amount of money in USD, up to $1,000.00.
												It then tells the user how to best make change for that amount. The Change Machine
												heavily relies on JavaScript, so make sure you have it enabled. This module was
												developed by Fauznaut.</p>
					</div>
				</div>
				<div class="container-fluid moduleContainer">
					<div class="row contentSpacer">
						<div class="col-lg-2">
							<form name="changeMachineForm" class="module">
								<h3 class="bulkText">Money Amount</h3>
								<input id="changeMachineAmount" type="number" name="changeMachineAmount" ng-model="changeMachineAmount" placeholder="Ex: 4.57" min="0.00" max="1000.00"
								ng-model="myDecimal | number : 2" ng-pattern="/^[0-9]+(\.[0-9]{1,2})?$/" step="0.01" required>
								<span class="errorText" ng-cloak="changeMachineForm.changeMachineAmount.$untouched && changeMachineForm.changeMachineAmount.$valid"
								ng-show="changeMachineForm.changeMachineAmount.$touched && changeMachineForm.changeMachineAmount.$invalid"><br><b>Enter an amount between $0.00 and $1000.00</b></span><br>
								<input id="changeMachineSubmit" onclick="ChangeMachine()" type="submit" name="changeMachineSubmit" value="Submit"
								ng-enabled="changeMachineForm.changeMachineAmount.$dirty && changeMachineForm.changeMachineAmount.$valid"
								ng-disabled="changeMachineForm.changeMachineAmount.$pristine || changeMachineForm.changeMachineAmount.$invalid">
							</form>
						</div>
						<div class="col-lg-10">
							<div class="">
							</div>
						</div>
					</div>
					<div class="row contentSpacer textAlignCenter bulkText">
						<div class="col-lg-1">
						</div>
						<div class="col-lg-1">
							<h4 id="hundreds">Hundreds</h4>
						</div>
						<div class="col-lg-1">
							<h4 id="fifties">Fifties</h4>
						</div>
						<div class="col-lg-1">
							<h4 id="twenties">Twenties</h4>
						</div>
						<div class="col-lg-1">
							<h4 id="tens">Tens</h4>
						</div>
						<div class="col-lg-1">
							<h4 id="fives">Fives</h4>
						</div>
						<div class="col-lg-1">
							<h4 id="ones">Ones</h4>
						</div>
						<div class="col-lg-1">
							<h4 id="quarters">Quarters</h4>
						</div>
						<div class="col-lg-1">
							<h4 id="dimes">Dimes</h4>
						</div>
						<div class="col-lg-1">
							<h4 id="nickels">Nickels</h4>
						</div>
						<div class="col-lg-1">
							<h4 id="pennies">Pennies</h4>
						</div>
						<div class="col-lg-1">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Footer -->
	<?php include 'Static_Elements/footer.php';?>
	<!-- JavaScript -->
	<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.1.1.min.js" charset="utf-8"></script>
    <script src="JavaScript/FadeIn.js" charset="utf-8"></script>
	<script src="JavaScript/Buttons.js" charset="utf-8"></script>
	<script src="JavaScript/ChangeMachine.js" charset="utf-8"></script>
</body>

</html>
