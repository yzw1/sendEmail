<?php

require_once './config.php';


class Check
{

    /**
     * @param $disks
     * @return bool
     * 进行邮箱警告
     */
    public static function email()
    {

        $mail = new PHPMailer(); //建立邮件发送类
        $mail->CharSet = "UTF-8";
        $address =RECEIVE_MAIL;
        $mail->IsSMTP(); // 使用SMTP方式发送
        $mail->Host = MAILBOX_SERVE; // 您的企业邮局域名
        $mail->SMTPAuth = true; // 启用SMTP验证功能
        $mail->Username = SEND_MAIL; // 邮局用户名(请填写完整的email地址)
        $mail->Password = AUTHORIZATION_CODE; // 邮局密码
        $mail->SMTPSecure = 'ssl';
        //设置ssl连接smtp服务器的远程服务器端口号，以前的默认是25，但是现在新的好像已经不可用了 可选465或587
        $mail->Port = 587;
        $mail->From = SEND_MAIL; //邮件发送者email地址
        $mail->FromName = ADDRESSEE;
        $mail->AddAddress($address, "title");//收件人地址，可以替换成任何想要接收邮件的email信箱,格式是AddAddress("收件人email","收件人姓名")
        //$mail->AddReplyTo("", "");qiuyang@gmail.com   qiuyangli@yeah.net
        //$mail->AddAttachment("/var/tmp/file.tar.gz"); // 添加附件
        $mail->IsHTML(true); // set email format to HTML //是否使用HTML格式
        $mail->Subject = "服务器"; //邮件标题
        $mail->Body = "服务器磁盘的详细分布:" //邮件内容，上面设置HTML，则可以是HTML
        if(!$mail->Send())
        {

            $error = $mail->ErrorInfo;
     
            return $error;
        }else{

           return true;

        }
    }
}

Check::email();



