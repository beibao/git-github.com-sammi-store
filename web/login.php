<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>

<body>
<?php require_once('head.php'); ?>
<div class="content">
    <div class="login">
                <form action="shopping-list.html" method="POST">
                        <div class="icon login-name"></div>
                        <p>
                          <input name="login_name" type="text" class="login-name" placeholder="Login name" size="26"/>
                        </p>
                        <p>
                          <input name="password" type="password" class="password" placeholder="Enter your password" autocomplete="off" size="26" />
                        </p>
                        <p>
                        <button>Sign in</button></p>
                </form>

                <div>
                        <div><a href="create-account.php">Join free now !</a>
                        &nbsp;&nbsp;&nbsp;<a href="forget-password.html">Forget password?</a></div>
                </div>


    </div>
    
</div>
<div class="clear"></div>
<?php require_once('foot.php'); ?>
</body>
</html>
