<?php
require '../lib/PHPFetion.php';

$fetion = new PHPFetion('13913038781', '222222');	// 手机号、飞信密码
$fetion->send('13913038781', 'Hello!');	// 接收人手机号、飞信内容
