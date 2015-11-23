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
                            <a href=<?php echo U('index/enrol');?>>
                                <i class="fa fa-table fa-fw"></i>
                                教育项目
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-wrench fa-fw"></i>
                                    文章管理
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href=<?php echo U('index/newslist');?>>文章列表</a>
                                </li>
                                <li>
                                    <a href="buttons.html">文章添加</a>
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
                                    <a href=<?php echo U('index/teacherlist');?>>教师列表</a>
                                </li>
                                <li>
                                    <a href=<?php echo U('index/addtea');?>>教师添加</a>
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
                    <div class="col-lg-12"> <style type="text/css">
    #dataTables-example_filter{
        display: none;
    }
    td{
        line-height: 100%;  
    }
 </style>
 <div class="panel panel-default" style="margin-top: 40px;">
                        <div class="panel-heading">
                            在线报名信息管理
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>姓名</th>
                                            <th>标题</th>
                                            <th>联系方式</th>
                                            <th>操作方式</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>

                                    <?php foreach ($arr as $k => $v):?>
                                        <tr class=>
                                            <td><?php echo ($v["name"]); ?></td>
                                            <td><?php echo ($v["title"]); ?></td>
                                            <td><?php echo ($v["tell"]); ?></td>
                                            <td><a style="margin-left:30%;" class='fa fa-file-text' title="查看" href="/embahust/index.php/Admin/index/showenrol?id=<?php echo ($v["id"]); ?>"></a>
                                                <a style="margin-left: 30%;" href="/embahust/index.php/Admin/index/delenrol?id=<?php echo ($v["id"]); ?>" class='fa fa-trash-o' title='删除'>
                                            </a>
                                            </td>
                                            
                                        </tr>
                                    <?php endforeach;?>  
                                        
                                      
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                            
                        </div>
                        <!-- /.panel-body -->
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
    <script type="text/javascript" src="/embahust/Public/js/getUrl.js"></script>
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
    });
    </script>

</body>

</html>