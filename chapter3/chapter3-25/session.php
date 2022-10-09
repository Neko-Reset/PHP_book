<?php
// cookieとの違いはwebブラウザを開いている間だけ覚えさせておきたいものはsession
// indexなどの方でunsetで消してあげる
// ページの先頭に書く
// pnp.iniで設定する
// ---------------------
// ; initialize session on request startup.
// session.auto_start = 0
//                     ↑1にする
// ---------------------

// セッションの内容が表示されない場合
// webサーバーの設定によるものである可能性がる
// session.use_cookie
// この値が0になっていたらsessionも利用できない
// 1にして再起動

session_start();
$_SESSION[ "session_message" ] = "セッションに値を保存しました";



?>

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
    セッションを保管しました。次のページにいきましょう
    &raquo; <a href = "index.php">次のページ</a>
  </pre>
</body>
</html>
