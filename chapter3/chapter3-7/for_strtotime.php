<?php

// for文で1年後のカレンダーを作成する
// date( "n/j( D )" )で何月,何日,曜日の表示ができる
// dateの2つ目の引数にはタイムスタンプを入れる
// タイムスタンプ = 1970 1/1からコンピューターが日付を計算をしている
// strtotimeは文字列をタイムスタンプに変換する関数


// for ( $i = 1; $i <= 365; $i++ ) {
//   $date = date( "n/j( D )", strtotime( "+". $i . "day" ) );
//   echo $date;
//   echo "<br>";
// }

// strtotime使い方
// 徳川家康のタイムスタンプ
// $ieyasu = strtotime( "1543/1/31" );
// echo $ieyasu;

// 明後日のタイムスタンプ
// $day_tomorrow = strtotime( "+2day" );
// echo $day_tomorrow;

// $day = date( "n/j( D )", $day_tomorrow );
// echo $day;

// date( "n/j( D )")で現在の日時を取得
// 1年後まで表示させたい場合strtotime( "+" . $i . "day" );を2つ目の引数に入れる必要がある
// for ( $i = 1; $i <= 365; $i++ ) {
//   $time = strtotime( "+" . $i . "day" ); //+1dayになっている
//   $day_time = date( "n/j( D )", $time );
//   echo $day_time;
//   echo "<br>";
// }

// 練習問題
// whileを使って再現してみる

$n = 1;
while ( $n <= 365) {
  $time = strtotime( "+" . $n . "day" );
  $day = date( "n/j( D )", $time );
  echo $day;
  $n++;
  echo "<br>";
}
?>
