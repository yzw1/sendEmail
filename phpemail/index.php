<?php

require("class.phpmailer.php"); //这个是一个smtp的php文档，网上可以下载得到
$mail = new PHPMailer(); //建立邮件发送类
$mail->CharSet = "UTF-8";
$address ="2713497141@qq.com";
$mail->IsSMTP(); // 使用SMTP方式发送
$mail->Host = "smtp.163.com"; // 您的企业邮局域名
$mail->SMTPAuth = true; // 启用SMTP验证功能
$mail->Username = "yinzhanwei1008@163.com"; // 邮局用户名(请填写完整的email地址)
$mail->Password = "sinker1008"; // 邮局密码
//$mail->Port=25;
$mail->SMTPSecure = 'ssl';

//设置ssl连接smtp服务器的远程服务器端口号，以前的默认是25，但是现在新的好像已经不可用了 可选465或587
$mail->Port = 587;
$mail->From = "yinzhanwei1008@163.com"; //邮件发送者email地址
$mail->FromName = "劲爆";
$mail->AddAddress("qiuyang@gmail.com", "title");//收件人地址，可以替换成任何想要接收邮件的email信箱,格式是AddAddress("收件人email","收件人姓名")
//$mail->AddReplyTo("", "");qiuyang@gmail.com   qiuyangli@yeah.net

//$mail->AddAttachment("/var/tmp/file.tar.gz"); // 添加附件
$mail->IsHTML(true); // set email format to HTML //是否使用HTML格式

$mail->Subject = "在线Q聊"; //邮件标题
$mail->Body = "在线Q聊网站 http://www,zaixianqliao.com 欢迎访问"; //邮件内容，上面设置HTML，则可以是HTML

if(!$mail->Send())
{
    echo "邮件发送失败. <p>";
    echo "错误原因: " . $mail->ErrorInfo;
    exit;
}else{

    echo 'ml';

}







?>