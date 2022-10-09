<?php
// sprintfとは
// 書籍を整える
// ２桁にしたい時など
$date = sprintf( "%04d年 %02d月 %02d日", 2022, 10, 4 );
echo $date;

// 文字列で消したい場合%s
echo "<br>";
echo sprintf( "%s", "abc" );
// abcが返ってくる
echo "<br>";
// 0で埋めたい場合
echo sprintf( "%04d", 10 );
// 0010が返ってくる
?>
