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
  $statement = $db -> prepare( 'update memos set memo = ? where id = ?' );
  $statement -> execute( array( $_POST[ "memo" ], $_POST[ "id" ] ) );
  ?>
  <p>メモの内容を変更しました</p>
  <p><a href="index.php">戻る</a></p>
</body>
</html>
