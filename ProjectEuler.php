<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <!-- Styling and Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Bungee|Bungee+Inline|Josefin+Sans|Press+Start+2P" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="Styling/Style/style.css">
    <link rel="stylesheet" type="text/css" href="Styling/ProjectEuler/ProjectEuler.css">
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
            <?php include 'Static_Elements/navbar.php'?>
            <div id="pageContent" class="col-lg-10 pageContent hiddenElement">
                <div class="row contentHeaderRow">
					<div class="col-lg-12">
						<p id="sectionTitle" class="contentHeader hiddenElement">Project Euler</p>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<hr class="headerDivider">
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<p class="paragraphText"><b>Progress on Project Euler</b></p>
					</div>
				</div>
				<div class="row contentSpacer">
					<div class="col-lg-12">
						<p class="paragraphText">	This module displays my project on Project Euler. This is
                        just here to document and compile progress, nothing more. This module was developed by Fauznaut.</p>
					</div>
				</div>
                <div class="container-fluid moduleContainer">
                    <div class="row">
                        <div class="col-lg-4">
                            <form class="module textAlignCenter">
                                <h1 class="defaultText">Activity 8</h1>
                                <h3 class="bulkText">Number to be Scanned</h3>
                                <input id="LPSSeries" type="text">
                                <h3 class="bulkText">How many factors?</h3>
                                <input id="LPSFactor" type="number">
                                <input id="LPSSubmit" type="submit" onclick="LargestProductInASeries();" value="Submit">
                                <h3 class="bulkText">Largest Product in the Series:</h3>
                                <h2 id="LPSOutput" class="paragraphText"></h2>
                            </form>
                        </div>
                        <div class="col-lg-4">
                            <form class="module textAlignCenter">
                                <h1 class="defaultText">Activity 9</h1>
                            </form>
                        </div>
                        <div class="col-lg-4">
                            <form class="module textAlignCenter">
                                <h1 class="defaultText">Activity 10</h1>
                                <h3 class="bulkText">Maximum Limit of Primes</h3>
                                <input id="SOPMax" type="number">
                                <input id="SOPSubmit" type="submit" onclick="SummationOfPrimes();" value="Submit">
                                <h3 class="bulkText">Summation of Primes:</h3>
                                <h2 id="SOPOutput" class="paragraphText"></h2>
                            </form>
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
	<script src="JavaScript/ProjectEuler.js" charset="utf-8"></script>
</body>

</html>
