<html>
<?php
header("Content-type: text/html; charset=gb2312"); 
require_once("source/version.php");
require_once("source/piwik.html");
define('SYSTEM_ROOT',dirname(__FILE__));
if(isset($_GET['action']) && isset($_COOKIE["ACCOUNTID"])){
$cookie_file = constant("SYSTEM_ROOT").'/tmp/'.$_COOKIE["ACCOUNTID"].'.tmp';
if($_GET['action']=='Curscopre'){
?>
<head>
<title>�ɼ���ѯ���ҳ</title>
<meta http-equiv="Content-Type" content="text/html; charset=gb1312" /> 
<meta name="renderer" content="webkit">
<link rel="stylesheet" href="http://cdn.amazeui.org/amazeui/2.4.1/css/amazeui.min.css"/>
</head>
<div class="am-g">
      <div class="am-u-sm-12">
        <form class="am-form" action="do.php?action=Cursco" method="POST">
          <table class="am-table am-table-striped am-table-hover table-main">
		    <p class="am-alert am-alert-warning">����������ͨ�������ʾ������ȡ������Ϣ��</p>
            <thead>
              <tr>
               <th></th><th>�γ̺�</th><th>�γ���</th><th>�����</th><th>ѧ��</th><th>����ʱ��</th><th>�ɼ�</th><th>�γ�����</th>
              </tr>
          </thead>
          <tbody>
<?php
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://61.187.92.238:7778/pls/wwwbks/bkscjcx.curscopre");
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie_file); 
$ret = curl_exec($ch);
curl_close($ch);
$nullc = stristr($ret,"TABLE");
if ($nullc)
{
$res = str_replace("checkbox","hidden",$ret);
$ret = str_replace("p_pm","p_pm[]",$res);
$res = strstr($ret,"<TR>");
$ret = str_replace("center","justify",$res);
$res = str_replace("<INPUT","<INPUT class='am-btn am-btn-primary am-radius'",$ret);
echo $res;
echo '<p class="am-alert am-alert-success">�����ɹ���ɣ�</p>';
?>               
                 </div>
                </div>
              </td>
            </tr>
		</tbody>
    </table>

<?php
}else{ 
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://61.187.92.238:7778/pls/wwwbks/bkscjcx.curscopre");
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie_file); 
$ret = curl_exec($ch);
curl_close($ch);
$nullc = stristr($ret,"TABLE");
if ($nullc)
{
$res = str_replace("checkbox","hidden",$ret);
$ret = str_replace("p_pm","p_pm[]",$res);
$res = strstr($ret,"<TR>");
$ret = str_replace("center","justify",$res);
$res = str_replace("<INPUT","<INPUT class='am-btn am-btn-primary am-radius'",$ret);
echo $res;
echo '<p class="am-alert am-alert-success">�����ɹ���ɣ�</p>';
?>               
                 </div>
                </div>
              </td>
            </tr>
		</tbody>
    </table>
<?php
}else{echo '<p class="am-alert am-alert-danger">�ƺ���Ϣ����û�з����κ���Ϣ����һ���������������Ϣ�������������æµ���ߵ�½�Ѿ�ʧЧ�������Է��ز˵�ҳ���Ի���<a href="do.php?action=Relogin">����������µ�¼</a></p>';}}
require_once("source/footer-gb1312.html");
require_once("source/kf5-gb1312.html");
}elseif ($_GET['action']=='CourseView'){
?>
<head>
<title>�α��ѯ���ҳ</title>
<meta http-equiv="Content-Type" content="text/html; charset=gb1312" /> 
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="renderer" content="webkit">
<meta http-equiv="Cache-Control" content="no-siteapp" />
<meta http-equiv="Content-Type" content="text/html; charset=GBK">
<link rel="stylesheet" href="http://cdn.amazeui.org/amazeui/2.4.1/css/amazeui.min.css"/>
</head>
<div class="am-g">
      <div class="am-u-sm-12">
        <form class="am-form" action="cursco.php" method="POST" onsubmit="addJYM(this,2)">
          <table class="am-table am-table-striped am-table-hover table-main">
          <tbody>
<?php
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://61.187.92.238:7778/pls/wwwbks/xk.CourseView");
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie_file); 
$ret = curl_exec($ch);
curl_close($ch);
$nullc = stristr($ret,"�����ɹ�!");
if ($nullc)
{
$res = strstr($ret,"<TR>");
echo $res;
?>
                 </div>
                </div>
              </td>
            </tr>
		</tbody>
    </table>
<?php
echo '<p class="am-alert am-alert-success">�����ɹ���ɣ�</p>';
}else{
	$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://61.187.92.238:7778/pls/wwwbks/xk.CourseView");
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie_file); 
$ret = curl_exec($ch);
curl_close($ch);
$nullc = stristr($ret,"�����ɹ�!");
if ($nullc)
{
$res = strstr($ret,"<TR>");
echo $res;
?>
                 </div>
                </div>
              </td>
            </tr>
		</tbody>
    </table>
<?php
echo '<p class="am-alert am-alert-success">�����ɹ���ɣ�</p>';
}else{echo '<p class="am-alert am-alert-danger">�ƺ���Ϣ����û�з����κ���Ϣ����һ���������������Ϣ�������������æµ���ߵ�½�Ѿ�ʧЧ�������Է��ز˵�ҳ���Ի���<a href="do.php?action=Relogin">����������µ�¼</a></p>';}}
require_once("source/footer-gb1312.html");
require_once("source/kf5-gb1312.html");
}elseif ($_GET['action']=='Xjcx'){
?>
<head>
<title>������Ϣ���ҳ</title>
<meta http-equiv="Content-Type" content="text/html; charset=gb1312" /> 
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="format-detection" content="telephone=no">
<meta name="renderer" content="webkit">
<meta http-equiv="Cache-Control" content="no-siteapp" />
<meta http-equiv="Content-Type" content="text/html; charset=GBK">
<link rel="stylesheet" href="http://cdn.amazeui.org/amazeui/2.4.1/css/amazeui.min.css"/>
</head>
<?php
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://61.187.92.238:7778/pls/wwwbks/bks_xj.xjcx");
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie_file); 
$ret = curl_exec($ch);
curl_close($ch);
$nullc = stristr($ret,"Ŀǰ����");
if ($nullc)
{
$res = strstr($ret,"<strong><font");
$ret = str_replace("img","b",$res);
$res = str_replace("˵��:Ŀǰ����ֻ�в���ϵѧ������Ƭ������ϵ��ѧ����Ƭ��½��ת�롣"," ",$ret);
$p=substr($_COOKIE["ACCOUNTID"],0,11);
$d_e=strstr($res, '199');
$d=substr($d_e,0,8);
echo "<p class='am-alert am-alert-warning'><a href='/iphoto/index.php?p=$p&d=$d'>��Ҫ��ȡ��һ��ͨ�ϵ���Ƭ�𣿵��ҵ��ҵ���</a></p><br>";
echo $res;
echo '</table><p class="am-alert am-alert-success">�����ɹ���ɣ�</p>';
}else{
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://61.187.92.238:7778/pls/wwwbks/bks_xj.xjcx");
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie_file); 
$ret = curl_exec($ch);
curl_close($ch);
$nullc = stristr($ret,"Ŀǰ����");
if ($nullc)
{
$res = strstr($ret,"<strong><font");
$ret = str_replace("img","b",$res);
$res = str_replace("˵��:Ŀǰ����ֻ�в���ϵѧ������Ƭ������ϵ��ѧ����Ƭ��½��ת�롣"," ",$ret);
$p=substr($_COOKIE["ACCOUNTID"],0,11);
$d_e=strstr($res, '199');
$d=substr($d_e,0,8);
echo "<p class='am-alert am-alert-warning'><a href='/iphoto/index.php?p=$p&d=$d'>��Ҫ��ȡ��һ��ͨ�ϵ���Ƭ�𣿵��ҵ��ҵ���</a></p><br>";
echo $res;
echo '</table><p class="am-alert am-alert-success">�����ɹ���ɣ�</p>';
}else{
echo '<p class="am-alert am-alert-danger">�ƺ���Ϣ����û�з����κ���Ϣ����һ���������������Ϣ�������������æµ���ߵ�½�Ѿ�ʧЧ�������Է��ز˵�ҳ���Ի���<a href="do.php?action=Relogin">����������µ�¼</a></p>';}}
require_once("source/footer-gb1312.html");
require_once("source/kf5-gb1312.html");
}elseif ($_GET['action']=='Cursco'){
?>
<head> 
<title>�������ҳ BETA</title> 
<meta http-equiv="Content-Type" content="text/html; charset=gb1312" /> 
<meta http-equiv="Content-Type" content="text/html" /> 
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="renderer" content="webkit">
<meta http-equiv="Content-Type" content="text/html; charset=GBK">
<link rel="stylesheet" href="http://cdn.amazeui.org/amazeui/2.4.1/css/amazeui.min.css"/>
</head>
<body>
<?php
$str = $_POST["p_pm"];
$n = count($str);	
?>
<div class="am-g">
      <div class="am-u-sm-12">
        <form class="am-form">
          <table class="am-table am-table-striped am-table-hover table-main">
		  <p class="am-alert am-alert-warning">�ɲμ������Ŀ�Ŀ�У�<?php echo $n;?>��</p>
          <thead>
              <tr>
               <th>�γ̺�</th><th>�γ���</th><th>�ɼ�</th><th>ѡ������</th><th>��߷�</th><th>��ͷ�</th><th>����</th>
              </tr>
          </thead>
          <tbody>
<?php
for($i=0;$i<$n;$i++)
{
$data['p_pm'] = $str[$i];
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://61.187.92.238:7778/pls/wwwbks/bkscjcx.cursco");
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);  
curl_setopt($ch, CURLOPT_POSTFIELDS, $data); 
curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie_file); 
$ret = curl_exec($ch);
curl_close($ch);
$nullc=stristr($ret,"</tr>
</table>
</td>
</tr>
</body>
</html>");
if($nullc)
{
$res = stristr($ret,"</strong></p></td>
</tr>");
$ret = str_replace("center","justify",$res);
$res = str_replace("
</table>
</td>
</tr>
</body>
</html>
"," ",$ret);
echo $res;
}else{
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://61.187.92.238:7778/pls/wwwbks/bkscjcx.cursco");
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);  
curl_setopt($ch, CURLOPT_POSTFIELDS, $data); 
curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie_file); 
$ret = curl_exec($ch);
curl_close($ch);
$res = stristr($ret,"</strong></p></td>
</tr>");
$ret = str_replace("center","justify",$res);
$res = str_replace("
</table>
</td>
</tr>
</body>
</html>
"," ",$ret);
echo $res;
}
}
echo '</table><p class="am-alert am-alert-success">�����ɹ���ɣ��������ݣ������ԣ�</p>';
?>
                 </div>
                </div>
              </td>
            </tr>
		</tbody>
    </table>
<?php
require_once("source/footer-gb1312.html");
require_once("source/kf5-gb1312.html");
}elseif ($_GET['action']=='Bkscjcx'){
?>
<title>�������Ŀ��ѯ���ҳ</title>
<meta http-equiv="Content-Type" content="text/html; charset=gb1312" /> 
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="renderer" content="webkit">
<meta http-equiv="Content-Type" content="text/html; charset=GBK">
<link rel="stylesheet" href="http://cdn.amazeui.org/amazeui/2.4.1/css/amazeui.min.css"/>
</head>
<body>
<div class="am-g">
      <div class="am-u-sm-12">
        <form class="am-form" action="do.php?action=Cursco" method="POST">
          <table class="am-table am-table-striped am-table-hover table-main">
		  <p class="am-alert am-alert-warning">��BETA��˵�������²�ѯ����������޺󼰸�Ŀγ̡�</p>
            <thead>
              <tr>
               <th>�γ̺�</th><th>�γ���</th><th>�γ�����</th><th>ѧ��</th><th>����ʱ��</th><th>�ɼ�</th>
              </tr>
          </thead>
          <tbody>
<?php
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://61.187.92.238:7778/pls/wwwbks/bkscjcx.bjgkc");
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie_file); 
$ret = curl_exec($ch);
curl_close($ch);
$nullc = stristr($ret,"˵����������ѯ����������޺󼰸�Ŀγ̡�");
if ($nullc)
{
$res = strstr($ret,'<td bgcolor="#EAE2F3"><p align="center">');
$ret = str_replace("center","justify",$res);
$res = str_replace("</CENTER>
<P>
˵����������ѯ����������޺󼰸�Ŀγ̡�
</BODY>
</HTML>"," ",$ret);
echo $res;
echo '<p class="am-alert am-alert-success">�����ɹ���ɣ�</p>';
?>               
                 </div>
                </div>
              </td>
            </tr>
		</tbody>
    </table>

<?php
}else{ 
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://61.187.92.238:7778/pls/wwwbks/bkscjcx.bjgkc");
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie_file); 
$ret = curl_exec($ch);
curl_close($ch);
$nullc = stristr($ret,"˵����������ѯ����������޺󼰸�Ŀγ̡�");
if ($nullc)
{
$res = strstr($ret,'<td bgcolor="#EAE2F3"><p align="center">');
$ret = str_replace("center","justify",$res);
$res = str_replace("</CENTER>
<P>
˵����������ѯ����������޺󼰸�Ŀγ̡�
</BODY>
</HTML>"," ",$ret);
echo $res;
echo '<p class="am-alert am-alert-success">�����ɹ���ɣ�</p>';
?>               
                 </div>
                </div>
              </td>
            </tr>
		</tbody>
    </table>

<?php
}else{
echo '<p class="am-alert am-alert-danger">�ƺ���Ϣ����û�з����κ���Ϣ����һ���������������Ϣ�������������æµ���ߵ�½�Ѿ�ʧЧ�������Է��ز˵�ҳ���Ի���<a href="do.php?action=Relogin">����������µ�¼</a></p>';}}
require_once("source/footer-gb1312.html");
require_once("source/kf5-gb1312.html");
}elseif ($_GET['action']=='Exit'){
 header("Location: index.php?action=Exit");
 setcookie ("SESSIONID", "", time() - 3600);
 if(isset($_COOKIE["ACCOUNTID"])){
 $cookie_file = constant("SYSTEM_ROOT").'/tmp/'.$_COOKIE["ACCOUNTID"].'.tmp';
 $result = @unlink ($cookie_file);
 setcookie ("ACCOUNTID", "", time() - 3600);}
}elseif ($_GET['action']=='Relogin'){
 header("Location: index.php?action=Relogin");
 setcookie ("SESSIONID", "", time() - 3600);
 if(isset($_COOKIE["ACCOUNTID"])){
 $cookie_file = constant("SYSTEM_ROOT").'/tmp/'.$_COOKIE["ACCOUNTID"].'.tmp';
 $result = @unlink ($cookie_file);
 setcookie ("ACCOUNTID", "", time() - 3600);}
}else{
  header("Location: index.php?action=illegal");}
}else{
  header("Location: index.php?action=illegal");}
?>
</body>
</html>