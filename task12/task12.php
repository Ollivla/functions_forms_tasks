<?php
function reverseSentence ($a){
$a = explode ('.',$a);
$a = array_filter ($a);
krsort($a);
foreach ($a as $k => $v){
    echo $v.'. ';
}}
reverseSentence($_POST['text']);