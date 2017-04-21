<?php

require ('./smartyHeader.php');

$title = 'Mi Web';

$smarty-> assign('title',$title);

$smarty-> display('cabecera.tpl');

?>