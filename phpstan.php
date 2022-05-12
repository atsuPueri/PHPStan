<?php

// https://packagist.org/packages/phpstan/phpstan#1.6.8 PHPStanバージョン一覧
// https://lazesoftware.com/blog/210906/ 参考サイト



// 解析したいファイル一覧
// 複数ファイル解析したい場合は解析したいディレクトリ名でも解析可能
$files_array = [
    // './class/testclass.php',
    "./"
    // 複数ファイル解析したい場合は解析したいディレクトリ名でも解析可能
    // './class',
];
$files = implode(' ', $files_array);


// 解析レベル
$level = '--level '; // '-l'でも可
$level .= 'max'; // 0~9まで指定可能 最大レベルは'max'と書くこともできる。




// コマンド組み立て
$command = '';
$command .= '.\vendor\bin\phpstan ';
$command .= 'analyse '; // 解析
$command .= $level . ' '; // 解析レベル
$command .= $files; // 解析するファイル名



// 表示
echo '<br>=========== 実行コマンド ===========<br>';
echo $command;
echo '<br>===============================<br>';

// 実行
exec($command, $output);
?><pre><?php var_dump($output); ?></pre><?php 

