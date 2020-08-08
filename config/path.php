<?php
define('ABSPATH', dirname(dirname(__FILE__)) . '/');
$ABSPATH_Array = explode("\\", ABSPATH);
$localhostSiteName = $ABSPATH_Array[count($ABSPATH_Array) - 1];
define('URL', 'http://localhost/speakerportal/');
define('PAGENAME', 'Speaker Portal');
