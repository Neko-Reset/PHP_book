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
  <pre>
    <?php
    try {
      $db = new PDO('mysql:dbname=php_test;host=localhost;charset=utf8','root','root');
      echo "接続OK!";
      // $db -> exec( 'insert into memos set memo = " ' . $_POST["memo"] . ' ", created = now()' );
    } catch (PDOException $e) {
      echo 'DB接続エラー!: ' . $e->getMessage();
    }

    // prepareメソッドはサニタイズ処理をしてくれている
    // bindparam(パラメータの順番, 値,変数しか入らないから数字を変数に入れる, PDO::PRAM_INT);
    // 3つ目は3種類ある
    // PDO::PRAM_STR 文字列(これが標準)
    // PDO::PRAM_NULL NULL値
    // PDO::PRAM_BOOL プール値 true/false

    $statement = $db -> prepare( 'insert into memos set memo =?, created = now()');
    $statement -> bindParam( 1, $_POST[ "memo" ] );
    $statement -> execute();
    if ($statement) {
      echo "メモ成功";
    } else {
      echo "失敗";
    }

    if(!empty($_POST['memo'])){
      echo "true";
    } else {
      echo "false";
    }
    ?>
  </pre>
</body>
</html>
