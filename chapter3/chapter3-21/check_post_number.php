<?php

// 郵便番を正規表現を使ってチェックする
// この構文だとfalseになる
$zip = "987-6543";
$zip = mb_convert_kana( $zip, "n", "UTF-8" );

if ( preg_match( "/\A\d{3} [-]\d\{4}\z/", $zip) ) {
  echo "郵便番号:" . $zip; 
} else {
  echo "入力が正しくありません";
}


?>
