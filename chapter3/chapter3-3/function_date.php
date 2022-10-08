<?php
  // 時間の取得dateを使う
  // G,i,sの他に呼び出せる英数がある
  // 日本時間の表示の仕方
  date_default_timezone_set( "Asia/Tokyo" );
  echo "現在は" . date( "G時 i分 s秒" ) . "です";

  // php.iniを書き換える方法もある
  // data.timezone = "Asia/Tokyo"

// .を使うと文字の連結ができる
// Rubyの + と一緒
echo "<br>";

echo "1 + 1は" . ( 1 + 1 ) . "です";

echo "<br>";

// 練習問題
// 今年の年と日付を出力

echo "今年は" . date( "Y年 n月 j月" ) . "です";
?>
