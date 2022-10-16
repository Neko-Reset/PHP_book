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
  // ifで数字のチェック 成立したら変数に格納
  if ( isset( $_REQUEST[ "id" ] ) && is_numeric( $_REQUEST[ "id" ] ) ) {
    $id = $_REQUEST[ "id" ];
    $memos = $db -> prepare( 'select * from memos where id=?' );
    $memos -> execute( array( $id ) );
    $memo = $memos -> fetch();
  }
  
  ?>
  <form action = "edit_do.php" method = "post">
    <!-- このinputでどのIDが変更されるか指定している -->
    <input type = "hidden" name = "id" value = "<?php echo $id ; ?>">
    <textarea name = "memo" cols="30" rows="10"><?php echo $memo[ "memo" ] ; ?></textarea><br>
    <button type = "submit">登録する</button>
  </form>
</body>
</html>
