<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>EMBA Admin</title>

    <!-- Bootstrap Core CSS -->
    <link href="/embahust/Public/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="/embahust/Public/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/embahust/Public/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->

    <link href="/embahust/Public/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <script src="/embahust/Public/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">EMBA Admin</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        欢迎<?php echo session('username');?>登录 <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">

                        <li>
                            <a href=<?php echo U('login/logout');?>>
                                <i class="fa fa-sign-out fa-fw"></i>
                                退出登录
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user --> </li>
                <!-- /.dropdown --> </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">

                        <li>
                            <a href="index.html">
                                <i class="fa fa-dashboard fa-fw"></i>
                                系统主页
                            </a>
                        </li>
                        <li>
                            <a href=<?php echo U('index/enrol');?>>
                                <i class="fa fa-table fa-fw"></i>
                                报名管理
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-wrench fa-fw"></i>
                                新闻管理
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="panels-wells.html">新闻列表</a>
                                </li>
                                <li>
                                    <a href="buttons.html">新闻添加</a>
                                </li>
                                
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-wrench fa-fw"></i>
                                师资管理
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="panels-wells.html">教师列表</a>
                                </li>
                                <li>
                                    <a href="buttons.html">教师添加</a>
                                </li>
                                
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-wrench fa-fw"></i>
                                教育项目管理
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="panels-wells.html">项目列表</a>
                                </li>
                                <li>
                                    <a href="buttons.html">内容添加</a>
                                </li>
                                
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-wrench fa-fw"></i>
                                人才培训管理
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="panels-wells.html">栏目列表</a>
                                </li>
                                <li>
                                    <a href="buttons.html">内容添加</a>
                                </li>
                                
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-wrench fa-fw"></i>
                                教学教务管理
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="panels-wells.html">栏目列表</a>
                                </li>
                                <li>
                                    <a href="buttons.html">内容添加</a>
                                </li>
                                
                            </ul>
                        </li>
                        <li>
                            <a href=<?php echo U('login/logout');?>>
                                <i class="fa fa-sign-out "></i>
                                退出登录
                            </a>
                        </li>

                    </ul>
                </div>
                <!-- /.sidebar-collapse --> </div>
            <!-- /.navbar-static-side --> </nav>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12"><div class="panel panel-default" style="margin-top: 40px;">
    <div class="panel-heading"><?php echo ($arr["name"]); ?> &nbsp;&nbsp;&nbsp;&nbsp;联系方式：<?php echo ($arr["tell"]); ?></div>
    <div class="panel-body">
        <h3><?php echo ($arr["title"]); ?></h3>
        <p class="bg-success">
            <?php echo ($arr["info"]); ?>
        </p>
    </div>
    <div class="panel-footer">由<?php echo (date("Y年m月d日",$arr["time"])); ?>报名成功</div>
</div></div>
                    <!-- /.col-lg-12 --> </div>
                <!-- /.row --> </div>
            <!-- /.container-fluid --> </div>
        <!-- /#page-wrapper --> </div>
    <!-- /#wrapper -->

    <!-- jQuery -->

    <!-- Bootstrap Core JavaScript -->
    <script src="/embahust/Public/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="/embahust/Public/bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="/embahust/Public/dist/js/sb-admin-2.js"></script>

    <!-- DataTables JavaScript -->
    <script src="/embahust/Public/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="/embahust/Public/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
    });
    </script>

</body>

</html>