<?php
// jsonを読み込む
// Jsonは元々JavaScriptで使われていたデータ形式
//ここでjsonのデータ化
$file = file_get_contents( "https://h2o-space.com/feed/json" );
// jsonをエンコード化すると配列になる
$json = json_decode( $file );

foreach ( $json -> items as $item ) :

?>

・<a href = "<?php echo $item -> url ; ?>"><?php echo $item -> title ; ?></a>

<?php endforeach ; ?>
