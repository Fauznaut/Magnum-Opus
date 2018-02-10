<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <!-- Styling and Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Bungee|Bungee+Inline|Josefin+Sans|Press+Start+2P" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="Styling/Style/style.css">
    <link rel="stylesheet" type="text/css" href="Styling/ClickMaster/ClickMaster.css">
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
                        <p id="sectionTitle" class="contentHeader hiddenElement">Click Master</p>
                    </div>
                </div>
                <div class="row">
					<div class="col-lg-12">
						<hr class="headerDivider">
					</div>
				</div>
                <div class="row">
					<div class="col-lg-12">
						<p class="paragraphText"><b>The Click Master will test your clicking dexterity.</b></p>
					</div>
				</div>
				<div class="row contentSpacer">
					<div class="col-lg-12">
						<p class="paragraphText">	This module allows the user to test how many times they can click within a
                                                ten second window. Click Master heavily relies on JavaScript, so make sure you
                                                have it enabled. This module was developed by Fauznaut.</p>
					</div>
				</div>
                <div class="container-fluid moduleContainer">
                    <div class="row">
                        <div class="col-lg-3 contentSpacer">
                            <h1 id="ClickMasterTimer">10</h1><br>
                            <h2 id="ClickMasterCounter">0</h2>
                        </div>
                        <div class="col-lg-9">
                            <div class="row">
                                <button id="ClickMasterPlayArea" class="col-lg-12">
                                    <h1 id="ClickMasterPlayAreaText">Click to Start Timer</h1>
                                </button>
                            </div>
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
    <script src="JavaScript/ClickMaster.js" charset="utf-8"></script>
</body>

</html>
