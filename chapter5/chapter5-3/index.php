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

    echo "<br>";
    // queryメソッドを実行すると PDO Statementオブジェクトという特殊なオブジェクトの形式で結果が取得できます
    // $records = $db -> query( 'select * from items' );で結果を変数に格納してる
    // オブジェクトからデータを取り出すにはfetchを使う
    // fetchの特性は次の行、次の行...と取り出すレコードが変わり無くなったらfalseを返す
    // この仕組みを利用してwhile文を使っている
    // $record = $records -> fetch () falseになるまで最後のレコードを取り出す
    $records = $db -> query( 'select * from items' );
    while ( $record = $records -> fetch () ) {
      // 連想配列になっている
      // カラム名を入れると取り出せる
      // Rubyの@user.nameで取り出すのと一緒
      echo $record[ "item_name" ] . " " . $record[ "id" ] . " " . $record[ "price" ] . "<br>";
    }
    ?>
  </pre>
</body>
</html>
