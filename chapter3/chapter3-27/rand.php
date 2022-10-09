<?php

// 2つのトップページにランダムで誘導する
// ランダムの値 = rand( 最小の数値, 最大の数値 );
// 0だったらa 違ったら1

if ( rand( 0, 1 ) === 0 ) {
  header( "location: a.html" );
} else {
  header( "location: b.html" );
}

?>
