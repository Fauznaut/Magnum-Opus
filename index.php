<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <!-- Styling and Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Bungee|Bungee+Inline|Josefin+Sans|Press+Start+2P" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="Styling/Style/style.css">
    <link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
</head>

<body>
	<!-- AngularJS -->
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
	<!-- Header -->
    <?php include 'Static_Elements/header.php';?>
	<!-- Control Buttons and Page Content -->
	<div class="container-fluid contentContainer">
		<div class="row">
			<?php include 'Static_Elements/navbar.php';?>
			<div class="col-lg-10 pageContent">
				<div class="row contentHeaderRow">
					<div class="col-lg-12">
						<p id="sectionTitle" class="contentHeader hiddenElement">Home</p>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<hr class="headerDivider">
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<p class="paragraphText"><b>This is the Home Page!</b></p>
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
</body>

</html>
