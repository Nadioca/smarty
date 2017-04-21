<?php

require ('./smartyHeader.php');

$msg = 'Hello World';
$title = 'Hello Smarty World';

$smarty-> assign('title',$title);
$smarty-> assign('message',$msg);

$smarty-> display('test.tpl');

?>