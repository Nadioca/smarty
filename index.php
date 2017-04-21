<?php

require ('./smartyHeader.php');

include ('./header.php');

$names = array('Jeff','Jhon','Maria');
$persona = array('age'=>'28','hair'=>'black','career'=>'web developer');

$msg = 'Hello World';

$smarty-> assign('message',$msg);
$smarty-> assign('names',$names);
$smarty-> assign('persona',$persona);

$smarty-> display('index.tpl');

include ('./footer.php');

?>