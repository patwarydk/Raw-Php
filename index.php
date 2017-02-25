<?php
require_once 'dal/DB.php';
require_once './function.php';
require_once 'dal/dalSalary.php';
require_once 'dal/dalStaff.php';
require_once 'dal/dalDesignation.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script>
            if (typeof (console.log) === "function")
                (document.title);
        </script>

        <link href="asset/css/bootstrap.min.css" rel="stylesheet">
        <link href="asset/css/bootstrap-theme.min.css" rel="stylesheet">
        <link href="asset/css/bootstrap-social.css" rel="stylesheet">
        <link href="asset/css/font-awesome.min.css" rel="stylesheet" />

    </head>
    <body>
        <div class="container-fluid">
            <!----- Menu -------->
            <section>
                <nav class="navbar navbar-inverse">
                    <div class="container-fluid">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="index.php">GCTL</a>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
                                <li>Link</li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="index.php?v=staff">New Staff</a></li>
                                        <li><a href="index.php?v=designation">Designation Entry</a></li>
                                        <li><a href="index.php?v=salary">Salary</a></li>
                                        <li><a href="index.php?v=salary-view">Report</a></li>
                                    </ul>
                                </li>
                            </ul>

                        </div><!-- /.navbar-collapse -->
                    </div><!-- /.container-fluid -->
                </nav>
            </section>
            <!----- Middle content -------->
            <section>
                <?php
                if (isset($_GET['v'])) {
                    if (file_exists("view/" . $_GET['v'] . "-gctl.php")) {
                        require_once "view/" . $_GET['v'] . "-gctl.php";
                    } else {
                        require_once "view/404-gctl.php";
                    }
                } else {
                    require_once "view/home-gctl.php";
                }
                ?>
            </section>
            <!----- Footer -------->
            <section>
                <!----- Social media -------->
                <div class="panel panel-default">
                    <div class="panel-body">
                        <a href="www.twitter.com" class="btn btn-social-icon btn-twitter">
                            <span class="fa fa-twitter"></span>
                        </a>
                        <a href="www.facebook.com" class="btn btn-social-icon btn-facebook">
                            <span class="fa fa-facebook"></span>
                        </a>
                        <a href="www.linkedin.com" class="btn btn-social-icon btn-linkedin">
                            <span class="fa fa-linkedin"></span>
                        </a>
                    </div>
                    <!----- Bottom footer -------->
                    <div class="panel-footer" align="center">&COPY; <?php echo date('Y') ?> Powered by Md. Mohsin Patary</div>
                </div>
            </section>
        </div>
        <!-- Trigger the modal with a button -->

<!-- Modal -->

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="asset/js/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="asset/js/bootstrap.min.js"></script>
    </body>
</html>