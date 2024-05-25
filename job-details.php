<?php
if (session_status() === PHP_SESSION_NONE) {
	session_start();
}

include_once "config/connection.php";
?>

<!DOCTYPE html>

<head>

	<!-- Basic Page Needs
================================================== -->
	<title>Blue Collar Insight</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
================================================== -->
	<link rel="stylesheet" href="css/styles.css">
	<link rel="stylesheet" href="css/colors/main.css" id="colors">

</head>

<body>
	<!-- <style>
		.disabled {
			pointer-events: none;
			background-color: #dddddd;
			/* Change the background color to visually indicate it's disabled */
			color: #888888;
			/* Change the text color to visually indicate it's disabled */
		}
	</style> -->
	<!-- Wrapper -->
	<div id="wrapper">

		<!-- Header Container
================================================== -->

		<?php include_once "header.php"; ?>

		<div class="clearfix"></div>
		<!-- Header Container / End -->


		<!-- Gradient-->
		<div class="single-listing-page-titlebar"></div>


		<!-- Content
================================================== -->
		<div class="container">
			<div class="row sticky-wrapper">
				<div class="col-lg-8 col-md-8 padding-right-30">
					<?php

					$jobId = $_GET['id'];
					$userId = isset($_SESSION['id']) ? $_SESSION['id'] : null;

					$conn = $dbh->prepare("SELECT * FROM jobs WHERE id = ?");
					$conn->execute([$jobId]);
					$bring = $conn->fetchAll(PDO::FETCH_ASSOC);

					$alreadyApplied = $dbh->prepare("SELECT userId, jobId FROM appliedjobs WHERE userId = ? AND jobId = ?");
					$alreadyApplied->execute([$userId, $jobId]);
					$alreadyAppliedJobs = $alreadyApplied->fetch();

					$bookmarked = $dbh->prepare("SELECT * FROM bookmarks WHERE jobId = ? AND employeeId = ?");
					$bookmarked->execute([$jobId, $userId]);
					$bookmarkedQuery = $bookmarked->fetchAll(PDO::FETCH_ASSOC);

					foreach ($bring as $job) {

						?>
						<!-- Titlebar -->
						<div id="titlebar" class="listing-titlebar">
							<div class="listing-titlebar-title">
								<h2><?php echo $job['jobTitle'] ?> <span
										class="listing-tag"><?php echo $job['sector'] ?></span></h2>
								<span>
									<a href="company-details?id=<?php echo $job['companyId'] ?>" class="listing-address">
										<i class="fa fa-building"></i>
										<?php echo $job['companyName'] ?>
									</a>
								</span>
								<br>
								<span>
									<p class="listing-address">
										<i class="fa fa-calendar"> Created At: </i>
										<?php echo date('d F, Y', strtotime($job['publishDate'])); ?>
									</p>
								</span>
							</div>
						</div>

						<!-- Overview -->
						<div id="listing-overview" class="listing-section">

							<!-- Description -->

							<p>
								<?php echo $job['jobDescription'] ?>
							</p>
						</div>


						<!-- Location -->
						<div id="listing-location" class="listing-section">
							<h3 class="listing-desc-headline margin-top-60 margin-bottom-30"><i class="fa fa-map-marker"
									style="padding-right:7px;"></i><span><?php echo $job['province']; ?>, Turkiye <?php ?>
								</span></h3>
						</div>

					</div>


					<!-- Sidebar
		================================================== -->
					<div class="col-lg-4 col-md-4 margin-top-75 sticky">


						<!-- Verified Badge -->
						<?php 
						
						$cmp = $dbh->prepare("SELECT * FROM jobs WHERE id = ?");
						$cmp->execute([$jobId]);
						$cmpany = $cmp->fetchAll(PDO::FETCH_ASSOC);

						foreach ($cmpany as $comp) {
							$compVerification = $comp['verified'];
						}
						
						if ($compVerification == 1) {
							echo '<div class="verified-badge with-tip" data-tip-content="This post has been verified and belongs to business owner or manager.">
				<i class="sl sl-icon-check"></i> Verified Listing
			</div>';
						} ?>

						<!-- Apply Now -->
						<div class="boxed-widget booking-widget margin-top-35">
							<!-- progress button animation handled via custom.js -->
							<?php
							if (isset($_SESSION['user']) && empty($alreadyAppliedJobs['userId'])) {
								echo '<a href="model/apply-for-job?id=' . $jobId . '" class="button book-now fullwidth margin-top-5" onclick="return confirmApply()">Apply Now</a>';
							} elseif (isset($_SESSION['user']) && !empty($alreadyAppliedJobs['userId'])) {
								echo '<a href="#" id="disabled-button" class="button book-now fullwidth margin-top-5 disabled">Already Applied</a>';
							} elseif (isset($_SESSION['employer']) && $userId == $job['companyId']) {
								echo '<a href="dashboard/edit-job-post?id=' . $jobId . '" class="button book-now fullwidth margin-top-5">Edit Post</a><br>';
								echo '<a href="dashboard/delete-job-post?id=' . $jobId . '" class="button book-now fullwidth margin-top-5">Delete Post</a><br>';
							}
							?>
						</div>
						<!-- Apply Now / End -->



						<?php
						if (isset($_SESSION['user'])) {
							if (empty($bookmarkedQuery)) {
								echo '<!-- Bookmark -->
        <div class="listing-share margin-top-40 margin-bottom-40 no-border">
            <button id="bookmark-job" class="like-button"><span class="like-icon"></span> Bookmark this post</button> 
            <div class="clearfix"></div>
        </div>
        <!-- Bookmark / End -->';
							} else {
								echo '<!-- Bookmark -->
        <div class="listing-share margin-top-40 margin-bottom-40 no-border">
            <button id="bookmark-job" class="like-button" disabled><span class="like-icon liked"></span> Already Bookmarked</button> 
            <div class="clearfix"></div>
        </div>
        <!-- Bookmark / End -->';
							}
						}
						?>

					</div>
					<!-- Sidebar / End -->

				</div>

			<?php } ?>
		</div>


		<!-- Footer
================================================== -->
		<?php include_once "footer.php"; ?>
		<!-- Footer / End -->


		<!-- Back To Top Button -->
		<div id="backtotop"><a href="#"></a></div>


	</div>
	<!-- Wrapper / End -->

	<!-- Confirm if user wants to apply to the job-->
	<script>
		function confirmApply() {
			// Show a confirmation dialog
			var confirmApply = confirm("Are you sure you want to apply for this job?");
			// Return true if the user confirms, otherwise return false
			return confirmApply;
		}
	</script>

	<script>
		// Prevent default action when the disabled button is clicked
		document.getElementById('disabled-button').addEventListener('click', function (event) {
			event.preventDefault();
		});
	</script>

	<script>
		function redirectToBookmarkModel(jobId) {
			// Redirect to the bookmark model URL with the jobId
			window.location.href = 'model/save-job-model?id=' + jobId;
		}

		// Attach event listener to the button
		document.getElementById('bookmark-job').addEventListener('click', function () {
			redirectToBookmarkModel(<?php echo $jobId ?>);
		});
	</script>

	<!-- Scripts
================================================== -->
	<script type="text/javascript" src="scripts/email-decode.min.js"></script>
	<script type="text/javascript" src="scripts/jquery-2.2.0.min.js"></script>
	<script type="text/javascript" src="scripts/mmenu.min.js"></script>
	<script type="text/javascript" src="scripts/chosen.min.js"></script>
	<script type="text/javascript" src="scripts/slick.min.js"></script>
	<script type="text/javascript" src="scripts/rangeslider.min.js"></script>
	<script type="text/javascript" src="scripts/magnific-popup.min.js"></script>
	<script type="text/javascript" src="scripts/waypoints.min.js"></script>
	<script type="text/javascript" src="scripts/counterup.min.js"></script>
	<script type="text/javascript" src="scripts/jquery-ui.min.js"></script>
	<script type="text/javascript" src="scripts/tooltips.min.js"></script>
	<script type="text/javascript" src="scripts/custom.js"></script>

	<!-- Maps -->
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&amp;language=en"></script>
	<script type="text/javascript" src="scripts/infobox.min.js"></script>
	<script type="text/javascript" src="scripts/markerclusterer.js"></script>
	<script type="text/javascript" src="scripts/maps.js"></script>


	<!-- Date Picker - docs: http://www.vasterad.com/docs/listeo/#!/date_picker -->
	<link href="css/plugins/datedropper.css" rel="stylesheet" type="text/css">
	<script src="scripts/datedropper.js"></script>
	<script>$('#booking-date').dateDropper();</script>

	<!-- Time Picker - docs: http://www.vasterad.com/docs/listeo/#!/time_picker -->
	<script src="scripts/timedropper.js"></script>
	<link rel="stylesheet" type="text/css" href="css/plugins/timedropper.css">
	<script>
		this.$('#booking-time').timeDropper({
			setCurrentTime: false,
			meridians: true,
			primaryColor: "#1ec755",
			borderColor: "#1ec755",
			minutesInterval: '15'
		});

		var $clocks = $('.td-input');
		_.each($clocks, function (clock) {
			clock.value = null;
		});
	</script>

	<!-- Booking Widget - Quantity Buttons -->
	<script src="scripts/quantityButtons.js"></script>



	<!-- Style Switcher
================================================== -->
	<script src="scripts/switcher.js"></script>

	<div id="style-switcher">
		<h2>Color Switcher <a href="#"><i class="sl sl-icon-settings"></i></a></h2>

		<div>
			<ul class="colors" id="color1">
				<li><a href="#" class="main" title="Main"></a></li>
				<li><a href="#" class="blue" title="Blue"></a></li>
				<li><a href="#" class="green" title="Green"></a></li>
				<li><a href="#" class="orange" title="Orange"></a></li>
				<li><a href="#" class="navy" title="Navy"></a></li>
				<li><a href="#" class="yellow" title="Yellow"></a></li>
				<li><a href="#" class="peach" title="Peach"></a></li>
				<li><a href="#" class="beige" title="Beige"></a></li>
				<li><a href="#" class="purple" title="Purple"></a></li>
				<li><a href="#" class="celadon" title="Celadon"></a></li>
				<li><a href="#" class="red" title="Red"></a></li>
				<li><a href="#" class="brown" title="Brown"></a></li>
				<li><a href="#" class="cherry" title="Cherry"></a></li>
				<li><a href="#" class="cyan" title="Cyan"></a></li>
				<li><a href="#" class="gray" title="Gray"></a></li>
				<li><a href="#" class="olive" title="Olive"></a></li>
			</ul>
		</div>

	</div>
	<!-- Style Switcher / End -->


</body>

</html>