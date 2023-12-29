<?php
//setCookie
    setcookie('name', 'Jack', time() + 86400 * 30);

if(isset($_COOKIE['name'])){
    echo $_COOKIE['name'];
}

//unset cookie
setcookie('name', '', time()-86400);
?>