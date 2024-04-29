<?php
$parse = "parse=flag&y4=flag";
if (preg_match('/flag/i', $parse)) {
    die('Hacker!');
}

parse_str($parse, $o);
if ($o['y4'] === 'flag') {
    //echo ('you get the flag');
}

var_dump($o);
?>
