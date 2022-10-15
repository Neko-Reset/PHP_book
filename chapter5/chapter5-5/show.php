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
  try {
    $db = new PDO('mysql:dbname=php_test;host=localhost;charset=utf8','root','root');
    echo "接続OK!";
  } catch (PDOException $e) {
    echo 'DB接続エラー!: ' . $e->getMessage();
  }
  
  echo"<br>";
  // より安全なパラメーターの作り
  // idは数値でなけらばならないので数値であるかの検査をする
  // is_numericは数字でどうかを判定する関数
  // ifで数字のチェック or 0以下だったら分岐に入る条件を作る
  $id = $_REQUEST[ "id" ];
  if ( !is_numeric($id) || $id <= 0 )  {
    echo "数字で指定してください";
    exit();
  }
  // 詳細画面の作り
  $memos = $db -> prepare( 'select * from memos where id = ?' );
  $memos -> execute( array( $_REQUEST['id'] ) );
  $memo = $memos -> fetch();
  ?>
  <article>
    <pre><?php echo $memo[ 'memo' ]; ?></pre>
    <a href="index.php">戻る</a>
  </article>
</body>
</html>
