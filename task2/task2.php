<?php
$a = $_POST['message'];
$a = explode(' ', $a);
function sortFunc($a, $b)
{
 return (mb_strlen($a) > mb_strlen( $b)) ? -1 : 1;
}
usort($a, "sortFunc");
echo "Three longest words: <br/>";
foreach ($a as $k => $v){
    if ($k<3){
        echo $v .'<br/>';}}