<?php

//var_dump($_POST); exit;
//$username = isset($_POST['username']) ? $_POST['username'] : '';
// $username = $_POST['username'];
// $password = $_POST['password'];
// $password1 = $_POST['password1'];
// $email = $_POST['email'];
// $fav = $_POST['fav'];
// $verify =$_POST['verify'];
//接收数据
$username = isset($_POST['username']) ? $_POST['username'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';
$password1 = isset($_POST['password1']) ? $_POST['password1'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
//用户是否选择了兴趣爱好
$fav = isset($_POST['fav']) ? $_POST['fav'] : '';
if (!empty($fav)) {
    $favStr = join(',', $fav);//数组转为字符串，以,号分隔
}
$verify = trim(strtolower(isset($_POST['verify']) ? $_POST['verify'] : ''));
//$verify1 = trim(strtolower(isset($_POST['verify1']) ? $_POST['verify1'] : ''));
$redirectUrl = '<a href="reg.php">请重新注册</a>';
//检测第一个字符是否为字母,长度6~10；
$char = $username{0};
$ascii = ord($char);//转换字符串第一个字节为 0-255 之间的值
if (!(($ascii >= 65 && $ascii <= 90) || ($ascii >= 97 && $ascii <= 122))) {
    exit('用户名首字母不是以字母开头'.$redirectUrl);
}
$userLen = strlen($username);

if ($userLen < 6 || $userLen > 10) {
    exit('用户名长度为6~10位'.$redirectUrl);
}
//检测密码，不能为空,长度6~10；
$pwLen = strlen($password);
// var_dump($pwLen,$password);
// exit;
if ($pwLen == 0) {
    exit('密码不能为空'.$redirectUrl);
}
if ($pwLen < 6 || $pwLen > 10) {
    die('密码不符合规范'.$redirectUrl);
}
//检测2次密码是否一致
// if($password==$password1){
//     die('2次密码不一致'.$redirectUrl);
// }
if (strcmp($password, $password1) !== 0) {
    die('2次密码不一致'.$redirectUrl);
}
//检测邮箱的合法性
if (strpos($email, '@') == false) {
    exit('非法邮箱'.$redirectUrl);
}
//检测验证码是否一致
// if ($verify !== $verify1) {
//     exit('验证码错误'.$redirectUrl);
// }
$password = md5($password);//加密
echo '注册成功'."\n";
$userInfo = <<<EOF
<table border='1' cellspacing='0' cellpadding='0' width="70">
    <tr>
        <td>用户名</td>
        <td>密码</td>
        <td>邮箱</td>
        <td>兴趣爱好</td>
    </tr>
    <tr>
        <td>{$username}</td>
        <td>{$password}</td>
        <td>{$email}</td>
        <td>{$favStr}</td>
    </tr>
</table>
EOF;
echo $userInfo;

