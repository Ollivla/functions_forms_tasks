<?php
function unique($a){
    $b = explode(' ',mb_strtolower($a));
    echo 'Number of words: '.count($b).'<br/>';
    $b = array_unique($b);
    echo 'Number of unique words: '.count($b).'<br/>';
    echo 'Unique words: ';
     foreach ($b as $v){
        echo $v. '; ';
    }
}
unique($_POST['text']);