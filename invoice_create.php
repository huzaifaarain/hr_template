<!DOCTYPE html>
<html lang="en">
<head><base href="../../../../">
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

    <!-- Page Header PHP -->
    <?php include '../../../../layout/header.php'; ?>
    <!-- End::Page Header PHP -->

    <!-- Start::Page Content -->

    <!-- Page Wrapper -->
    <div class="page-wrapper">
        
        <!-- Page Content -->
        <div class="content container-fluid">
            
            <!-- Page Header -->
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-12">
                        <h3 class="page-title">Create Invoice</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Create Invoice</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->
            
            <div class="row">
                <div class="col-sm-12">
                    <form>
                        <div class="row">
                            <div class="col-sm-6 col-md-3">
                                <div class="form-group">
                                    <label>Client <span class="text-danger">*</span></label>
                                    <select class="select">
                                        <option>Please Select</option>
                                        <option selected>Barry Cuda</option>
                                        <option>Tressa Wexler</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="form-group">
                                    <label>Project <span class="text-danger">*</span></label>
                                    <select class="select">
                                        <option>Select Project</option>
                                        <option selected>Office Management</option>
                                        <option>Project Management</option>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="col-sm-6 col-md-3">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input class="form-control" type="email">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="form-group">
                                    <label>Tax</label>
                                    <select class="select">
                                        <option>Select Tax</option>
                                        <option>VAT</option>
                                        <option>GST</option>
                                        <option>No Tax</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="form-group">
                                    <label>Client Address</label>
                                    <textarea class="form-control" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="form-group">
                                    <label>Billing Address</label>
                                    <textarea class="form-control" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="form-group">
                                    <label>Invoice date <span class="text-danger">*</span></label>
                                    <div class="cal-icon">
                                        <input class="form-control datetimepicker" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="form-group">
                                    <label>Due Date <span class="text-danger">*</span></label>
                                    <div class="cal-icon">
                                        <input class="form-control datetimepicker" type="text">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <div class="table-responsive">
                                    <table class="table table-hover table-white">
                                        <thead>
                                            <tr>
                                                <th style="width: 20px">#</th>
                                                <th class="col-sm-2">Item</th>
                                                <th class="col-md-6">Description</th>
                                                <th style="width:100px;">Unit Cost</th>
                                                <th style="width:80px;">Qty</th>
                                                <th>Amount</th>
                                                <th> </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>
                                                    <input class="form-control" type="text" style="min-width:150px">
                                                </td>
                                                <td>
                                                    <input class="form-control" type="text" style="min-width:150px">
                                                </td>
                                                <td>
                                                    <input class="form-control" style="width:100px" type="text">
                                                </td>
                                                <td>
                                                    <input class="form-control" style="width:80px" type="text">
                                                </td>
                                                <td>
                                                    <input class="form-control" readonly style="width:120px" type="text">
                                                </td>
                                                <td><a href="javascript:void(0)" class="text-success font-18" title="Add"><i class="fa fa-plus"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>
                                                    <input class="form-control" type="text" style="min-width:150px">
                                                </td>
                                                <td>
                                                    <input class="form-control" type="text" style="min-width:150px">
                                                </td>
                                                <td>
                                                    <input class="form-control" style="width:100px" type="text">
                                                </td>
                                                <td>
                                                    <input class="form-control" style="width:80px" type="text">
                                                </td>
                                                <td>
                                                    <input class="form-control" readonly style="width:120px" type="text">
                                                </td>
                                                <td><a href="javascript:void(0)" class="text-danger font-18" title="Remove"><i class="fa fa-trash-o"></i></a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-hover table-white">
                                        <tbody>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td class="text-right">Total</td>
                                                <td style="text-align: right; padding-right: 30px;width: 230px">0</td>
                                            </tr>
                                            <tr>
                                                <td colspan="5" class="text-right">Tax</td>
                                                <td style="text-align: right; padding-right: 30px;width: 230px">
                                                    <input class="form-control text-right" value="0" readonly type="text">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="5" class="text-right">
                                                    Discount %
                                                </td>
                                                <td style="text-align: right; padding-right: 30px;width: 230px">
                                                    <input class="form-control text-right" type="text">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="5" style="text-align: right; font-weight: bold">
                                                    Grand Total
                                                </td>
                                                <td style="text-align: right; padding-right: 30px; font-weight: bold; font-size: 16px;width: 230px">
                                                    $ 0.00
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>                               
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Other Information</label>
                                            <textarea class="form-control"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="submit-section">
                            <button class="btn btn-primary submit-btn m-r-10">Save & Send</button>
                            <button class="btn btn-primary submit-btn">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- /Page Content -->
        
    </div>
    <!-- /Page Wrapper -->

    <!-- End::Page Content -->

    <!-- Page::Footer -->
    <?php include '../../../../layout/footer.php'; ?>

    <!-- Extra JavaScript Here -->
    <!-- Select2 JS -->
    <script src="assets/js/select2.min.js"></script>
    
    <!-- Datetimepicker JS -->
    <script src="assets/js/moment.min.js"></script>
    <script src="assets/js/bootstrap-datetimepicker.min.js"></script>

</body>
</html>