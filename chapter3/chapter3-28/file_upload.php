<?php
// 写真のアップローの仕方

// プログラムのポイント
// ファイルアップロードをするには工夫が必要。
// enctypeでエンコード化作業
// multipart/form-dateという種類は、これまでの文字情報のみのフォームに加えてファイルをそのまま送信できる方式
// ファイルをアップロードする場合、必ず必要な属性
// ファイルをアップロードするには必ずPOST通信
// $_FILESは連想配列のなっていて内容はname,type,error,などに分かれている
// tmp_nameはtemporary Nameの略で一時的にアップロードされたファイルのパスとファイル名
// ファイルアップロードはフォームが送信されると一時的にファイルを保存します
// この一時的に保存されたファイルを移動するのがmove_uploaded_file
// move_uploaded_file(コピー元, コピー先);
// substrで拡張子を検査をする -4とすることでケツの4文字をifで検査

// アップロードの際に自動的に保存されるフォルダはphp.iniで設定できるけど特別な理由がない限り変更する必要はない

// どこに保存されるか確認したい場合
// echo ini_get( "uploaded_tmp_dir" );
?>

<form action = "index.php" method = "POST" enctype = "multipart/form-date">
  <input type="text" name = "ok">
  写真: <input type="file" name = "picture">
  <input type="submit" value = "送信">
</form>
