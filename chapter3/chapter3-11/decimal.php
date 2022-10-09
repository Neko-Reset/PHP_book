<?php
// 少数を整数に切り上げる、切り下げる
// 切り上げ ⇨ ceil
// 切り捨て ⇨ floor
// 四捨五入 ⇨ round

$n = 100 / 3000 * 100;

echo floor( $n );
echo "<br>";
echo ceil( $n );
echo "<br>";
// roundは第二引数まで入れられる
// round( 元の値, 小数を第何位を対するか );
echo round( $n, 1 );
?>
