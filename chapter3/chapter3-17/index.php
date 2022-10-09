お名前:<?php echo htmlspecialchars( $_GET[ "your_name" ] , ENT_QUOTES ); ?>
メモ:<?php echo htmlspecialchars( $_GET[ "memo" ] , ENT_QUOTES ); ?>
性別:<?php echo htmlspecialchars( $_GET[ "gender" ] , ENT_QUOTES ); ?>


<?php
// $_REQUEST = グローバル変数
// $_REQUESTは$_GET $_POSTに関わらず利用できる
// 危険性が増すから基本的に$_GET $_POSTで分ける

// htmlspecialcharsでjs対策
// ENT_QUOTESはシングルクオーテーションを安全に受け取る
// 安全性が増すから基本つける

// PHPの設定でmagic_quotes_gpcというのがあり\で""を無効化する能力を自動的に無害化している
?>
