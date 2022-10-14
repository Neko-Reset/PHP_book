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
    // PDOでMySQLに接続する方
    // PDOオブジェクトを作る
    // データーベースオブジェクトのインスタンス  =  new PDO ( データーベース名, ユーザー名, パスワード, オプション );
    // MAMPで設定していないユーザー名,パスはデフォルトの値はroot

    // tryは例外処理で書くコードデータベースの接続でうまくいかなかった時にエラーを表示させる
    // catchとセットで使う
    // 見やすく空白入れると何故かSQL構文が使えなくなるからこの記述をデフォで覚える
    try {
      $db = new PDO('mysql:dbname=php_test;host=localhost;charset=utf8','root','root');
      echo "接続OK!";
    } catch (PDOException $e) {
      echo 'DB接続エラー!: ' . $e->getMessage();
    }

    // execメソッドは接続しているデータベースでSQLを実行するメソッド
    // insert, update, deleteができる
    // nullを許可設定していないと値を入れないといけない
    $count = $db -> exec( 'insert into items set id = 2, maker_id = 5, price = 200, sales = 0, created = now(), item_name = "りんご", keyword = "テスト"' );
    if ($count) {
      echo $count . "件,成功しました";
    } else {
      echo "失敗しました";
    }
    ?>
  </pre>
</body>
</html>
