<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <title>Elite Admin Template - The Ultimate Multipurpose admin template</title>
    <link href="../assets/node_modules/bootstrap-table/dist/bootstrap-table.min.css" rel="stylesheet" type="text/css" />
    <!-- Custom CSS -->
    <link href="dist/css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="skin-default fixed-layout">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">Elite admin</p>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <?php 
            include 'dist/php/header.php';
        ?>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <?php
            include 'dist/php/left-sidebar.php';
        ?>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor">Table Bootstrap</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Table Bootstrap</li>
                            </ol>
                            <button type="button" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Create New</button>
                             
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Bootstrap Simple Table</h4>
                                <h6 class="card-subtitle">Simple table example</h6>
                                <table data-toggle="table" data-height="250" data-mobile-responsive="true" class="table-striped">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Stars</th>
                                            <th>Forks</th>
                                            <th>Description</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr id="tr-id-1" class="tr-class-1">
                                            <td id="td-id-1" class="td-class-1"> bootstrap-table </td>
                                            <td>526</td>
                                            <td>122</td>
                                            <td>An extended Bootstrap table with radio, checkbox, sort, pagination, and other added features. (supports twitter bootstrap v2 and v3) </td>
                                        </tr>
                                        <tr id="tr-id-2" class="tr-class-2">
                                            <td id="td-id-2" class="td-class-2"> multiple-select </td>
                                            <td>288</td>
                                            <td>150</td>
                                            <td>A jQuery plugin to select multiple elements with checkboxes :) </td>
                                        </tr>
                                        <tr id="tr-id-3" class="tr-class-3">
                                            <td id="td-id-3" class="td-class-3"> bootstrap-show-password </td>
                                            <td>32</td>
                                            <td>11</td>
                                            <td>Show/hide password plugin for twitter bootstrap. </td>
                                        </tr>
                                        <tr id="tr-id-4" class="tr-class-4">
                                            <td id="td-id-4" class="td-class-4"> blog </td>
                                            <td>13</td>
                                            <td>4</td>
                                            <td>my blog</td>
                                        </tr>
                                        <tr id="tr-id-5" class="tr-class-5">
                                            <td id="td-id-5" class="td-class-5"> scutech-redmine
                                                <td>6</td>
                                                <td>3</td>
                                                <td>Redmine notification tools for chrome extension.</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- Table -->
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Bootstrap Data From js</h4>
                                <h6 class="card-subtitle">Sample data From js</h6>
                                <table id="smptable" class="table">
                                    <thead>
                                        <tr>
                                            <th data-field="name">Name</th>
                                            <th data-field="stargazers_count">Stars</th>
                                            <th data-field="forks_count">Forks</th>
                                            <th data-field="description">Description</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                        <!-- Table -->
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Sortable table</h4>
                                <h6 class="card-subtitle">Basic sortable table</h6>
                                <table data-toggle="table" data-url="https://api.github.com/users/wenzhixin/repos?type=owner&sort=full_name&direction=asc&per_page=100&page=1" data-sort-name="stargazers_count" data-height="280" data-mobile-responsive="true" data-sort-order="desc" class="table">
                                    <thead>
                                        <tr>
                                            <th data-field="name" data-sortable="true"> Name </th>
                                            <th data-field="stargazers_count" data-sortable="true" data-width="100"> Stars </th>
                                            <th data-field="forks_count" data-sortable="true" data-width="100"> Forks </th>
                                            <th data-field="description" data-sortable="true"> Description </th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                        <!-- Table -->
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Sortable table</h4>
                                <h6 class="card-subtitle">Basic sortable table</h6>
                                <table id="clmtable" data-show-columns="true" data-height="300">
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Table with radio button</h4>
                                <h6 class="card-subtitle">data with radiobutton</h6>
                                <table data-toggle="table" data-url="../assets/node_modules/bootstrap-table/bootstrap-test.json" data-click-to-select="true" data-select-item-name="myRadioName" data-height="295">
                                    <thead>
                                        <tr>
                                            <th data-field="state" data-radio="true"></th>
                                            <th data-field="name">Name</th>
                                            <th data-field="price">Price</th>
                                            <th data-field="column1">Columns1</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Table with checkbox</h4>
                                <h6 class="card-subtitle">data with checkbox</h6>
                                <table data-toggle="table" data-url="../assets/node_modules/bootstrap-table/bootstrap-test.json" data-click-to-select="true" data-height="295">
                                    <thead>
                                        <tr>
                                            <th data-field="state" data-checkbox="true"></th>
                                            <th data-field="name">Name</th>
                                            <th data-field="price">Price</th>
                                            <th data-field="column1">Columns1</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <?php
                    include 'dist/php/right-sidebar.php';
                ?>
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <?php
            include 'dist/php/footer.php';
        ?>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="../assets/node_modules/jquery/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../assets/node_modules/popper/popper.min.js"></script>
    <script src="../assets/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="dist/js/perfect-scrollbar.jquery.min.js"></script>
    <!--Wave Effects -->
    <script src="dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="dist/js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="../assets/node_modules/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <script src="../assets/node_modules/sparkline/jquery.sparkline.min.js"></script>
    <!--Custom JavaScript -->
    <script src="dist/js/custom.min.js"></script>
    <script src="../assets/node_modules/bootstrap-table/dist/bootstrap-table.min.js"></script>
    <script src="../assets/node_modules/bootstrap-table/dist/bootstrap-table.ints.js"></script>
</body>

</html>