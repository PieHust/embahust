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

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<style type="text/css">
    img:hover{
        cursor:pointer;

    }
    img{
        box-sizing: border-box;
        border:1px solid lightgray;
    }
</style>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">请登录</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" action=<?php echo U('login/login');?> method="post">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="user name" name="username" type="text" autofocus required>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="" required>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="verify" name="verify" type="text" value="" required style="width: 60%;float: left;"><img src=<?php echo U('login/verify');?> onclick = "this.src ='/embahust/index.php/Admin/login/verify/'+Math.random()" style="float: left;width: 40%;height: 34px;border-radius: 3px;">
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <div style="clear: both;"></div>
                                <br/>
                                <input type="submit" class="btn btn-lg btn-success btn-block" value="登录">
                                <span style='color: red;'><?php echo ((isset($error) && ($error !== ""))?($error):''); ?></span>

                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    <!-- jQuery -->
    <script src="/embahust/Public/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/embahust/Public/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="/embahust/Public/bower_components/metisMenu/dist/metisMenu.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="/embahust/Public/dist/js/sb-admin-2.js"></script>
    <!--[if lte IE 9]>
    <script type="text/javascript">
    document.getElementsByTagName('body')[0].innerHTML = '<div class="attention">' +
        '<div class="tip">' +
        '<div class="tip-head">' +
        '<img src="../images/browser/tip.png" alt="友情提示">' +
        '</div>' +
        '<div class="tip-content">' +
        '<img src="../images/browser/tip1.png" alt="友情提示">' +
        '</div>' +
        '</div>' +
        '<div class="browser">' +
        '<a href="https://www.google.com/intl/zh-CN/chrome/browser/desktop/index.html" target="_blank" class="xiazai">' +
        '<img src="../images/browser/chrome.png" alt="chrome">' +
        '</a>' +
        '<a href="http://www.opera.com/zh-cn" class="xiazai" target="_blank">' +
        '<img src="../images/browser/opera.png" alt="opera">' +
        '</a>' +
        '<a href="https://support.apple.com/zh_CN/downloads/" class="xiazai" target="_blank">' +
        '<img src="../images/browser/safari.png" alt="safari">' +
        '</a>' +
        '</div>' +
        '</div>';
    </script>

   <![endif]-->
</body>

</html>