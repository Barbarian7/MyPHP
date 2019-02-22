<?php
header("Content-type: text/html; charset=UTF-8");
if (empty($_SERVER['PHP_AUTH_USER'])) {
    header('WWW-Authenticate: Basic realm="Please input"');
    header('HTTP/1.0 401 Unauthorized');
    echo '請輸入正確的username及password 不可以取消！';
    exit;
} 
else
{
    echo "帳號是 ".$_SERVER['PHP_AUTH_USER']."<br>";
    echo "密碼是 ".$_SERVER['PHP_AUTH_PW']."<p>";
    $username="php";
    $yourpass="mysql";
    if (($_SERVER['PHP_AUTH_USER'] != $username) or
        ($_SERVER['PHP_AUTH_PW']) != $yourpass)
    {
        echo "登入失敗，請開啓新的瀏覽器重新登入";
    }
    else{
        echo "登入成功......";
    }
}
?>

