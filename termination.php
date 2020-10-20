<!DOCTYPE html>
<html lang="en">
<head><base href="../../">
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
	<?php include '../../layout/header.php'; ?>
	<!-- End::Page Header PHP -->

	<!-- Start::Page Content -->

	<div class="page-wrapper">
		
		<!-- Page Content -->
		<div class="content container-fluid">
			
			<!-- Page Header -->
			<div class="page-header">
				<div class="row align-items-center">
					<div class="col">
						<h3 class="page-title">Termination</h3>
						<ul class="breadcrumb">
							<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
							<li class="breadcrumb-item active">Termination</li>
						</ul>
					</div>
					<div class="col-auto float-right ml-auto">
						<a href="#" class="btn add-btn" data-toggle="modal" data-target="#add_termination"><i class="fa fa-plus"></i> Add Termination</a>
					</div>
				</div>
			</div>
			<!-- /Page Header -->
			
			<div class="row">
				<div class="col-md-12">
					<div class="table-responsive">
						<table class="table table-striped custom-table mb-0 datatable">
							<thead>
								<tr>
									<th>#</th>
									<th>Terminated Employee </th>
									<th>Department</th>
									<th>Termination Type </th>
									<th>Termination Date </th>
									<th>Reason</th>
									<th>Notice Date </th>
									<th class="text-right">Action</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td>
										<h2 class="table-avatar blue-link">
											<a href="admin/performance/profile.php" class="avatar"><img alt="" src="assets/img/profiles/avatar-02.jpg"></a>
											<a href="admin/performance/profile.php">John Doe</a>
										</h2>
									</td>
									<td>Web Development</td>
									<td>Misconduct</td>
									<td>28 Feb 2019</td>
									<td>Lorem Ipsum Dollar</td>
									<td>28 Feb 2019</td>
									<td class="text-right">
										<div class="dropdown dropdown-action">
											<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
											<div class="dropdown-menu dropdown-menu-right">
												<a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_termination"><i class="fa fa-pencil m-r-5"></i> Edit</a>
												<a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_termination"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
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

		<!-- Add Termination Modal -->
		<div id="add_termination" class="modal custom-modal fade" role="dialog">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Add Termination</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<form>
							<div class="form-group">
								<label>Terminated Employee <span class="text-danger">*</span></label>
								<input class="form-control" type="text">
							</div>
							<div class="form-group">
								<label>Termination Type <span class="text-danger">*</span></label>
								<div class="add-group-btn">
									<select class="select">
										<option>Misconduct</option>
										<option>Others</option>
									</select>
									<a class="btn btn-primary" href="javascript:void(0);"><i class="fa fa-plus"></i> Add</a>
								</div>
							</div>
							<div class="form-group">
								<label>Termination Date <span class="text-danger">*</span></label>
								<div class="cal-icon">
									<input type="text" class="form-control datetimepicker">
								</div>
							</div>
							<div class="form-group">
								<label>Reason <span class="text-danger">*</span></label>
								<textarea class="form-control" rows="4"></textarea>
							</div>
							<div class="form-group">
								<label>Notice Date <span class="text-danger">*</span></label>
								<div class="cal-icon">
									<input type="text" class="form-control datetimepicker">
								</div>
							</div>
							<div class="submit-section">
								<button class="btn btn-primary submit-btn">Submit</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- /Add Termination Modal -->
		
		<!-- Edit Termination Modal -->
		<div id="edit_termination" class="modal custom-modal fade" role="dialog">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Edit Termination</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<form>
							<div class="form-group">
								<label>Terminated Employee <span class="text-danger">*</span></label>
								<input class="form-control" type="text" value="John Doe">
							</div>
							<div class="form-group">
								<label>Termination Type <span class="text-danger">*</span></label>
								<div class="add-group-btn">
									<select class="select">
										<option>Misconduct</option>
										<option>Others</option>
									</select>
									<a class="btn btn-primary" href="javascript:void(0);"><i class="fa fa-plus"></i> Add</a>
								</div>
							</div>
							<div class="form-group">
								<label>Termination Date <span class="text-danger">*</span></label>
								<div class="cal-icon">
									<input type="text" class="form-control datetimepicker" value="28/02/2019">
								</div>
							</div>
							<div class="form-group">
								<label>Reason <span class="text-danger">*</span></label>
								<textarea class="form-control" rows="4"></textarea>
							</div>
							<div class="form-group">
								<label>Notice Date <span class="text-danger">*</span></label>
								<div class="cal-icon">
									<input type="text" class="form-control datetimepicker" value="28/02/2019">
								</div>
							</div>
							<div class="submit-section">
								<button class="btn btn-primary submit-btn">Submit</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- /Edit Termination Modal -->
		
		<!-- Delete Termination Modal -->
		<div class="modal custom-modal fade" id="delete_termination" role="dialog">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-body">
						<div class="form-header">
							<h3>Delete Termination</h3>
							<p>Are you sure want to delete?</p>
						</div>
						<div class="modal-btn delete-action">
							<div class="row">
								<div class="col-6">
									<a href="javascript:void(0);" class="btn btn-primary continue-btn">Delete</a>
								</div>
								<div class="col-6">
									<a href="javascript:void(0);" data-dismiss="modal" class="btn btn-primary cancel-btn">Cancel</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Delete Termination Modal -->
		
	</div>

	<!-- End::Page Content -->

	<!-- Page::Footer -->
	<?php include '../../layout/footer.php'; ?>

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