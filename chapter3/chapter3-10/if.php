<?php
// elseを省くと何もしないになる

$n = 0;
// 比較するものがないからfalseが帰ってくる
if ( $n ) {
  echo "true";
} else {
  echo "false";
}

echo "<br>";

?>

<!-- 練習問題 -->
<!-- 変数が0だった時 "1以上の数字を出力してください"を出力させる -->
<?php $s = 0;?>
<?php if ( $s === 0 ) : ?>
  <?php echo "1以上の数字を出力してください"; ?>
<?php endif; ?>
