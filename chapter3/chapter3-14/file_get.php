<?php
// ファイルを開く関数
// readfileで同じことができるけど変数に入れられないから非推奨
$n = file_get_contents( '/Applications/MAMP/htdocs/php_book/chapter3/chapter3-13/new.text' );

// echo $n;
// 既存のファイルに追記したい場合
$n .= "追記したい";

file_put_contents( '/Applications/MAMP/htdocs/php_book/chapter3/chapter3-13/new.text', $n );
readfile( '/Applications/MAMP/htdocs/php_book/chapter3/chapter3-13/new.text' );

?>
