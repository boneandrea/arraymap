<?php

function readSectionTemplates(){
    // 既知のディレクトリをオープンし、その内容を読み込みます。
    $dir=".";

    if (is_dir($dir)) {
        foreach(scandir($dir) as $file){
            if(preg_match("/section/", $file)){
                include($file);
            }
        }
    }
}
