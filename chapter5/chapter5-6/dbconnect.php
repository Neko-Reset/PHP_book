<?php
// 共通化するためのファイル
// ファイルの一番上にrequire( "dbconnect.php" ) ;で共通化できる
  try {
    $db = new PDO('mysql:dbname=php_test;host=localhost;charset=utf8','root','root');
    echo "接続OK!";
  } catch (PDOException $e) {
    echo 'DB接続エラー!: ' . $e->getMessage();
  }
  ?>
