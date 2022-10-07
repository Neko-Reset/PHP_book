<?php

// JSONファイルにしたい情報を配列にしてあげる
$json = [
  "title" => "JSONサンプル",
  "items" => [
    "items01" => "1つめ",
    "items02" => "2つめ"
  ]
];

// json_encode関数を使ってfile_put_contentsに書き出す

$file = json_encode( $json, JSON_UNESCAPED_UNICODE );
file_put_contents( '/Applications/MAMP/htdocs/php_book/chapter3/chapter3-17/josn_make_file', $file );


?>
