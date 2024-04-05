<?php
$str = 'ahb acb aeb aeeb adcb axeb';
$regexp = '/a..b/';
preg_match_all($regexp, $str, $matches);
foreach ($matches[0] as $arr) {
    echo $arr . "\n";
}
?>
