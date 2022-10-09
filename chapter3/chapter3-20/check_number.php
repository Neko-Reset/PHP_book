<?php
// 半角数字に直して数字であるかチェックする
// is_numeric数字であるか判定
// mb_convert_kana( $age, "n", "UTF-8" ); nで全角を半角にしてる
$age = "あいうえお";
$age = mb_convert_kana( $age, "n", "UTF-8" );
if ( is_numeric( $age ) ) {
  echo "true";
} else {
  echo "false";
}
?>
