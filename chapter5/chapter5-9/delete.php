<?php require('/Applications/MAMP/htdocs/php_book/chapter5/chapter5-6/dbconnect.php') ; ?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h2>Practice</h2>
  <?php
  if ( isset( $_REQUEST[ "id" ] ) && is_numeric( $_REQUEST[ "id" ] ) ) {
    $id = $_REQUEST[ "id" ];
    $statement = $db -> prepare( 'delete from memos where id = ?' );
    $statement -> execute( array( $id ) );
  }
  ?>
  <pre>
    <p>メモを削除しました</p>
  </pre>
  <a href="index.php">戻る</a>
</body>
</html>
