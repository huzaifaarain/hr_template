<!DOCTYPE html>
<html lang="en">
<head><base href="../">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<meta name="description" content="Smarthr - Bootstrap Admin Template">
	<meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
	<meta name="author" content="Dreamguys - Bootstrap Admin Template">
	<meta name="robots" content="noindex, nofollow">
	<title>Dashboard - HRMS admin template</title>
	<!-- Extra Css Here -->
	<!-- Select2 CSS -->
	<link rel="stylesheet" href="assets/css/select2.min.css">

	<!-- Datetimepicker CSS -->
	<link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css">

	<!-- Datatable CSS -->
	<link rel="stylesheet" href="assets/css/dataTables.bootstrap4.min.css">

	<!-- Page Header PHP -->
	<?php include '../layout/header_employee.php'; ?>
	<!-- End::Page Header PHP -->

	<!-- Start::Page Content -->

	<div class="page-wrapper">
		<div class="content container-fluid">
			<div class="row">
				<div class="col-md-6 offset-md-3">
					
					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col-sm-12">
								<h3 class="page-title">Resignation</h3>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
					<form>
						<div class="form-group">
							<label>Resigning Employee <span class="text-danger">*</span></label>
							<input class="form-control" type="text" value="John Doe" readonly>
						</div>
						<div class="form-group">
							<label>Notice Date <span class="text-danger">*</span></label>
							<div class="cal-icon">
								<input type="text" class="form-control datetimepicker">
							</div>
						</div>
						<div class="form-group">
							<label>Resignation Date <span class="text-danger">*</span></label>
							<div class="cal-icon">
								<input type="text" class="form-control datetimepicker">
							</div>
						</div>
						<div class="form-group">
							<label>Reason <span class="text-danger">*</span></label>
							<textarea class="form-control" rows="4"></textarea>
						</div>
						<div class="submit-section">
							<button class="btn btn-primary submit-btn">Submit</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- /Page Content -->
		
	</div>

	<!-- End::Page Content -->

	<!-- Page::Footer -->
	<?php include '../layout/footer_employee.php'; ?>

	<!-- Extra JavaScript Here -->
	<!-- Select2 JS -->
	<script src="assets/js/select2.min.js"></script>

	<!-- Datetimepicker JS -->
	<script src="assets/js/moment.min.js"></script>
	<script src="assets/js/bootstrap-datetimepicker.min.js"></script>

	<!-- Datatable JS -->
	<script src="assets/js/jquery.dataTables.min.js"></script>
	<script src="assets/js/dataTables.bootstrap4.min.js"></script>

</body>
</html>