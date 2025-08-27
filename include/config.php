<?php
// #################################################################
// ### 設定
// #################################################################

session_cache_limiter('none');
session_name('SID');
session_start();

header('X-FRAME-OPTIONS: SAMEORIGIN');
date_default_timezone_set('Asia/Tokyo');

include_once(dirname (__FILE__).'/function.php');
?>