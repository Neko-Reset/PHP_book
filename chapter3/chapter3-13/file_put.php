<?php
// 関数を使ってファイルを保存できる
// ファイルの保存の仕方
// file_put_contents("パス/最後につけたいファイル名", "書き込みたい内容" );
// ブラウザを読み込むと発動する
$n = file_put_contents( "/Applications/MAMP/htdocs/php_book/chapter3/chapter3-13/new.text", "テスト" );

if ( $n ) {
  echo "true";
} else {
  echo "false";
}
?>
