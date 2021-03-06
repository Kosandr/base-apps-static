<!DOCTYPE html>  
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="../plugins/images/favicon.png">
    <title>Elite Admin - is a responsive admin template</title>
    <!-- Bootstrap Core CSS -->
    <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <!-- animation CSS -->
    <link href="css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- color CSS -->
    <link href="css/colors/default.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o), m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');
        ga('create', 'UA-19175540-9', 'auto');
        ga('send', 'pageview');
    </script>
</head>
<?php
    include 'php/header.php';
    include 'php/left-sidebar.php'; include 'php/breadcrumbs.php';
    ?>
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row bg-title">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title">Treeview</h4> </div>
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> <a href="https://themeforest.net/item/elite-admin-responsive-dashboard-web-app-kit-/16750820" target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Buy Now</a>
                    <?php echo breadcrumbs(); ?>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- .row -->
            <div class="row">
                <div class="col-md-12">
                    <div class="white-box">
                        <div class="row">
                            <div class="col-sm-4 col-xs-12">
                                <h3 class="box-title">Default</h3>
                                <div id="treeview1" class=""></div>
                            </div>
                            <div class="col-sm-4 col-xs-12">
                                <h3 class="box-title">Collapsed</h3>
                                <div id="treeview2" class=""></div>
                            </div>
                            <div class="col-sm-4 col-xs-12">
                                <h3 class="box-title">Tags as Badges</h3>
                                <div id="treeview3" class=""></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/.row -->
            <!-- .row -->
            <div class="row">
                <div class="col-md-12">
                    <div class="white-box">
                        <div class="row">
                            <div class="col-sm-4 col-xs-12">
                                <h3 class="box-title">Blue Theme</h3>
                                <div id="treeview4" class=""></div>
                            </div>
                            <div class="col-sm-4 col-xs-12">
                                <h3 class="box-title">Custom Icons</h3>
                                <div id="treeview5" class=""></div>
                            </div>
                            <div class="col-sm-4 col-xs-12">
                                <h3 class="box-title">Expanded</h3>
                                <div id="treeview6" class=""></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/.row -->
            <!-- .row -->
            <div class="row">
                <div class="col-md-12">
                    <div class="white-box">
                        <h3 class="box-title">Searchable Tree</h3>
                        <div class="row">
                            <div class="col-sm-4">
                                <h2>Input</h2>
                                <!-- <form> -->
                                <div class="form-group">
                                    <label for="input-search" class="sr-only">Search Tree:</label>
                                    <input type="input" class="form-control" id="input-search" placeholder="Type to search..." value=""> </div>
                                <div class="checkbox checkbox-info">
                                    <input type="checkbox" class="checkbox" id="chk-ignore-case" value="false">
                                    <label for="chk-ignore-case">Ignore Case</label>
                                </div>
                                <div class="checkbox checkbox-info">
                                    <input type="checkbox" class="checkbox" id="chk-exact-match" value="false">
                                    <label for="chk-exact-match">Exact Match</label>
                                </div>
                                <div class="checkbox checkbox-info">
                                    <input type="checkbox" class="checkbox" id="chk-reveal-results" value="false">
                                    <label for="chk-reveal-results">Reveal Results</label>
                                </div>
                                <button type="button" class="btn btn-success" id="btn-search">Search</button>
                                <button type="button" class="btn btn-default" id="btn-clear-search">Clear</button>
                                <!-- </form> -->
                            </div>
                            <div class="col-sm-4">
                                <h2>Tree</h2>
                                <div id="treeview-searchable" class=""></div>
                            </div>
                            <div class="col-sm-4">
                                <h2>Results</h2>
                                <div id="search-output"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/.row -->
            <?php include 'php/right-sidebar.php';?>
        </div>
        <!-- /.container-fluid -->
        <?php include 'php/footer.php';?>
    </div>
    <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="../plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
    <!--slimscroll JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
    <!-- Treeview Plugin JavaScript -->
    <script src="../plugins/bower_components/bootstrap-treeview-master/dist/bootstrap-treeview.min.js"></script>
    <script src="../plugins/bower_components/bootstrap-treeview-master/dist/bootstrap-treeview-init.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="js/custom.min.js"></script>
    <!--Style Switcher -->
    <script src="../plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
    <!--Style Switcher -->
<script src="../plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
</body>

</html>