<?php
$rhaco3_min = str_replace(
	array(
		'##RHACO3_PHP##',
		'##AUTOLOAD_PHP##'
	),
	array(
		trim(str_replace('<?php','',file_get_contents(__DIR__.'/lib/Rhaco3.php'))),
		trim(str_replace('<?php','',file_get_contents(__DIR__.'/bin/autoload.php'))),
	),
	file_get_contents(__DIR__.'/bin/templates/rhaco3_min.template.php')
);
$rhaco3 = str_replace(
	'##RHACO3_MIN_PHP##',
	trim(str_replace('<?php','',$rhaco3_min)),
	file_get_contents(__DIR__.'/bin/templates/rhaco3.template.php')
);

file_put_contents(__DIR__.'/bin/rhaco3_min.php',$rhaco3_min);
file_put_contents(__DIR__.'/bin/rhaco3.php',$rhaco3);