<?php
if (isset($_GET['user_agent'])){
    echo $_SERVER['HTTP_USER_AGENT'] . "\n\n";
}

if (isset($_GET['user_IP'])){
echo $_SERVER['REMOTE_ADDR'];
}

if (isset($_GET['server_name'])){
    echo $_SERVER['SERVER_NAME'];
}
