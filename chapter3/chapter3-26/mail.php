<?php
// 入会時にメール送信などしたい場合
// このプログラムの動作の確認するには、メールサーバーの稼働やDNSサーバーの稼働が必要となるため、MAMPやXAMPPの環境では動作を確認できません
// 適当なレンタルサーバーじゃないとダメ

// このプログラムのポイント
// 日本語用のmail関数を使う
// mb_send_mail( 送り先のメールアドレス, サブジェクト, 本文, 送り主のメールアドレス等 )
// この関数を使う場合 PHPの設定で言語や文字コードを設定しておく必要があります
// php.iniの設定を変更するのがいいのだけれどもサーバーによっては変更できない場合もある
// ここでは一時的に設定を変えてる


$email = "master@h2o-space.com";

// 使用言語を日本語に
mb_language( "japanese" );
mb_internal_encoding( "UTF-8" );

// 差出人 件名 本文を設定
$from = "noreply@example.com";

$subject = "よく分かるPHPの教科書";
$body = "このメールは、よく分かるPHPの教科書から送られています";
$success = mb_send_mail( $email, $subject, $body, "From: " . $from );

// このコードだとメールアドレスだけの表示
// test@gamil.com

// 名前をつけて送信したい場合
// 鈴木<test@gmail>
// MIMEヘッダと呼ばれる形式に変更する必要がある MIMEヘッダに変換するためには文字コードがJIS形式でないとダメ
// 今回は文字コードとしてUTF-8使っているため もし差出人の名前を設定したい場合はmb_conver_encoding(もしかしたらconvertかも)
// $from = mb_encode_mimeheader( mb_conver_encoding( "鈴木", "JIS", "UTF-8" ) ) . "support@h2o-space.com";

// メールがこない場合は迷惑メールなどに引っかかってるかも



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
    <?php if ( $success  ) : ?>
      電子メールを送信しました。メールボックスを確認して見てください
    <?php else : ?>
      電子メールの送信に失敗しました。webサーバーの設定などを確認してください
    <?php endif ; ?>
  </pre>
</body>
</html>
