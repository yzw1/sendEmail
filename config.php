<?php

date_default_timezone_set('PRC');

require_once "./phpemail/class.phpmailer.php"; //这个是一个smtp的php文档，网上可以下载得到
const RECEIVE_MAIL = '##############';#接收着邮箱
const SEND_MAIL = '￥￥￥￥￥￥￥￥￥￥￥';#发送者邮箱
const AUTHORIZATION_CODE = '***********';#授权码
const MAILBOX_SERVE = 'stmp.163.com'; #邮箱服务器
const ADDRESSEE = '后台';  #表头





