<?php 
header("Content-type: text/html; charset=gb1312"); 
require_once("../source/version.php");
?>
<html>
<head>
<title>����ѧ�� BETA</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="format-detection" content="telephone=no">
<meta name="renderer" content="webkit">
<meta http-equiv="Cache-Control" content="no-siteapp" />
<link rel="stylesheet" href="http://cdn.amazeui.org/amazeui/2.4.1/css/amazeui.min.css"/>
<style>
.header {
	text-align: center;
}
	.header h1 {
		font-size: 150%;
        color: #333;
        margin-top: 15px;
	}
		.header p {
			font-size: 14px;
		}
</style>
</head>
<?php require_once("../source/piwik.html"); ?>
<body>
<div class="header">
<div class="am-g">
<h1>����ѧ��</h1>
<p>���ĵ�¼��Ϣ����ͬ�����Ʋƴ�ƽ̨���������ģ����ǽ����ᱣ��������Ϣ�������ѡһ�Ϳ����ˡ�</p>
</div>
<hr />
</div>
<div class="am-g">
<div class="am-u-lg-6 am-u-md-8 am-u-sm-centered">
<?php error_reporting(E_ALL & ~E_NOTICE); if($_GET['action']=='illegal'){echo '<p class="am-alert am-alert-danger">�Ƿ�����,������!</p>'; } ?>
<form method="post" action="do.php?method=bb" class="am-form">
<label for="TXTXH">ѧ��:</label>
<input name="TXTXH" type="text">
<br/>
<label for="TXTXM">����:</label>
<input name="TXTXM" type="text">
<br/>
<input type="hidden" name="TXTZH">
<div class="am-cf">
<input type="submit" name="CmdFind" value="�� ѯ(Q)" class="am-btn am-btn-primary am-btn-sm am-fl">
</div>
</form>
<?php require_once("../source/footer-gb1312.html"); ?>
</div>
</div>
<?php require_once("../source/kf5-gb1312.html"); ?>
</body>
</html>