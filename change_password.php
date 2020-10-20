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
	<!-- Select2 CSS -->
	<link rel="stylesheet" href="assets/css/select2.min.css">

	<!-- Page Header PHP -->
	<?php include '../../../layout/header_noaside.php'; ?>
	<!-- End::Page Header PHP -->

	<!-- Start::Page Content -->

	<div class="sidebar" id="sidebar">
		<div class="sidebar-inner slimscroll">
			<div class="sidebar-menu">
				<ul>
					<li> 
						<a href="admin.php"><i class="la la-home"></i> <span>Back to Home</span></a>
					</li>
					<li class="menu-title">Settings</li>
					<li> 
						<a href="admin/administration/settings/settings.php"><i class="la la-building"></i> <span>Company Settings</span></a>
					</li>
					<li> 
						<a href="admin/administration/settings/localization.php"><i class="la la-clock-o"></i> <span>Localization</span></a>
					</li>
					<li> 
						<a href="admin/administration/settings/permissions_roles.php"><i class="la la-key"></i> <span>Roles & Permissions</span></a>
					</li>
					<li> 
						<a href="admin/administration/settings/salary_settings.php"><i class="la la-money"></i> <span>Salary Settings</span></a>
					</li>
					<li> 
						<a href="admin/administration/settings/notifications_settings.php"><i class="la la-globe"></i> <span>Notifications</span></a>
					</li>
					<li class="active"> 
						<a href="admin/administration/settings/change_password.php"><i class="la la-lock"></i> <span>Change Password</span></a>
					</li>
					<li> 
						<a href="admin/administration/settings/leave_type.php"><i class="la la-cogs"></i> <span>Leave Type</span></a>
					</li>
				</ul>
			</div>
		</div>
	</div>

	<div class="page-wrapper">
		<div class="content container-fluid">
			<div class="row">
				<div class="col-md-6 offset-md-3">
					
					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col-sm-12">
								<h3 class="page-title">Change Password</h3>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
					<form>
						<div class="form-group">
							<label>Old password</label>
							<input type="password" class="form-control">
						</div>
						<div class="form-group">
							<label>New password</label>
							<input type="password" class="form-control">
						</div>
						<div class="form-group">
							<label>Confirm password</label>
							<input type="password" class="form-control">
						</div>
						<div class="submit-section">
							<button class="btn btn-primary submit-btn">Update Password</button>
						</div>
					</form>
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

</body>
</html>