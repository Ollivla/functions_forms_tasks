<?php
function modifiedFile ($text, $n, $newFile){
    echo 'Original text: <br/>';
    echo $text . '<br/>';
    echo 'Modified text: <br/>';
    $arrText = explode(' ', $text);
    foreach ($arrText as $word) {
        if (mb_strlen($word) <= $n) {
            $newArr[] = $word;
        }
    }
    $newStr = implode(' ', $newArr);
    file_put_contents('task3_mod.txt', $newStr);
    echo $newFile;
}
modifiedFile (file_get_contents('task3.txt'), $_POST['value_n'], file_get_contents('task3_mod.txt'));