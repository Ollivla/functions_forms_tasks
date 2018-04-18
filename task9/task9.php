<?php
// в этом случае работает с латинницей и кириллицей

function utf8_strrev($str){
    preg_match_all('/./us', $str, $ar);
    return implode(array_reverse($ar[0]));
}
echo utf8_strrev($_POST['text']);

/* with PHP function
но работает только с латинницей

$a = $_POST ['message'];
echo strrev($a);

*/