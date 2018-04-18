<?php
/* Написать функцию, которая выводит список файлов в заданной директории, которые содержат искомое слово. Директория и
 искомое слово задаются как параметры функции */

function searchFiles ($dir, $word){
    foreach (scandir($dir) as $v){
        if ($v == strpos($v, $word)){
            echo $v.'<br/>';
        }
    }}
searchFiles (__DIR__,'task');