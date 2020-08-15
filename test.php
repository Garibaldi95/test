
































Пусть в корне вашего сайта лежит папка dir с текстовыми файлами и подпапками.
Рекурсивно пройдитесь по всем вложенным папкам и в конец каждого текстового файла запишите восклицательный знак.
<?php
getFiles('test');

function getFiles($dir){
$files = array_diff(scandir($dir),['..','.']);

foreach ($files as $file){
  $path =$dir.'/'.$file;
    if (is_dir($path)){
        echo $file.'<br>';
        getFiles($path);
    }
    else
    echo $file.'<br>';
}}


















































