<?php
var_dump($_GET['username']);
if (!preg_match('/^[a-zA-Z0-9_]+$/', $_GET['username'])) {
    echo '用户名格式不正确';
    return;
}

if (!preg_match('/^[a-zA-Z0-9_]+$/', $_GET['password'])) {
    echo '密码格式不正确';
    return;
}
