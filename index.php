<?php
require_once 'components/Router.php';
require_once 'components/Db.php';

//echo 'worked';

//ini_set('display_errors','off');

$site=new Router();
$site->Run();