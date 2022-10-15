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

  // データの一覧・詳細画面を作る
  // データの一覧表示
  // 文字数の多いレコードだとスマホなどで見るのが大変になるので見やすくするため文字の表示を制限する
  // 切り取られた文字列 = mb_substr(切り取る文字列, 最初の位置, 文字数);
  // 0から10文字までの制限
  // hrefの中、PHPのパラメータを作っている
  $memos = $db -> query( 'select * from memos order by id desc' );
  ?>
  <?php
  // 10文字以上だった場合...と表示するコードの書き方
  // 三項演算子
  // echo mb_strlen( $memo[ "memo" ] ) > 10 ? "..." : "" ;
  // 引数1に条件,引数に成立したら表示したい内容,引数3成立しなかったら””で何もしない
  ?>
  <article>
    <?php while ( $memo = $memos -> fetch() ) : ?>
        <p>
          <a href = "show.php?id=<?php echo $memo["id"] ; ?>">
            <?php echo mb_substr( $memo['memo'], 0, 10); ?>
            <?php echo mb_strlen( $memo[ "memo" ] ) > 10 ? "..." : "" ; ?>
          </a>
        </p>
        <time><?php echo $memo['created'] ; ?></time>
        <hr>
    <?php endwhile ; ?>
  </article>
</body>
</html>
