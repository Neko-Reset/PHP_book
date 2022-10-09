<!-- 書籍通りのコードだけど動かない -->
<?php
$file = $_FILES['picture'];
?>

ファイル名(name) : <?php print($file['name']); ?>
ファイルタイプ(type) : <?php print($file['type']); ?>
アップロードされたファイル(tmp_name) : <?php print($file['tmp_name']); ?>
エラー内容(error) : <?php print($file['error']); ?>
サイス(size) : <?php print($file['size']); ?>

<?php
$ext = substr($file['name'], -4);
if ($ext == '.git' || $ext == '.jpg' || $ext == '.png') :
  $file_path = '/Applications/MAMP/htdocs/php_book/chapter3/chapter3-28/img' . $file['name'];
  $success = move_uploaded_file($file['tmp_name'], $file_path);
  if ($success) :

?>
<img src="<?php print($file_path) ?>" >
  <?php else : ?>
    ファイルアップロードに失敗しました。
  <?php endif ; ?>
<?php else : ?>
  拡張子が.gif, .jpg, .pngのいずれかのファイルをアップロードしてください。
<?php endif ; ?>


<?php exit(); ?>

<?php
$file = $_FILES[ "picture" ];
?>

ファイル名( name ) : <?php echo $file[ "name" ]; ?>
ファイルタイプ( type ) : <?php echo $file[ "type" ]; ?>
アップロードされたファイル( tmp_name ) : <?php echo $file[ "tmp_name" ]; ?>
エラー内容( error ) : <?php echo $file[ "error" ]; ?>
サイズ( size ) : <?php echo $file[ "size" ]; ?>

<?php
$ext = substr( $file[ "name" ], -4 );
if ( $ext == ".gif" || $ext == ".jpg" || $ext == ".png" ) :
  $file_path = '/Applications/MAMP/htdocs/php_book/chapter3/chapter3-28/img' . $file[ "name" ];
  $success = move_upload_file( $file[ "tmp_name" ], $file_path );
  if ( $success ) :

?>
<img src="<?php echo $file_path ?>">
  <?php else : ?>
    ファイルアップロードに失敗しました。
  <?php endif ; ?>

<?php else : ?>
  拡張子が.gif, .jpg, .pngのいずれかのファイルをアップロードしてください。
<?php endif ;?>
