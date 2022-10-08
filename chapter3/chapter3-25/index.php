<?php session_start(); ?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <pre>
    セッションの値: <?php echo $_SESSION[ "session_message" ]; ?>
    <?php session_unset(); ?>
    <!-- 個別で消したい場合 -->
    <!-- unset( $_SESSION[ "消したい値" ] ); -->
  </pre>
</body>
</html>
