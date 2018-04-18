<?php
// работает и с латинницей и с кириллицей

if(!function_exists('mb_ucfirst'))
{
    function mb_ucfirst($a, $c = 'UTF-8')
    {
        return mb_strtoupper (mb_substr ($a, 0, 1, $c), $c) .
            mb_substr ($a, 1, mb_strlen($a, $c), $c);
    }
}
function register($string) {
    $sentences = preg_split('/([.?!]+)/', $string, -1, PREG_SPLIT_NO_EMPTY|PREG_SPLIT_DELIM_CAPTURE);
    $new_string = '';
    foreach ($sentences as $k => $s) {
        $new_string .= ($k & 1) == 0 ? mb_ucfirst(strtolower(trim($s))) : $s.' ';
    }
    return trim($new_string);
}
echo register ($_POST['text']);