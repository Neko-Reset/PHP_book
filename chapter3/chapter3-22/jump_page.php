<?php
// PHPでページ移動する方法
// ボタンじゃなく読み込んでしまう
// その他のプログラムを止めるためexit();をセットで使う
// header( "location: 移動先のurl" );
// よくあるエラーは違うヘッダーを先に送信してしまうと発生する
header( "location: https://h2o-space.com/" );
exit();
?>
