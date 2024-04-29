<?php
//please give a flag 
highlight_file(__FILE__);
$parse = $_GET['parse'];
echo "<br>"."var of parse"."<br><br>";
var_dump($parse);
if (preg_match('/flag/i', $parse)) {
	echo "flag fliter\n";
	echo "<br>";
	var_dump($parse);
	die('Hacker!');
}
parse_str($parse, $o);
echo "----var o-----\n";
echo "<br>";
var_dump($o);
if ($o['y4'] === 'flag') {
    echo ('you get the flag');
}

