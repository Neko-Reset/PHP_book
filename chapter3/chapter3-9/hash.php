<?php
$array = [ "apple" => "りんご", "banana" => "バナナ", "lemon" => "レモン", "tomato" => "トマト" ];

// foreach文
foreach ( $array as $key => $value ) {
  echo "キーは" . $key . "値は" . $value . "です" . "<br>";
}

// 練習問題
// 連想配列にして画面に出力しましょう

$names = [ "田中" => "太郎", "鈴木" => "二郎", "新宿" => "歌舞伎町" ];

foreach ( $names as $key => $value ) {
  echo "キーは" . $key . "値は" . $value . "です" . "<br>";
}

?>
