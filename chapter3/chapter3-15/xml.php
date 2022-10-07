<?php

// webAPIではXMLファイルをよく扱うことがある
// XMLの情報を読み込む
// phpでxmlの開き方 ->を使う
$xml = simplexml_load_file( "https://h2o-space.com/feed" );
foreach ( $xml -> channel -> item as $item ) :

?>
・<a href = "<?php echo( $item -> link ); ?>"><?php echo( $item -> title ); ?></a>
<?php endforeach ;?>
