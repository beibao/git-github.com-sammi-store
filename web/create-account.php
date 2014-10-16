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
<div class="main ng-scope" ng-view=""><div class="content ng-scope">
    <form id="create-account" method="POST" class="ng-pristine ng-valid">
        <div class="field">
            <input type="text" placeholder="Full name" name="full_name">
            <div class="full_name error"></div>
        </div>
        <div class="field">
            <input type="text" placeholder="Shipping address" name="shipping_address">
            <div class="shipping_address error"></div>
        </div>
        <div class="field">
            <input type="text" placeholder="Email" name="primary_email">
            <div class="primary_email error"></div>
        </div>
        <div class="field">
            <input type="text" placeholder="Phone" name="phone">
            <div class="phone error"></div>
        </div>
        <div class="field">
            <input type="password" placeholder="Create password" name="password">
            <div class="password error"></div>
        </div>
        <input type="hidden" id="retype_password" name="retype_password">
        <div class="action">
            <button type="submit" ng-click="submitCreate()">Create account</button>
        </div>
    </form>
</div></div>



    </div>
    
</div>
<div class="clear"></div>
<?php require_once('foot.php'); ?>
</body>
</html>
