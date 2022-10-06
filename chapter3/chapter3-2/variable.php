<?php

$sum = 100 + 1050 + 200;

?>

合計金額は:<?php echo $sum; ?>です<br>
税金価格は:<?php echo $sum * 1.10; ?>です

<br>
<!-- 変数にした方が分かりやすい -->
<?php
$tax = 1.10;
echo $sum * $tax;
echo "<br>";
// 練習問題
// 次のプログラムを使い画面に10と表示させる

$n = 8 + 2;

echo $n;

?>
