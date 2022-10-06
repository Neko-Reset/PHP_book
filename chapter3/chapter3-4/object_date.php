<?php

// オブジェクトの使い方
// dateの関数と使いやすい方を使えばいい
$today = new Datetime();
echo "現在は" . $today -> format( "G時 i分 s秒" ) . "です";

?>
