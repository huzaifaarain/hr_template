<!DOCTYPE html>
<html lang="en">
<head><base href="../../../">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<meta name="description" content="Smarthr - Bootstrap Admin Template">
	<meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
	<meta name="author" content="Dreamguys - Bootstrap Admin Template">
	<meta name="robots" content="noindex, nofollow">
	<title>Dashboard - HRMS admin template</title>
	<!-- Extra Css Here -->
	<!-- Datatable CSS -->
	<link rel="stylesheet" href="assets/css/dataTables.bootstrap4.min.css">

	<!-- Select2 CSS -->
	<link rel="stylesheet" href="assets/css/select2.min.css">

	<!-- Datetimepicker CSS -->
	<link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css">

	<!-- Page Header PHP -->
	<?php include '../../../layout/header.php'; ?>
	<!-- End::Page Header PHP -->

	<!-- Start::Page Content -->

	<div class="page-wrapper">
		
		<!-- Page Content -->
		<div class="content container-fluid">
			
			<!-- Page Header -->
			<div class="page-header">
				<div class="row">
					<div class="col-sm-12">
						<h3 class="page-title">Invoice Report</h3>
						<ul class="breadcrumb">
							<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
							<li class="breadcrumb-item active">Invoice Report</li>
						</ul>
					</div>
				</div>
			</div>
			<!-- /Page Header -->
			
			<!-- Search Filter -->
			<div class="row filter-row">
				<div class="col-sm-6 col-md-3"> 
					<div class="form-group form-focus select-focus">
						<select class="select floating"> 
							<option>Select Client</option>
							<option>Global Technologies</option>
							<option>Delta Infotech</option>
						</select>
						<label class="focus-label">Client</label>
					</div>
				</div>
				<div class="col-sm-6 col-md-3">  
					<div class="form-group form-focus">
						<div class="cal-icon">
							<input class="form-control floating datetimepicker" type="text">
						</div>
						<label class="focus-label">From</label>
					</div>
				</div>
				<div class="col-sm-6 col-md-3">  
					<div class="form-group form-focus">
						<div class="cal-icon">
							<input class="form-control floating datetimepicker" type="text">
						</div>
						<label class="focus-label">To</label>
					</div>
				</div>
				<div class="col-sm-6 col-md-3">  
					<a href="#" class="btn btn-success btn-block"> Search </a>  
				</div>     
			</div>
			<!-- /Search Filter -->
			
			<div class="row">
				<div class="col-md-12">
					<div class="table-responsive">
						<table class="table table-striped custom-table mb-0 datatable">
							<thead>
								<tr>
									<th>#</th>
									<th>Invoice Number</th>
									<th>Client</th>
									<th>Created Date</th>
									<th>Due Date</th>
									<th>Amount</th>
									<th>Status</th>
									<th class="text-right">Action</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td><a href="admin/hr/reports/invoice_view.php">#INV-0001</a></td>
									<td>Global Technologies</td>
									<td>11 Mar 2019</td>
									<td>17 Mar 2019</td>
									<td>$2099</td>
									<td><span class="badge bg-inverse-success">Paid</span></td>
									<td class="text-right">
										<div class="dropdown dropdown-action">
											<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
											<div class="dropdown-menu dropdown-menu-right">
												<a class="dropdown-item" href="admin/hr/reports/invoice_edit.php"><i class="fa fa-pencil m-r-5"></i> Edit</a>
												<a class="dropdown-item" href="admin/hr/reports/invoice_view.php"><i class="fa fa-eye m-r-5"></i> View</a>
												<a class="dropdown-item" href="#"><i class="fa fa-file-pdf-o m-r-5"></i> Download</a>
												<a class="dropdown-item" href="#"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
											</div>
										</div>
									</td>
								</tr>
								<tr>
									<td>2</td>
									<td><a href="admin/hr/reports/invoice_view.php">#INV-0002</a></td>
									<td> 	Delta Infotech</td>
									<td>11 Mar 2019</td>
									<td>17 Mar 2019</td>
									<td>$2099</td>
									<td><span class="badge bg-inverse-info">Sent</span></td>
									<td class="text-right">
										<div class="dropdown dropdown-action">
											<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
											<div class="dropdown-menu dropdown-menu-right">
												<a class="dropdown-item" href="admin/hr/reports/invoice_edit.php"><i class="fa fa-pencil m-r-5"></i> Edit</a>
												<a class="dropdown-item" href="admin/hr/reports/invoice_view.php"><i class="fa fa-eye m-r-5"></i> View</a>
												<a class="dropdown-item" href="#"><i class="fa fa-file-pdf-o m-r-5"></i> Download</a>
												<a class="dropdown-item" href="#"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
											</div>
										</div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
		<!-- /Page Content -->
		
	</div>

	<!-- End::Page Content -->

	<!-- Page::Footer -->
	<?php include '../../../layout/footer.php'; ?>

	<!-- Extra JavaScript Here -->
	<!-- Select2 JS -->
	<script src="assets/js/select2.min.js"></script>

	<!-- Datatable JS -->
	<script src="assets/js/jquery.dataTables.min.js"></script>
	<script src="assets/js/dataTables.bootstrap4.min.js"></script>

	<!-- Datetimepicker JS -->
	<script src="assets/js/moment.min.js"></script>
	<script src="assets/js/bootstrap-datetimepicker.min.js"></script>

</body>
</html>